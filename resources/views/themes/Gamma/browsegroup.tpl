
<h1>Browse Groups</h1>


{$site->adbrowse}

{if $results|@count > 0}

<table style="width:100%;" class="data highlight Sortable table table-condensed table-responsive" id="browsetable">
	<tr>
         <th>Name</th>
         <th>Description</th>
         <th>Updated</th>
	</tr>

	{foreach $results as $result}
		<tr class="{cycle values=",alt"}">
			<td>
				<a title="Browse releases from {$result.name|replace:"alt.binaries":"a.b"}" href="{$smarty.const.WWW_TOP}/browse?g={$result.name}">{$result.name|replace:"alt.binaries":"a.b"}</a>
			</td>
			<td>
					{$result.description}
			</td>
			<td class="less">{$result.last_updated|timeago} ago</td>
		</tr>
	{/foreach}

</table>

{/if}
