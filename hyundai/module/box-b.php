<?php if($contentbox_list['contentbox_type'] == 'color') { ?>
<a title="<?php echo($contentbox_list['contentbox_title'])?>" 
class="box-b box-b-<?php echo($contentbox_list['contentbox_type'])?> box-b-<?php echo($contentbox_list['contentbox_color'])?> content_center" 
href="<?php echo($contentbox_list['contentbox_link'])?>">
  <div class="box-b-container">
    <?php if($contentbox_list['contentbox_img'] != '') { ?>
      <div class="box-b-icon content_center">
        <?php require ($_SERVER['HY'].'img/icon/'.$contentbox_list['contentbox_img'].'.svg')?>
      </div>
	<?php } ?>
	<h2 class="box-b-title"><?php echo($contentbox_list['contentbox_title'])?></h2>
    <?php if($contentbox_list['contentbox_button'] == 'yes') { ?>
      <div class="box-b-gateway content_center">
        <div title="BOX_LINK" class="btn btn-outline" href="">Pelajari lebih lanjut</div>
      </div>
	<?php } ?>
  </div>
</a>
<?php } ?>

<?php if($contentbox_list['contentbox_type'] == 'image') { ?>
<button title="<?php echo($contentbox_list['contentbox_title'])?>" class="box-b box-b-image open-sticky"
aria-popup="<?php echo($contentbox_list['contentbox_link'])?>">
  <div class="box-b-bg flex_ori thumb-loading">
    <img alt="<?php echo($contentbox_list['contentbox_title'])?>" class="lazyload" data-original="img/<?php echo($contentbox_list['contentbox_img'])?>.jpg" />
  </div>
  <div class="box-b-info">
    <h2 class="box-b-title"><?php echo($contentbox_list['contentbox_title'])?></h2>
	<div class="box-b-icon">
	  <?php require ($_SERVER['HY'].'img/icon/open-popup.svg')?>
	</div>
  </div>
</button>
<?php } ?>