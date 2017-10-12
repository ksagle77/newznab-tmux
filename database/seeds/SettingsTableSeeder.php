<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->delete();

        \DB::table('settings')->insert([
            0 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'addpar2',
                'value' => '1',
                'hint' => 'When going through PAR2 files, add them to the RAR file content list of the NZB.',
                'setting' => 'addpar2',
            ],
            1 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'alternate_nntp',
                'value' => '0',
                'hint' => 'This sets Postproccessing Additional/Nfo to use the alternate NNTP provider as set in config.php.',
                'setting' => 'alternate_nntp',
            ],
            2 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'amazonsleep',
                'value' => '1000',
                'hint' => 'Sleep time in milliseconds to wait in between amazon requests. If you thread post-proc, multiply by the number of threads. ie Postprocessing Threads = 12, Amazon sleep time = 12000<br /><a href="https://affiliate-program.amazon.com/gp/advertising/api/detail/faq.html">https://affiliate-program.amazon.com/gp/advertising/api/detail/faq.html</a>',
                'setting' => 'amazonsleep',
            ],
            3 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'backfillthreads',
                'value' => '1',
                'hint' => 'The number of threads for backfill.',
                'setting' => 'backfillthreads',
            ],
            4 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'binarythreads',
                'value' => '1',
                'hint' => 'The number of threads for update_binaries. If you notice that you are getting a lot of parts into the partrepair table, it is possible that you USP is not keeping up with the requests. Try to reduce the threads to safe scripts or stop using safe scripts until improves. Ar least until the cause can be determined.',
                'setting' => 'binarythreads',
            ],
            5 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'book_reqids',
                'value' => '7010',
            'hint' => 'Categories of Books to lookup information for (only work if Lookup Books is set to yes).',
                'setting' => 'book_reqids',
            ],
            6 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'checkpasswordedrar',
                'value' => '1',
                'hint' => 'Whether to attempt to peek into every release, to see if rar files are password protected.',
                'setting' => 'checkpasswordedrar',
            ],
            7 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'completionpercent',
                'value' => '95',
                'hint' => 'The minimum completion % to keep a release. Set to 0 to disable.',
                'setting' => 'completionpercent',
            ],
            8 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'compressedheaders',
                'value' => '0',
                'hint' => 'Some servers allow headers to be sent over in a compressed format.  If enabled this will use much less bandwidth, but processing times may increase.<br />If you notice that update binaries or backfill seems to hang, look in htop and see if a group is being processed. If so, first try disabling compressed headers and let run until it processes the group at least once, then you can re-enable compressed headers.',
                'setting' => 'compressedheaders',
            ],
            9 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'crossposttime',
                'value' => '2',
                'hint' => 'The time in hours to check for cross-posted releases.',
                'setting' => 'crossposttime',
            ],
            10 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'currentppticket',
                'value' => '0',
                'hint' => '',
                'setting' => 'currentppticket',
            ],
            11 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'debuginfo',
                'value' => '0',
                'hint' => '',
                'setting' => 'debuginfo',
            ],
            12 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'delaytime',
                'value' => '2',
                'hint' => 'The time in hours to wait, since last activity, before releases without parts counts in the subject are are created<br \\> Setting this below 2 hours could create incomplete releases.',
                'setting' => 'delaytime',
            ],
            13 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'deletepasswordedrelease',
                'value' => '1',
                'hint' => 'Whether to delete releases which are passworded.',
                'setting' => 'deletepasswordedrelease',
            ],
            14 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'deletepossiblerelease',
                'value' => '1',
                'hint' => 'Whether to delete releases which are potentially passworded.',
                'setting' => 'deletepossiblerelease',
            ],
            15 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'disablebackfillgroup',
                'value' => '0',
                'hint' => 'Whether to disable backfill on a group if the target date has been reached.',
                'setting' => 'disablebackfillgroup',
            ],
            16 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'extractusingrarinfo',
                'value' => '0',
                'hint' => 'Whether to use rarinfo or 7zip/unrar directly to decompress zip/rar files.',
                'setting' => 'extractusingrarinfo',
            ],
            17 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'ffmpeg_duration',
                'value' => '5',
            'hint' => 'The maximum duration (In Seconds) for ffmpeg to generate the sample for. (Default 5)',
                'setting' => 'ffmpeg_duration',
            ],
            18 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'ffmpeg_image_time',
                'value' => '5',
                'hint' => '',
                'setting' => 'ffmpeg_image_time',
            ],
            19 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'fixnamesperrun',
                'value' => '10',
            'hint' => 'The maximum number of releases to check per run(threaded script only).',
                'setting' => 'fixnamesperrun',
            ],
            20 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'fixnamethreads',
                'value' => '1',
                'hint' => 'The number of threads for fixReleasesNames. This includes md5, nfos and filenames.',
                'setting' => 'fixnamethreads',
            ],
            21 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'grabstatus',
                'value' => '1',
                'hint' => 'Whether to update download counts when someone downloads a release.',
                'setting' => 'grabstatus',
            ],
            22 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lastpretime',
                'value' => '0',
                'hint' => 'Last time we downloaded a pre using WEB sources',
                'setting' => 'lastpretime',
            ],
            23 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lookup_reqids',
                'value' => '1',
                'hint' => 'Whether to attempt to lookup Request IDs using the Request ID link below.',
                'setting' => 'lookup_reqids',
            ],
            24 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lookupanidb',
                'value' => '0',
                'hint' => 'Whether to attempt to lookup anime information from AniDB when processing binaries. Currently it is not recommend to enable this.',
                'setting' => 'lookupanidb',
            ],
            25 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lookupbooks',
                'value' => '1',
                'hint' => 'Whether to attempt to lookup book information from Amazon when processing binaries.',
                'setting' => 'lookupbooks',
            ],
            26 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lookupgames',
                'value' => '1',
                'hint' => 'Whether to attempt to lookup game information from Amazon when processing binaries.',
                'setting' => 'lookupgames',
            ],
            27 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lookupimdb',
                'value' => '1',
                'hint' => 'Whether to attempt to lookup film information from IMDB or TheMovieDB when processing binaries.',
                'setting' => 'lookupimdb',
            ],
            28 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lookupmusic',
                'value' => '1',
                'hint' => 'Whether to attempt to lookup music information from Amazon when processing binaries.',
                'setting' => 'lookupmusic',
            ],
            29 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lookupnfo',
                'value' => '1',
                'hint' => 'Whether to attempt to retrieve an nfo file from usenet when processing binaries.<br/>NOTE: disabling nfo lookups will disable movie lookups.',
                'setting' => 'lookupnfo',
            ],
            30 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lookuppar2',
                'value' => '1',
                'hint' => 'Whether to attempt to find a better name for releases in misc->other using the PAR2 file.<br/>NOTE: this can be slow depending on the group!',
                'setting' => 'lookuppar2',
            ],
            31 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lookuptvrage',
                'value' => '1',
                'hint' => 'Whether to attempt to lookup tv rage ids on the web when processing binaries.',
                'setting' => 'lookuptvrage',
            ],
            32 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'lookupxxx',
                'value' => '1',
                'hint' => 'Whether to attempt to lookup xxx information from ADE or Popporn when processing binaries.',
                'setting' => 'lookupxxx',
            ],
            33 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxaddprocessed',
                'value' => '25',
                'hint' => 'The maximum amount of releases to process for passwords/previews/mediainfo per run. Every release gets processed here. This uses NNTP an connection, 1 per thread. This does not query Amazon.',
                'setting' => 'maxaddprocessed',
            ],
            34 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxanidbprocessed',
                'value' => '100',
                'hint' => 'The maximum amount of anime to process with anidb per run. This does not use an NNTP connection or query Amazon.',
                'setting' => 'maxanidbprocessed',
            ],
            35 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxbooksprocessed',
                'value' => '300',
                'hint' => 'The maximum amount of books to process with amazon per run. This does not use an NNTP connection',
                'setting' => 'maxbooksprocessed',
            ],
            36 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxgamesprocessed',
                'value' => '150',
                'hint' => 'The maximum amount of games to process with amazon per run. This does not use an NNTP connection.',
                'setting' => 'maxgamesprocessed',
            ],
            37 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maximdbprocessed',
                'value' => '100',
                'hint' => 'The maximum amount of movies to process with IMDB per run. This does not use an NNTP connection or query Amazon.',
                'setting' => 'maximdbprocessed',
            ],
            38 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxmssgs',
                'value' => '20000',
                'hint' => 'The maximum number of messages to fetch at a time from the server. Only raise this if you have php set right and lots of RAM.',
                'setting' => 'maxmssgs',
            ],
            39 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxmusicprocessed',
                'value' => '150',
                'hint' => 'The maximum amount of music to process with amazon per run. This does not use an NNTP connection.',
                'setting' => 'maxmusicprocessed',
            ],
            40 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxnestedlevels',
                'value' => '3',
                'hint' => 'How many levels deep to go into nested rar/zip files.',
                'setting' => 'maxnestedlevels',
            ],
            41 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxnfoprocessed',
                'value' => '100',
                'hint' => 'The maximum amount of NFO files to process per run. This uses an NNTP connection, 1 per thread. This does not query Amazon.',
                'setting' => 'maxnfoprocessed',
            ],
            42 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxnforetries',
                'value' => '5',
                'hint' => 'How many times to retry when a NFO fails to download. If set to 0, we will not retry. The max is 7.',
                'setting' => 'maxnforetries',
            ],
            43 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxnzbsprocessed',
                'value' => '1000',
                'hint' => 'The maximum amount of NZB files to create on stage 5 in update_releases.',
                'setting' => 'maxnzbsprocessed',
            ],
            44 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxpartrepair',
                'value' => '15000',
                'hint' => 'The maximum amount of articles to attempt to repair at a time. If you notice that you are getting a lot of parts into the partrepair table, it is possible that you USP is not keeping up with the requests. Try to reduce the threads to safe scripts or stop using safe scripts until improves. At least until the cause can be determined.',
                'setting' => 'maxpartrepair',
            ],
            45 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxpartsprocessed',
                'value' => '3',
                'hint' => 'If a part fails to download while post processing, this will retry up to the amount you set, then give up.',
                'setting' => 'maxpartsprocessed',
            ],
            46 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxrageprocessed',
                'value' => '75',
                'hint' => 'The maximum amount of TV shows to process with TVRage per run. This does not use an NNTP connection or query Amazon.',
                'setting' => 'maxrageprocessed',
            ],
            47 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxsizetopostprocess',
                'value' => '100',
            'hint' => 'The maximum size in gigabytes to post process (additional) a release. If set to 0, then ignored.',
                'setting' => 'maxsizetopostprocess',
            ],
            48 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxsizetoprocessnfo',
                'value' => '100',
                'hint' => 'The maximum size in gigabytes of a release to process it for NFOs. If set to 0, then ignored.',
                'setting' => 'maxsizetoprocessnfo',
            ],
            49 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'maxxxxprocessed',
                'value' => '100',
                'hint' => 'The maximum amount of xxx to process with ADE and Popporn per run. This does not use an NNTP connection or query Amazon.',
                'setting' => 'maxxxxprocessed',
            ],
            50 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'minsizetopostprocess',
                'value' => '1',
            'hint' => 'The minimum size in megabytes to post process (additional) a release. If set to 0, then ignored.',
                'setting' => 'minsizetopostprocess',
            ],
            51 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'minsizetoprocessnfo',
                'value' => '1',
                'hint' => 'The minimum size in megabytes of a release to process it for NFOs. If set to 0, then ignored.',
                'setting' => 'minsizetoprocessnfo',
            ],
            52 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'mischashedretentionhours',
                'value' => '0',
                'hint' => 'The number of hours releases categorized as Misc->Hashed will be retained. Set to 0 to disable.',
                'setting' => 'mischashedretentionhours',
            ],
            53 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'miscotherretentionhours',
                'value' => '0',
                'hint' => 'The number of hours releases categorized as Misc->Other will be retained. Set to 0 to disable.',
                'setting' => 'miscotherretentionhours',
            ],
            54 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'newgroupdaystoscan',
                'value' => '1',
                'hint' => 'Days',
                'setting' => 'newgroupdaystoscan',
            ],
            55 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'newgroupmsgstoscan',
                'value' => '100000',
                'hint' => 'Posts',
                'setting' => 'newgroupmsgstoscan',
            ],
            56 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'newgroupscanmethod',
                'value' => '0',
            'hint' => 'Scan back X (posts/days) for each new group? Use backfill to scan further.',
                'setting' => 'newgroupscanmethod',
            ],
            57 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'nextppticket',
                'value' => '0',
                'hint' => '',
                'setting' => 'nextppticket',
            ],
            58 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'nfothreads',
                'value' => '1',
                'hint' => 'The number of threads for nfo postprocessing. The max is 16, if you set anything higher it will use 16.',
                'setting' => 'nfothreads',
            ],
            59 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'nntpretries',
                'value' => '10',
            'hint' => 'The maximum number of retry attmpts to connect to nntp provider. On error, each retry takes approximately 5 seconds nntp returns reply. (Default 10).',
                'setting' => 'nntpretries',
            ],
            60 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'nzbpath',
                'value' => '/var/www/NNTmux/resources/nzb/',
                'hint' => 'The directory where nzb files will be stored.',
                'setting' => 'nzbpath',
            ],
            61 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'nzbsplitlevel',
                'value' => '4',
                'hint' => 'Levels deep to store the nzb Files.',
                'setting' => 'nzbsplitlevel',
            ],
            62 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'nzbthreads',
                'value' => '1',
                'hint' => 'The number of threads for Grab NZBs.',
                'setting' => 'nzbthreads',
            ],
            63 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'partrepair',
                'value' => '1',
                'hint' => 'Whether to attempt to repair parts or not, increases backfill/binaries updating time.',
                'setting' => 'partrepair',
            ],
            64 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'partrepairmaxtries',
                'value' => '3',
                'hint' => 'Maximum amount of times to try part repair.',
                'setting' => 'partrepairmaxtries',
            ],
            65 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'partretentionhours',
                'value' => '72',
                'hint' => 'The number of hours incomplete parts and binaries will be retained.',
                'setting' => 'partretentionhours',
            ],
            66 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'passchkattempts',
                'value' => '1',
                'hint' => 'This overrides the above setting if set above 1. How many parts to check for a password before giving up. This slows down post processing massively, better to leave it 1.',
                'setting' => 'passchkattempts',
            ],
            67 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'postdelay',
                'value' => '300',
                'hint' => '',
                'setting' => 'postdelay',
            ],
            68 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'postthreads',
                'value' => '1',
                'hint' => 'The number of threads for additional postprocessing. This includes deep rar inspection, preview and sample creation and nfo processing.',
                'setting' => 'postthreads',
            ],
            69 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'postthreadsamazon',
                'value' => '1',
                'hint' => '',
                'setting' => 'postthreadsamazon',
            ],
            70 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'postthreadsnon',
                'value' => '1',
                'hint' => 'The number of threads for non-amazon postprocessing. This includes movies, anime and tv lookups.',
                'setting' => 'postthreadsnon',
            ],
            71 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'predbversion',
                'value' => '1',
                'hint' => '',
                'setting' => 'predbversion',
            ],
            72 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'privateprofiles',
                'value' => '1',
            'hint' => 'Hide profiles from other users (admin/mod can still access).',
                'setting' => 'privateprofiles',
            ],
            73 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'processjpg',
                'value' => '1',
                'hint' => 'Whether to attempt to retrieve a JPG file while additional post processing, these are usually on XXX releases.',
                'setting' => 'processjpg',
            ],
            74 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'processthumbnails',
                'value' => '0',
                'hint' => 'Whether to attempt to process a video thumbnail image. You must have ffmpeg for this.',
                'setting' => 'processthumbnails',
            ],
            75 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'processvideos',
                'value' => '0',
                'hint' => 'Whether to attempt to process a video sample, these videos are very short 1-3 seconds, 100KB on average, in ogv format. You must have ffmpeg for this.',
                'setting' => 'processvideos',
            ],
            76 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'registerstatus',
                'value' => '0',
                'hint' => 'The status of registrations to the site.',
                'setting' => 'registerstatus',
            ],
            77 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'releaseretentiondays',
                'value' => '0',
                'hint' => '!!THIS IS NOT HEADER RETENTION!! The number of days releases will be retained for use throughout site. Set to 0 to disable.',
                'setting' => 'releaseretentiondays',
            ],
            78 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'releasethreads',
                'value' => '1',
                'hint' => 'The number of threads for update_releases.',
                'setting' => 'releasethreads',
            ],
            79 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'replacenzbs',
                'value' => '0',
            'hint' => 'NZBs that are crossposted, instead of deleting, replace with the nzb grabbed.(This is not necessary, was added before I understood how crossposted nzbs work).',
                'setting' => 'replacenzbs',
            ],
            80 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'reqidthreads',
                'value' => '1',
                'hint' => 'The number of threads for local request id processing.',
                'setting' => 'reqidthreads',
            ],
            81 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'request_hours',
                'value' => '1',
                'hint' => 'The maximum hours after a release is added to recheck for a Request ID match.',
                'setting' => 'request_hours',
            ],
            82 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'request_url',
                'value' => 'http://reqid.newznab-tmux.pw/index.php',
                'hint' => 'Optional URL to lookup Request IDs.',
                'setting' => 'request_url',
            ],
            83 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'safebackfilldate',
                'value' => '2012-06-24',
                'hint' => 'The target date for safe backfill. Format: YYYY-MM-DD',
                'setting' => 'safebackfilldate',
            ],
            84 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'safepartrepair',
                'value' => '0',
            'hint' => 'Whether to put unreceived parts into partrepair table when running binaries(safe) or backfill scripts.',
                'setting' => 'safepartrepair',
            ],
            85 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'saveaudiopreview',
                'value' => '0',
                'hint' => 'Whether to attempt to process a audio sample, they will be up to 30 seconds, in ogg format. You must have ffmpeg for this.',
                'setting' => 'saveaudiopreview',
            ],
            86 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'segmentstodownload',
                'value' => '2',
            'hint' => 'The maximum number of segments to download to generate the sample video file. (Default 2)',
                'setting' => 'segmentstodownload',
            ],
            87 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'showbacks',
                'value' => '0',
                'hint' => '',
                'setting' => 'showbacks',
            ],
            88 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'showdroppedyencparts',
                'value' => '0',
                'hint' => 'For developers. Whether to log all headers that have \'yEnc\' and are dropped. Logged to not_yenc/groupname.dropped.txt.',
                'setting' => 'showdroppedyencparts',
            ],
            89 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'showpasswordedrelease',
                'value' => '0',
            'hint' => 'Whether to show passworded or potentially passworded releases in browse, search, api and rss feeds. Potentially passworded means releases which contain .cab or .ace files which are typically password protected. (*yes): Unprocessed releases are hidden. (*no): Unprocessed releases are displayed.',
                'setting' => 'showpasswordedrelease',
            ],
            90 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'showrecentforumposts',
                'value' => '',
                'hint' => '',
                'setting' => 'showrecentforumposts',
            ],
            91 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'siteseed',
                'value' => '',
                'hint' => '',
                'setting' => 'siteseed',
            ],
            92 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'sqlpatch',
                'value' => '324',
                'hint' => '',
                'setting' => 'sqlpatch',
            ],
            93 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'storeuserips',
                'value' => '0',
                'hint' => 'Whether to store the users ip address when they signup or login.',
                'setting' => 'storeuserips',
            ],
            94 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'timeoutseconds',
                'value' => '0',
                'hint' => 'How much time to wait for unrar/7zip/mediainfo/ffmpeg/avconv before killing it, set to 0 to disable. 60 is a good value. Requires the GNU Timeout path to be set.',
                'setting' => 'timeoutseconds',
            ],
            95 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'tmpunrarpath',
                'value' => '/var/www/NNTmux/resources/tmp/unrar/',
                'hint' => 'The path to where unrar puts files. WARNING: This directory will have its contents deleted.<br/>Use forward slashes in windows c:/temp/path/stuff/will/be/unpacked/to',
                'setting' => 'tmpunrarpath',
            ],
            96 =>
            [
                'section' => '',
                'subsection' => '',
                'name' => 'userhostexclusion',
                'value' => '',
                'hint' => '',
                'setting' => 'userhostexclusion',
            ],
            97 =>
            [
                'section' => '',
                'subsection' => 'release',
                'name' => 'maxsizetoformrelease',
                'value' => '0',
                'hint' => 'The maximum total size in bytes to make a release. If set to 0, then ignored. Only deletes during release creation.',
                'setting' => 'maxsizetoformrelease',
            ],
            98 =>
            [
                'section' => '',
                'subsection' => 'release',
                'name' => 'minfilestoformrelease',
                'value' => '1',
                'hint' => 'The minimum number of files to make a release. i.e. if set to two, then releases which only contain one file will not be created.',
                'setting' => 'minfilestoformrelease',
            ],
            99 =>
            [
                'section' => '',
                'subsection' => 'release',
                'name' => 'minsizetoformrelease',
                'value' => '0',
                'hint' => 'The minimum total size in bytes to make a release. If set to 0, then ignored. Only deletes during release creation.',
                'setting' => 'minsizetoformrelease',
            ],
            100 =>
            [
                'section' => 'APIs',
                'subsection' => '',
                'name' => 'amazonassociatetag',
                'value' => 'n01369-20',
                'hint' => 'The amazon associate tag. Used for music/book lookups.',
                'setting' => 'amazonassociatetag',
            ],
            101 =>
            [
                'section' => 'APIs',
                'subsection' => '',
                'name' => 'amazonprivkey',
                'value' => 'B58mVwyj+T/MEucxWugJ3GQ0CcW2kQq16qq/1WpS',
                'hint' => 'The amazon private api key. Used for music/book lookups.',
                'setting' => 'amazonprivkey',
            ],
            102 =>
            [
                'section' => 'APIs',
                'subsection' => '',
                'name' => 'amazonpubkey',
                'value' => 'AKIAIPDNG5EU7LB4AD3Q',
                'hint' => 'The amazon public api key. Used for music/book lookups.',
                'setting' => 'amazonpubkey',
            ],
            103 =>
            [
                'section' => 'APIs',
                'subsection' => '',
                'name' => 'anidbkey',
                'value' => '',
                'hint' => 'The Anidb api key. Used for Anime lookups.',
                'setting' => 'anidbkey',
            ],
            104 =>
            [
                'section' => 'APIs',
                'subsection' => '',
                'name' => 'fanarttvkey',
                'value' => '',
                'hint' => 'The Fanart.tv api key. Used for Fanart.tv lookups. Fanart.tv would appreciate it if you use this service to help them out by adding high quality images not already available on TMDB.',
                'setting' => 'fanarttvkey',
            ],
            105 =>
            [
                'section' => 'APIs',
                'subsection' => '',
                'name' => 'giantbombkey',
                'value' => '',
                'hint' => 'The giantbomb api key. Used for game lookups.',
                'setting' => 'giantbombkey',
            ],
            106 =>
            [
                'section' => 'APIs',
                'subsection' => '',
                'name' => 'omdbkey',
                'value' => '',
                'hint' => 'OmdbAPI key obtained from Omdb.Used for Omdb API lookups',
                'setting' => 'omdbkey',
            ],
            107 =>
            [
                'section' => 'APIs',
                'subsection' => '',
                'name' => 'rottentomatokey',
                'value' => 'qxbxyngtujprvw7jxam2m6na',
                'hint' => 'The api key used for access to rotten tomatoes.',
                'setting' => 'rottentomatokey',
            ],
            108 =>
            [
                'section' => 'APIs',
                'subsection' => '',
                'name' => 'tmdbkey',
                'value' => '9a4e16adddcd1e86da19bcaf5ff3c2a3',
                'hint' => 'The API key used for access to TMDb.',
                'setting' => 'tmdbkey',
            ],
            109 =>
            [
                'section' => 'APIs',
                'subsection' => '',
                'name' => 'trakttvclientkey',
                'value' => '',
            'hint' => 'The Trakt.tv API v2 Client ID (SHA256 hash - 64 characters long string). Used for movie and tv lookups.',
                'setting' => 'trakttvclientkey',
            ],
            110 =>
            [
                'section' => 'APIs',
                'subsection' => 'AniDB',
                'name' => 'banned',
                'value' => '0',
                'hint' => 'Timestamp of WHEN we were banned.',
                'setting' => 'AniDB_banned',
            ],
            111 =>
            [
                'section' => 'APIs',
                'subsection' => 'AniDB',
                'name' => 'last_full_update',
                'value' => '0',
                'hint' => 'The last time a full AniDB update occurred in unixtime.',
                'setting' => 'lastanidbupdate',
            ],
            112 =>
            [
                'section' => 'APIs',
                'subsection' => 'AniDB',
                'name' => 'max_update_frequency',
                'value' => '7',
                'hint' => 'The number of days between AniDB full updates.  Default is 7.',
                'setting' => 'intanidbupdate',
            ],
            113 =>
            [
                'section' => 'APIs',
                'subsection' => 'APIKeys',
                'name' => 'section-label',
                'value' => '3<sup>rd.</sup> Party API Keys',
                'hint' => '',
                'setting' => '',
            ],
            114 =>
            [
                'section' => 'APIs',
                'subsection' => 'Steam',
                'name' => 'last_update',
                'value' => '0',
                'hint' => 'Last time we updated steam_apps table.',
                'setting' => 'laststeamupdate',
            ],
            115 =>
            [
                'section' => 'apps',
                'subsection' => '',
                'name' => '7zippath',
                'value' => '',
            'hint' => 'The path to the 7za (7zip command line in windows) binary, used for grabbing nfos from compressed zip files. Use forward slashes in windows c:/path/to/7z.exe',
                'setting' => 'zippath',
            ],
            116 =>
            [
                'section' => 'apps',
                'subsection' => '',
                'name' => 'ffmpegpath',
                'value' => '',
                'hint' => 'The path to the ffmpeg or avconv binary. Used for making thumbnails and video/audio previews. Use forward slashes in windows c:/path/to/ffmpeg.exe',
                'setting' => 'ffmpegpath',
            ],
            117 =>
            [
                'section' => 'apps',
                'subsection' => '',
                'name' => 'lamepath',
                'value' => '',
                'hint' => 'The path to the lame binary. Used for audio manipulation. Use forward slashes in windows c:/path/to/lame.exe',
                'setting' => 'lamepath',
            ],
            118 =>
            [
                'section' => 'apps',
                'subsection' => '',
                'name' => 'mediainfopath',
                'value' => '',
                'hint' => 'The path to the mediainfo binary. Used for deep file media analysis. Use empty path to disable mediainfo checks Use forward slashes in windows c:/path/to/mediainfo.exe',
                'setting' => 'mediainfopath',
            ],
            119 =>
            [
                'section' => 'apps',
                'subsection' => '',
                'name' => 'timeoutpath',
                'value' => '',
                'hint' => 'The path to the timeout binary. This is used to limit the amount of time unrar/7zip/mediainfo/ffmpeg/avconv can run. You can the time limit in the process additional section. You can leave this empty to disable this. Use forward slashes in windows c:/path/to/timeout.exe',
                'setting' => 'timeoutpath',
            ],
            120 =>
            [
                'section' => 'apps',
                'subsection' => '',
                'name' => 'unrarpath',
                'value' => '',
                'hint' => 'The path to an unrar binary, used in deep password detection and media info grabbing. Use forward slashes in windows c:/path/to/unrar.exe',
                'setting' => 'unrarpath',
            ],
            121 =>
            [
                'section' => 'apps',
                'subsection' => '',
                'name' => 'yydecoderpath',
                'value' => '',
                'hint' => 'Path to yydecode, this will decode yEnc articles. On ubuntu/debian you can get yydecode in the getdeb repository. Compiling yydecode from source is easy/fast also. Use forward slashes in windows c:/path/to/yydecode.exe',
                'setting' => 'yydecoderpath',
            ],
            122 =>
            [
                'section' => 'apps',
                'subsection' => 'indexer',
                'name' => 'magic_file_path',
                'value' => '',
                'hint' => 'Path to magic number database. Windows&apos; users should set this if they have installed GNUWin &lsquo;file&rsquo;. *nix users can optionally set this to a file of their choice.',
                'setting' => 'magic_file_path',
            ],
            123 =>
            [
                'section' => 'apps',
                'subsection' => 'sabnzbplus',
                'name' => 'apikey',
                'value' => '',
            'hint' => 'The Api key of the SAB installation. Can be the full api key or the nzb api key (as of SAB 0.6)',
                'setting' => 'sabapikey',
            ],
            124 =>
            [
                'section' => 'apps',
                'subsection' => 'sabnzbplus',
                'name' => 'apikeytype',
                'value' => '1',
                'hint' => 'Select the type of api key you entered in the above setting',
                'setting' => 'sabapikeytype',
            ],
            125 =>
            [
                'section' => 'apps',
                'subsection' => 'sabnzbplus',
                'name' => 'integrationtype',
                'value' => '2',
                'hint' => 'Whether to allow integration with a SAB install and if so what type of integration. <br/>Setting this to integrated also disables NZBGet from being selectable to the user.',
                'setting' => 'sabintegrationtype',
            ],
            126 =>
            [
                'section' => 'apps',
                'subsection' => 'sabnzbplus',
                'name' => 'priority',
                'value' => '0',
                'hint' => 'Set the priority level for NZBs that are added to your queue',
                'setting' => 'sabpriority',
            ],
            127 =>
            [
                'section' => 'apps',
                'subsection' => 'sabnzbplus',
                'name' => 'url',
                'value' => '',
                'hint' => 'The url of the SAB installation, for example: http://localhost:8080/sabnzbd/',
                'setting' => 'saburl',
            ],
            128 =>
            [
                'section' => 'archive',
                'subsection' => 'fetch',
                'name' => 'end',
                'value' => '1',
            'hint' => 'Download/process the last rar or zip file(s) to check for a password and get the file names inside?',
                'setting' => 'fetchlastcompressedfiles',
            ],
            129 =>
            [
                'section' => 'indexer',
                'subsection' => 'categorise',
                'name' => 'categorizeforeign',
                'value' => '1',
                'hint' => 'This only works if the above is set to english. Whether to send foreign movies/tv to foreign sections or not. If set to true they will go in foreign categories.',
                'setting' => 'categorizeforeign',
            ],
            130 =>
            [
                'section' => 'indexer',
                'subsection' => 'categorise',
                'name' => 'catwebdl',
                'value' => '0',
                'hint' => 'Whether to send WEB-DL to the WEB-DL section or not. If set to true they will go in WEB-DL category, false will send them in HD TV.<br/>This will also make them inaccessible to Sickbeard and possibly Couchpotato.',
                'setting' => 'catwebdl',
            ],
            131 =>
            [
                'section' => 'indexer',
                'subsection' => 'categorise',
                'name' => 'imdblanguage',
                'value' => 'en',
            'hint' => 'Which language to lookup when sending requests to IMDB/Tmdb. (If akas.imdb.com is set, imdb still returns the original titles.)',
                'setting' => 'imdblanguage',
            ],
            132 =>
            [
                'section' => 'indexer',
                'subsection' => 'categorise',
                'name' => 'imdburl',
                'value' => '0',
            'hint' => 'akas.imdb.com returns titles in their original title, imdb.com returns titles based on your IP address (if you are in france, you will get french titles).',
                'setting' => 'imdburl',
            ],
            133 =>
            [
                'section' => 'indexer',
                'subsection' => 'ppa',
                'name' => 'innerfileblacklist',
                'value' => '/setup.exe|password.url/i',
                'hint' => 'You can add a regex here to set releases to potentially passworded when a file name inside a rar/zip matches this regex.',
                'setting' => 'innerfileblacklist',
            ],
            134 =>
            [
                'section' => 'indexer',
                'subsection' => 'processing',
                'name' => 'collection_timeout',
                'value' => '48',
            'hint' => 'How many hours to wait before deleting a stuck/broken collection. (This is to prevent the MySQL tables from swelling up.)',
                'setting' => 'collection_timeout',
            ],
            135 =>
            [
                'section' => 'indexer',
                'subsection' => 'processing',
                'name' => 'last_run_time',
                'value' => '',
            'hint' => 'Last date the indexer (update_binaries or backfill) was run.',
                'setting' => 'last_run_time',
            ],
            136 =>
            [
                'section' => 'max',
                'subsection' => 'headers',
                'name' => 'iteration',
                'value' => '1000000',
                'hint' => 'The maximum number of headers that update binaries is given as the total range. This ensures that a total of no more than this amount is attempted to be downloaded per group.',
                'setting' => 'max_headers_iteration',
            ],
            137 =>
            [
                'section' => 'shell',
                'subsection' => 'date',
                'name' => 'format',
                'value' => '%Y-%m-%d %T',
                'hint' => 'Format string to use in shell\'s date command output. See `man date` for acceptable format.
Default: %Y-%m-%d %T',
                'setting' => 'shell.date.format',
            ],
            138 =>
            [
                'section' => 'site',
                'subsection' => 'google',
                'name' => 'adbrowse',
                'value' => '',
                'hint' => 'The banner slot in the header.',
                'setting' => 'adbrowse',
            ],
            139 =>
            [
                'section' => 'site',
                'subsection' => 'google',
                'name' => 'addetail',
                'value' => '',
                'hint' => 'The banner slot in the release details view.',
                'setting' => 'addetail',
            ],
            140 =>
            [
                'section' => 'site',
                'subsection' => 'google',
                'name' => 'adheader',
                'value' => '',
                'hint' => 'The banner slot in the header.',
                'setting' => 'adheader',
            ],
            141 =>
            [
                'section' => 'site',
                'subsection' => 'google',
                'name' => 'google_adsense_acc',
                'value' => '',
                'hint' => 'AdSense account: e.g. pub-123123123123123',
                'setting' => 'google_adsense_acc',
            ],
            142 =>
            [
                'section' => 'site',
                'subsection' => 'google',
                'name' => 'google_adsense_search',
                'value' => '',
                'hint' => 'The ID of the google search ad panel displayed at the bottom of the left menu.',
                'setting' => 'google_adsense_search',
            ],
            143 =>
            [
                'section' => 'site',
                'subsection' => 'google',
                'name' => 'google_analytics_acc',
                'value' => '',
                'hint' => 'Analytic\'s account: e.g. UA-xxxxxx-x',
                'setting' => 'google_analytics_acc',
            ],
            144 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'code',
                'value' => 'NNTmux',
                'hint' => 'A just for fun value, shown in debug and not on public pages.',
                'setting' => 'code',
            ],
            145 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'coverspath',
                'value' => '/var/www/NNTmux/resources/covers/',
                'hint' => 'The absolute path to the place covers will be stored.',
                'setting' => 'coverspath',
            ],
            146 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'dereferrer_link',
                'value' => '',
                'hint' => 'Optional URL to prepend to external links',
                'setting' => 'dereferrer_link',
            ],
            147 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'email',
                'value' => 'admin@localhost',
                'hint' => 'Shown in the contact us page, and where the contact html form is sent to.',
                'setting' => 'email',
            ],
            148 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'footer',
                'value' => 'Usenet binary indexer.',
                'hint' => 'Displayed in the footer section of every public page.',
                'setting' => 'footer',
            ],
            149 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'home_link',
                'value' => '/',
                'hint' => 'The relative path to a the landing page shown when a user logs in, or clicks the home link.',
                'setting' => 'home_link',
            ],
            150 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'logfile',
                'value' => '/var/www/nntmux/resources/logs/failed-login.log',
            'hint' => 'Location of log file (MUST be set if logging to file is set).',
                'setting' => 'logfile',
            ],
            151 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'loggingopt',
                'value' => '0',
                'hint' => 'Where you would like to log failed logins to the site.',
                'setting' => 'loggingopt',
            ],
            152 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'menuposition',
                'value' => '2',
            'hint' => 'Where the menu should appear. Moving the menu to the top will require using a theme which widens the content panel. (not currently functional)',
                'setting' => 'menuposition',
            ],
            153 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'metadescription',
                'value' => 'A usenet indexing website',
                'hint' => 'Stem meta-description appended to all page meta description tags.',
                'setting' => 'metadescription',
            ],
            154 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'metakeywords',
                'value' => 'usenet,nzbs,cms,community',
                'hint' => 'Stem meta-keywords appended to all page meta keyword tags',
                'setting' => 'metakeywords',
            ],
            155 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'metatitle',
                'value' => 'An indexer',
                'hint' => 'Stem meta-tag appended to all page title tags.',
                'setting' => 'metatitle',
            ],
            156 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'strapline',
                'value' => 'A great usenet indexer',
                'hint' => 'Displayed in the header on every public page.',
                'setting' => 'strapline',
            ],
            157 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'style',
                'value' => 'Gentele',
                'hint' => 'The theme folder which will be loaded for css and images.',
                'setting' => 'style',
            ],
            158 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'tandc',
                'value' => '<p>All information within this database is indexed by an automated process, without any human intervention. It is obtained from global Usenet newsgroups over which this site has no control. We cannot prevent that you might find obscene or objectionable material by using this service. If you do come across obscene, incorrect or objectionable results, let us know by using the contact form.</p>',
                'hint' => 'Text displayed in the terms and conditions page.',
                'setting' => 'tandc',
            ],
            159 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'title',
                'value' => 'NNTmux',
                'hint' => 'Displayed around the site and contact form as the name for the site.',
                'setting' => 'title',
            ],
            160 =>
            [
                'section' => 'site',
                'subsection' => 'main',
                'name' => 'userselstyle',
                'value' => '0',
                'hint' => 'Users can select their theme?',
                'setting' => 'userselstyle',
            ],
            161 =>
            [
                'section' => 'site',
                'subsection' => 'spotnab',
                'name' => 'spotnabautoenable',
                'value' => '0',
                'hint' => 'Enable spotnab automatically?',
                'setting' => 'spotnabautoenable',
            ],
            162 =>
            [
                'section' => 'site',
                'subsection' => 'spotnab',
                'name' => 'spotnabbroadcast',
                'value' => '0',
                'hint' => 'Broadcast spotnab info?',
                'setting' => 'spotnabbroadcast',
            ],
            163 =>
            [
                'section' => 'site',
                'subsection' => 'spotnab',
                'name' => 'spotnabdiscover',
                'value' => '0',
                'hint' => 'Spotnab discovery enabled?',
                'setting' => 'spotnabdiscover',
            ],
            164 =>
            [
                'section' => 'site',
                'subsection' => 'spotnab',
                'name' => 'spotnabemail',
                'value' => '',
                'hint' => 'Email used for spotnab',
                'setting' => 'spotnabemail',
            ],
            165 =>
            [
                'section' => 'site',
                'subsection' => 'spotnab',
                'name' => 'spotnabgroup',
                'value' => 'alt.binaries.backup',
                'hint' => 'Group used for spotnab',
                'setting' => 'spotnabgroup',
            ],
            166 =>
            [
                'section' => 'site',
                'subsection' => 'spotnab',
                'name' => 'spotnablastarticle',
                'value' => '',
                'hint' => '',
                'setting' => 'spotnablastarticle',
            ],
            167 =>
            [
                'section' => 'site',
                'subsection' => 'spotnab',
                'name' => 'spotnabpost',
                'value' => '0',
                'hint' => '',
                'setting' => 'spotnabpost',
            ],
            168 =>
            [
                'section' => 'site',
                'subsection' => 'spotnab',
                'name' => 'spotnabprivacy',
                'value' => '0',
                'hint' => '',
                'setting' => 'spotnabprivacy',
            ],
            169 =>
            [
                'section' => 'site',
                'subsection' => 'spotnab',
                'name' => 'spotnabuser',
                'value' => '',
                'hint' => '',
                'setting' => 'spotnabuser',
            ],
            170 =>
            [
                'section' => 'site',
                'subsection' => 'trailers',
                'name' => 'trailers_display',
                'value' => '1',
                'hint' => 'Display trailers on the details page?',
                'setting' => 'trailers_display',
            ],
            171 =>
            [
                'section' => 'site',
                'subsection' => 'trailers',
                'name' => 'trailers_size_x',
                'value' => '480',
                'hint' => 'Width of the displayed trailer. 480 by default.',
                'setting' => 'trailers_size_x',
            ],
            172 =>
            [
                'section' => 'site',
                'subsection' => 'trailers',
                'name' => 'trailers_size_y',
                'value' => '345',
                'hint' => 'Height of the displayed trailer. 345 by default.',
                'setting' => 'trailers_size_y',
            ],
            173 =>
            [
                'section' => 'tmux',
                'subsection' => 'running',
                'name' => 'exit',
                'value' => '0',
            'hint' => 'Determines if the running tmux monitor script should exit. If 0 nothing changes; if positive the script should exit gracefully (allowing all panes to finish); if negative the script should die as soon as possible.',
                'setting' => 'tmux.running.exit',
            ],
        ]);
    }
}