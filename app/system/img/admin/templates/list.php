<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
?>
<include file="pub/content_list/head"/>
		<include file="pub/content_list/checkall_all"/>
		<th>{$word.image}</th>
		<include file="pub/content_list/thead_common"/>
	</tr>
</thead>
<tbody>
	<?php $colspan=7; ?>
	<include file="pub/content_list/table_loader"/>
</tbody>
<?php $colspan=6;$del_type=1; ?>
<include file="pub/content_list/foot"/>