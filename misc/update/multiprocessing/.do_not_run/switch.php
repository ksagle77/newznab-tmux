<?php

if (!isset($argv[1])) {
	exit('This script is not intended to be run manually.' . PHP_EOL);
}

require_once dirname(__DIR__, 4) . DIRECTORY_SEPARATOR . 'bootstrap/autoload.php';

use App\Models\Group;
use App\Models\Settings;
use \Blacklight\db\DB;
use \Blacklight\processing\PostProcess;
use \Blacklight\processing\ProcessReleases;
use \Blacklight\processing\post\ProcessAdditional;
use Blacklight\Backfill;
use Blacklight\Binaries;
use Blacklight\Nfo;
use Blacklight\NNTP;
use Blacklight\processing\ProcessReleasesMultiGroup;

// Are we coming from python or php ? $options[0] => (string): python|php
// The type of process we want to do: $options[1] => (string): releases
$options = explode('  ', $argv[1]);

switch ($options[1]) {

	// Runs backFill interval or all.
	// $options[2] => (string)group name, Name of group to work on.
	// $options[3] => (int)   backfill type from tmux settings. 1 = Backfill interval , 2 = Bakfill all
	case 'backfill':
		if (in_array((int)$options[3], [1, 2], false)) {
			$pdo = new DB();
			$value = Settings::settingValue('site.tmux.backfill_qty');
			if ($value !== false) {
				$nntp = nntp($pdo);
				(new Backfill())->backfillAllGroups($options[2], ($options[3] === 1 ? '' : $value['value']));
			}
		}
		break;

	/*  BackFill up to x number of articles for all groups.
	 *
	 * $options[2] => (string) Group name.
	 * $options[3] => (int)    Quantity of articles to download.
	 */
	case 'backfill_all_quantity':
		$pdo = new DB();
		$nntp = nntp($pdo);
		(new Backfill())->backfillAllGroups($options[2], $options[3]);
		break;

	// BackFill a single group, 10000 parts.
	// $options[2] => (string)group name, Name of group to work on.
	case 'backfill_all_quick':
		$pdo = new DB();
		$nntp = nntp($pdo);
		(new Backfill())->backfillAllGroups($options[2], 10000, 'normal');
		break;

	/* Get a range of article headers for a group.
	 *
	 * $options[2] => (string) backfill/binaries
	 * $options[3] => (string) Group name.
	 * $options[4] => (int)    First article number in range.
	 * $options[5] => (int)    Last article number in range.
	 * $options[6] => (int)    Number of threads.
	 */
	case 'get_range':
		$pdo = new DB();
		$nntp = nntp($pdo);
		$groupMySQL = Group::getByName($options[3]);
		if ($nntp->isError($nntp->selectGroup($groupMySQL['name']))) {
			if ($nntp->isError($nntp->dataError($nntp, $groupMySQL['name']))) {
				return;
			}
		}
		$binaries = new Binaries(['NNTP' => $nntp, 'Settings' => $pdo, 'Groups' => null]);
		$return = $binaries->scan($groupMySQL, $options[4], $options[5], (Settings::settingValue('..safepartrepair') == 1 ? 'update' : 'backfill'));
		if (empty($return)) {
			exit();
		}
		$columns = [];
		switch ($options[2]) {
			case 'binaries':
				if ($return['lastArticleNumber'] <= $groupMySQL['last_record']){
					exit();
				}
				$columns[1] = sprintf(
					'last_record_postdate = %s',
					$pdo->from_unixtime(
						(is_numeric($return['lastArticleDate']) ? $return['lastArticleDate'] : strtotime($return['lastArticleDate']))
					)
				);
				$columns[2] = sprintf('last_record = %s', $return['lastArticleNumber']);
				$query = sprintf(
					'UPDATE groups SET %s, %s, last_updated = NOW() WHERE id = %d AND last_record < %s',
					$columns[1],
					$columns[2],
					$groupMySQL['id'],
					$return['lastArticleNumber']
				);
				break;
			case 'backfill':
				if ($return['firstArticleNumber'] >= $groupMySQL['first_record']){
					exit();
				}
				$columns[1] = sprintf(
					'first_record_postdate = %s',
					$pdo->from_unixtime(
						(is_numeric($return['firstArticleDate']) ? $return['firstArticleDate'] : strtotime($return['firstArticleDate']))
					)
				);
				$columns[2] = sprintf('first_record = %s', $return['firstArticleNumber']);
				$query = sprintf(
					'UPDATE groups SET %s, %s, last_updated = NOW() WHERE id = %d AND first_record > %s',
					$columns[1],
					$columns[2],
					$groupMySQL['id'],
					$return['firstArticleNumber']
				);
				break;
			default:
				exit();
		}
		$pdo->queryExec($query);
		break;

	/* Do part repair for a group.
	 *
	 * $options[2] => (string) Group name.
	 */
	case 'part_repair':
		$pdo = new DB();
		$groupMySQL = Group::getByName($options[2]);
		$nntp = nntp($pdo);
		// Select group, here, only once
		$data = $nntp->selectGroup($groupMySQL['name']);
		if ($nntp->isError($data)) {
			if ($nntp->dataError($nntp, $groupMySQL['name']) === false) {
				exit();
			}
		}
		(new Binaries(['NNTP' => $nntp, 'Settings' => $pdo]))->partRepair($groupMySQL);
		break;

	// Process releases.
	// $options[2] => (string)groupCount, number of groups terminated by _ | (int)groupid, group to work on
	case 'releases':
		$pdo = new DB();
		$releases = new ProcessReleases(['Settings' => $pdo]);
		$mgrreleases = new ProcessReleasesMultiGroup(['Settings' => $pdo]);

		//Runs function that are per group
		if (is_numeric($options[2])) {

			processReleases($releases, $options[2]);
		} else {

			// Run MGR once after all other release updates for standard groups
			processReleases(new ProcessReleasesMultiGroup(['Settings' => $pdo]), '');

			// Run functions that run on releases table after all others completed.
			$groupCount = rtrim($options[2], '_');
			if (!is_numeric($groupCount)) {
				$groupCount = 1;
			}
			$releases->deletedReleasesByGroup();
			$releases->deleteReleases();
			//$releases->processRequestIDs('', (5000 * $groupCount), true);
			//$releases->processRequestIDs('', (1000 * $groupCount), false);
			$releases->categorizeReleases(2);
		}
		break;

	/* Update a single group's article headers.
	 *
	 * $options[2] => (string) Group name.
	 */
	case 'update_group_headers':
		$pdo = new DB();
		$nntp = nntp($pdo);
		$groupMySQL = Group::getByName($options[2]);
		(new Binaries(['NNTP' => $nntp, 'Settings' => $pdo]))->updateGroup($groupMySQL);
		break;


	// Do a single group (update_binaries/backFill/update_releases/postprocess).
	// $options[2] => (int)groupid, group to work on
	case 'update_per_group':
		if (is_numeric($options[2])) {

			$pdo = new DB();

			// Get the group info from MySQL.
			$groupMySQL = $pdo->queryOneRow(sprintf('SELECT * FROM groups WHERE id = %d', $options[2]));

			if ($groupMySQL === false) {
				exit('ERROR: Group not found with id ' . $options[2] . PHP_EOL);
			}

			// Connect to NNTP.
			$nntp = nntp($pdo);
			$backFill = new Backfill();

			// Update the group for new binaries.
			(new Binaries())->updateGroup($groupMySQL);

			// BackFill the group with 20k articles.
			$backFill->backfillAllGroups($groupMySQL['name'], 20000, 'normal');

			// Create releases.
			processReleases(new ProcessReleases(['Settings' => $pdo]), $options[2]);
			processReleases(new ProcessReleasesMultiGroup(['Settings' => $pdo]), $options[2]);

			// Post process the releases.
			(new ProcessAdditional(['Echo' => true, 'NNTP' => $nntp, 'Settings' => $pdo]))->start($options[2]);
			(new Nfo())->processNfoFiles($nntp, $options[2], '', (int) Settings::settingValue('..lookupimdb'), (int) Settings::settingValue('..lookuptvrage'));

		}
		break;

	// Post process additional and NFO.
	// $options[2] => (char)Letter or number a-f 0-9, first character of release guid.
	case 'pp_additional':
	case 'pp_nfo':
		if (charCheck($options[2])) {
			$pdo = new DB();

			// Create the connection here and pass, this is for post processing, so check for alternate.
			$nntp = nntp($pdo, true);

			if ($options[1] === 'pp_nfo') {
				(new Nfo())->processNfoFiles($nntp, '', $options[2], (int) Settings::settingValue('..lookupimdb'), (int) Settings::settingValue('..lookuptvrage'));
			} else {
				(new ProcessAdditional(['Echo' => true, 'NNTP' => $nntp, 'Settings' => $pdo]))->start('', $options[2]);
			}
		}
		break;

	/* Post process movies.
	 *
	 * $options[2] (char) Single character, first letter of release guid.
	 * $options[3] (int)  Process all releases or renamed releases only.
	 */
	case 'pp_movie':
		if (charCheck($options[2])) {
			$pdo = new DB();
			(new PostProcess(['Settings' => $pdo]))->processMovies('', $options[2], $options[3] ?? '');
		}
		break;

	/* Post process TV.
	 *
	 * $options[2] (char) Single character, first letter of release guid.
	 * $options[3] (int)  Process all releases or renamed releases only.
	 */
	case 'pp_tv':
		if (charCheck($options[2])) {
			$pdo = new DB();
			(new PostProcess(['Settings' => $pdo]))->processTv('', $options[2], $options[3] ?? '');
		}
		break;
}

