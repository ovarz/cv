<?php if($contentbox_list['contentbox_type'] == 'color') { ?>
<a title="<?php echo($contentbox_list['contentbox_title'])?>" class="box-b box-b-<?php echo($contentbox_list['contentbox_color'])?>" 
href="<?php echo($contentbox_list['contentbox_link'])?>">
  
</a>
<?php } ?>

<?php if($contentbox_list['contentbox_type'] == 'image') { ?>
<button title="<?php echo($contentbox_list['contentbox_title'])?>" class="box-b"
aria-popup="<?php echo($contentbox_list['contentbox_link'])?>">
  
</button>
<?php } ?>