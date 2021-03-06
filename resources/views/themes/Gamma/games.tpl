<h2>Browse Games</h2>
<div class="well well-sm">
	<div style="text-align: center;">
		{include file='search-filter.tpl'}
	</div>
</div>
{$site->adbrowse}
{if $results|@count > 0}
	<form id="nzb_multi_operations_form" action="get">
		<div class="well well-sm">
			<div class="nzb_multi_operations">
				<table width="100%">
					<tr>
						<td width="30%">
							With Selected:
							<div class="btn-group">
								<input type="button" class="nzb_multi_operations_download btn btn-small btn-success" value="Download NZBs" />
								<input type="button" class="nzb_multi_operations_cart btn btn-small btn-info" value="Send to my Download Basket" />
								{if isset($sabintegrated) && $sabintegrated !=""}<input type="button" class="nzb_multi_operations_sab btn btn-small btn-primary" value="Send to queue" />{/if}
							</div>
							View: <strong>Covers</strong> | <a
									href="{$smarty.const.WWW_TOP}/browse?t={$category}">List</a><br/>
						</td>
						<td width="50%">
							<div style="text-align: center;">
								{$pager}
							</div>
						</td>
						<td width="20%">
							<div class="pull-right">
								{if isset($isadmin)}
									Admin:
									<div class="btn-group">
										<input type="button" class="nzb_multi_operations_edit btn btn-small btn-warning" value="Edit" />
										<input type="button" class="nzb_multi_operations_delete btn btn-small btn-danger" value="Delete" />
									</div>
									&nbsp;
								{/if}
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<table style="width:100%;" class="data highlight icons table" id="coverstable">
			<tr>
				<th width="130">
					<input type="checkbox" class="nzb_check_all" />
				</th>
				<th width="140" >title<br/>
					<a title="Sort Descending" href="{$orderbytitle_desc}">
						<i class="fa fa-caret-down"></i>
					</a>
					<a title="Sort Ascending" href="{$orderbytitle_asc}">
						<i class="fa fa-caret-up"></i>
					</a>
				</th>
				<th>genre<br/>
					<a title="Sort Descending" href="{$orderbygenre_desc}">
						<i class="fa fa-caret-down"></i>
					</a>
					<a title="Sort Ascending" href="{$orderbygenre_asc}">
						<i class="fa fa-caret-up"></i>
					</a>
				</th>
				<th>release date<br/>
					<a title="Sort Descending" href="{$orderbyreleasedate_desc}">
						<i class="fa fa-caret-down"></i>
					</a>
					<a title="Sort Ascending" href="{$orderbyreleasedate_asc}">
						<i class="fa fa-caret-up"></i>
					</a>
				</th>
				<th>posted<br/>
					<a title="Sort Descending" href="{$orderbyposted_desc}">
						<i class="fa fa-caret-down"></i>
					</a>
					<a title="Sort Ascending" href="{$orderbyposted_asc}">
						<i class="fa fa-caret-up"></i>
					</a>
				</th>
				<th>size<br/>
					<a title="Sort Descending" href="{$orderbysize_desc}">
						<i class="fa fa-caret-down"></i>
					</a>
					<a title="Sort Ascending" href="{$orderbysize_asc}">
						<i class="fa fa-caret-up"></i>
					</a>
				</th>
				<th>files<br/>
					<a title="Sort Descending" href="{$orderbyfiles_desc}">
						<i class="fa fa-caret-down"></i>
					</a>
					<a title="Sort Ascending" href="{$orderbyfiles_asc}">
						<i class="fa fa-caret-up"></i>
					</a>
				</th>
				<th>stats<br/>
					<a title="Sort Descending" href="{$orderbystats_desc}">
						<i class="fa fa-caret-down"></i>
					</a>
					<a title="Sort Ascending" href="{$orderbystats_asc}">
						<i class="fa fa-caret-up"></i>
					</a>
				</th>
			</tr>
			{foreach $results as $result}
				{assign var="msplits" value=","|explode:$result.grp_release_id}
				{assign var="mguid" value=","|explode:$result.grp_release_guid}
				{assign var="mnfo" value=","|explode:$result.grp_release_nfoid}
				{assign var="mgrp" value=","|explode:$result.grp_release_grpname}
				{assign var="mname" value="#"|explode:$result.grp_release_name}
				{assign var="mpostdate" value=","|explode:$result.grp_release_postdate}
				{assign var="msize" value=","|explode:$result.grp_release_size}
				{assign var="mtotalparts" value=","|explode:$result.grp_release_totalparts}
				{assign var="mcomments" value=","|explode:$result.grp_release_comments}
				{assign var="mgrabs" value=","|explode:$result.grp_release_grabs}
				{assign var="mfailed" value=","|explode:$result.grp_release_failed}
				{assign var="mpass" value=","|explode:$result.grp_release_password}
				{assign var="minnerfiles" value=","|explode:$result.grp_rarinnerfilecount}
				{assign var="mhaspreview" value=","|explode:$result.grp_haspreview}
				{foreach $msplits as $m}
					<tr class="{cycle values=",alt"}">
						<td class="mid">
							<div class="movcover">
								<div style="text-align: center;">
									<a class="title" title="View details" href="{$smarty.const.WWW_TOP}/details/{$mguid[$m@index]}">
										<img class="shadow img img-polaroid" src="{$smarty.const.WWW_TOP}/covers/games/{if isset($result.cover) && $result.cover == 1}{$result.gamesinfo_id}.jpg{else}no-cover.jpg{/if}"
											 width="120" border="0" alt="{$result.title|escape:"htmlall"}"/>{if isset($mfailed[$m@index]) && $mfailed[$m@index] > 0} <i class="fa fa-exclamation-circle" style="color: red" title="This release has failed to download for some users"></i>{/if}
									</a>
								</div>
								<div class="movextra">
									<div style="text-align: center;">
										{if $result.classused == "GiantBomb"}<a class="rndbtn badge"
																		 target="_blank"
																		 href="{$site->dereferrer_link}{$result.url}"
																		 name="giantbomb{$result.gamesinfo_id}"
																		 title="View GiantBomb page">
												GiantBomb</a>{/if}
										{if $result.classused == "Steam"}<a class="rndbtn badge fa fa-steam"
																			target="_blank"
																			href="{$site->dereferrer_link}{$result.url|escape:"htmlall"}"
																			name="steam{$result.gamesinfo_id}"
																			title="View Steam page">
												Steam</a>{/if}
										{if isset($mnfo[$m@index]) && $mnfo[$m@index] > 0}<a href="{$smarty.const.WWW_TOP}/nfo/{$mguid[$m@index]}" title="View Nfo" class="rndbtn modal_nfo badge" rel="nfo">Nfo</a>{/if}
										<a class="rndbtn badge" href="{$smarty.const.WWW_TOP}/browse?g={$mgrp[$m@index]}" title="Browse releases in {$mgrp[$m@index]|replace:"alt.binaries":"a.b"}">Grp</a>
									</div>
								</div>
							</div>
						</td>
						<td colspan="8" class="left" id="guid{$mguid[$m@index]}">
							<ul class="inline">
								<li>
									<h4>
										<a class="title" title="View details" href="{$smarty.const.WWW_TOP}/details/{$mguid[$m@index]}">{$result.title|escape:"htmlall"} </a>
									</h4>
								</li>
								<li style="vertical-align:text-bottom;">
									<div class="icon">
										<input type="checkbox" class="nzb_check" value="{$mguid[$m@index]}" />
									</div>
								</li>
								<li style="vertical-align:text-bottom;">
									<a class="icon icon_nzb fa fa-cloud-download" style="text-decoration: none; color: #7ab800;" title="Download Nzb" href="{$smarty.const.WWW_TOP}/getnzb/{$mguid[$m@index]}" >
									</a>
								</li>
								<li style="vertical-align:text-bottom;">
									<div>
										<a href="#" class="icon icon_cart fa fa-shopping-basket" style="text-decoration: none; style="text-decoration: none; color: #5c5c5c;" title="Send to my Download Basket">
										</a>
									</div>
								</li>
								<li style="vertical-align:text-bottom;">
									{if isset($sabintegrated) && $sabintegrated !=""}
										<div>
											<a href="#" class="icon icon_sab fa fa-share" style="text-decoration: none; color: #008ab8;"  title="Send to my Queue">
											</a>
										</div>
									{/if}
								</li>
								<li style="vertical-align:text-bottom;">
									{if $weHasVortex}
										<div>
											<a href="#" class="icon icon_nzb fa fa-cloud-downloadvortex" title="Send to my NZBVortex"><img src="{$smarty.const.WWW_ASSETS}/images/icons/vortex/bigsmile.png"></a>
										</div>
									{/if}
								</li>
								{if isset($isadmin)}
									<a class="rndbtn confirm_action btn btn-mini btn-danger pull-right" href="{$smarty.const.WWW_TOP}/admin/release-delete.php?id={$result.releases_id}&amp;from={$smarty.server.REQUEST_URI|escape:"url"}" title="Delete Release">Delete</a>
									<a class="rndbtn btn btn-mini btn-warning pull-right" href="{$smarty.const.WWW_TOP}/admin/release-edit.php?id={$result.releases_id}&amp;from={$smarty.server.REQUEST_URI|escape:"url"}" title="Edit Release">Edit</a>
								{/if}
							</ul>
							{if isset($result.genre) && $result.genre != ""}
								<b>Genre:</b>
								{$result.genre}
								<br/>
							{/if}
							{if isset($result.esrb) && $result.esrb != ""}
								<b>Rating:</b>
								{$result.esrb}
								<br/>
							{/if}
							{if isset($result.publisher) && $result.publisher != ""}
								<b>Publisher:</b>
								{$result.publisher}
								<br/>
							{/if}
							{if isset($result.releasedate) && $result.releasedate != ""}
								<b>Released:</b>
								{$result.releasedate|date_format}
								<br/>
							{/if}
							{if isset($result.review) && $result.review != ""}
								<b>Review:</b>
								{$result.review|stripslashes|escape:'htmlall'}
								<br/>
							{/if}
							<br />
							<div class="movextra">
								<br />
								<ul class="inline">
									<li width="50px"><b>Info:</b></li>
									<li width="100px">Posted {$mpostdate[$m@index]|timeago}</li>
									<li width="80px">{{$msize[$m@index]}|fsize_format:"MB"}</li>
									<li width="50px"><a title="View file list" href="{$smarty.const.WWW_TOP}/filelist/{$mguid[$m@index]}">{$mtotalparts[$m@index]}</a> <i class="fa fa-file"></i></li>
									<li width="50px"><a title="View comments for {$result.title|escape:"htmlall"}" href="{$smarty.const.WWW_TOP}/details/{$mguid[$m@index]}/#comments">{$mcomments[$m@index]}</a> <i class="fa fa-comments-o"></i></li>
									<li width="50px">{$mgrabs[$m@index]} <i class="fa fa-cloud-download"></i></li>
								</ul>
							</div>
						</td>
					</tr>
				{/foreach}
			{/foreach}
		</table>
		<br/>
		{$pager}
		{if $results|@count > 10}
			<div class="well well-sm">
				<div class="nzb_multi_operations">
					<table width="100%">
						<tr>
							<td width="30%">
								With Selected:
								<div class="btn-group">
									<input type="button" class="nzb_multi_operations_download btn btn-small btn-success" value="Download NZBs" />
									<input type="button" class="nzb_multi_operations_cart btn btn-small btn-info" value="Send to my Download Basket" />
									{if isset($sabintegrated) && $sabintegrated !=""}<input type="button" class="nzb_multi_operations_sab btn btn-small btn-primary" value="Send to queue" />{/if}
								</div>
								View: <strong>Covers</strong> | <a
										href="{$smarty.const.WWW_TOP}/browse?t={$category}">List</a><br/>
							</td>
							<td width="50%">
								<div style="text-align: center;">
									{$pager}
								</div>
							</td>
							<td width="20%">
								{if isset($section) && $section != ''}
									<div class="pull-right">
										{if isset($isadmin)}
											Admin:
											<div class="btn-group">
												<input type="button" class="nzb_multi_operations_edit btn btn-small btn-warning" value="Edit" />
												<input type="button" class="nzb_multi_operations_delete btn btn-small btn-danger" value="Delete" />
											</div>
											&nbsp;
										{/if}
										&nbsp;
									</div>
								{/if}
							</td>
						</tr>
					</table>
				</div>
			</div>
		{/if}
	</form>
{else}
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Sorry!</strong> There is nothing in this section.
	</div>
{/if}