/**
 * Create / process releases for a groupID.
 *
 * @param ProcessReleases|ProcessReleasesMultiGroup $releases
 * @param int $groupID
 * @throws \Exception
 */
function processReleases($releases, $groupID)
{
	$releaseCreationLimit = (Settings::settingValue('..maxnzbsprocessed') !== '' ? (int)Settings::settingValue('..maxnzbsprocessed') : 1000);
	$releases->processIncompleteCollections($groupID);
	$releases->processCollectionSizes($groupID);
	$releases->deleteUnwantedCollections($groupID);

	do {
		$releasesCount = $releases->createReleases($groupID);
		$nzbFilesAdded = $releases->createNZBs($groupID);

		// This loops as long as the number of releases or nzbs added was >= the limit (meaning there are more waiting to be created)
	} while ($releasesCount['added'] + $releasesCount['dupes'] >= $releaseCreationLimit || $nzbFilesAdded >= $releaseCreationLimit);
	$releases->deleteCollections($groupID);
}

/**
 * Check if the character contains a-f or 0-9.
 *
 * @param string $char
 *
 * @return bool
 */
function charCheck($char)
{
	if (in_array($char, ['a','b','c','d','e','f','0','1','2','3','4','5','6','7','8','9'], false)) {
		return true;
	}
	return false;
}

/**
 * Check if the group should be processed.
 *
 * @param \Blacklight\db\DB $pdo
 * @param int                $groupID
 */
function collectionCheck(&$pdo, $groupID)
{
	try {
		if ($pdo->queryOneRow(sprintf('SELECT id FROM collections_%d LIMIT 1', $groupID)) === false) {
			exit();
		}
	} catch (PDOException $e) {
		$e->getMessage();
	}
}

/**
 * Connect to usenet, return NNTP object.
 *
 * @param DB $pdo
 * @param bool $alternate Use alternate NNTP provider.
 *
 * @return NNTP
 * @throws \Exception
 */
function &nntp(&$pdo, $alternate = false)
{
	$nntp = new NNTP(['Settings' => $pdo]);
	if (($alternate && (int)Settings::settingValue('..alternate_nntp') === 1 ? $nntp->doConnect(true, true) : $nntp->doConnect()) !== true) {
		exit('ERROR: Unable to connect to usenet.' . PHP_EOL);
	}

	return $nntp;
}
