<?php
# MetInfo Enterprise Content Management System

defined('IN_MET') or exit('No permission');
?>
<div class="met-lang-web">
  <button type="button" class="btn btn-primary btn-add" data-toggle="modal" data-target=".langweb-add-modal" data-modal-fullheight="1"
    data-modal-url="language/add" data-modal-size="lg" data-modal-title="<?php echo $word['langadd'];?>"
    data-modal-tablerefresh="#lang-table" data-modal-loading="1">
    <?php echo $word['langadd'];?>
  </button>
  <table class="dataTable table table-hover w-100 mt-2" id="lang-table" data-ajaxurl="<?php echo $url['own_name'];?>c=language_web&a=doGetWebLanguage" data-table-pagelength="20" data-datatable_order="#lang-table">
    <thead>
      <tr>
        <th data-table-columnclass="text-center"><?php echo $word['sort'];?></th>
        <th data-table-columnclass="text-center"><?php echo $word['langname'];?></th>
        <th data-table-columnclass="text-center"><?php echo $word['langflag'];?></th>
        <th data-table-columnclass="text-center"><?php echo $word['open'];?></th>
        <th data-table-columnclass="text-center"><?php echo $word['langhome'];?></th>
        <th width="200" data-table-columnclass="text-center"><?php echo $word['langouturl'];?></th>
        <th data-table-columnclass="text-center"><?php echo $word['operate'];?></th>
        <th><?php echo $word['langpara'];?></th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
</div>