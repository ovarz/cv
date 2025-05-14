<?php 
  $share_array = array();
  $share_array[]=array(
    'share_icon'=>'facebook',
    'share_link'=>'',
  );
  $share_array[]=array(
    'share_icon'=>'whatsapp',
    'share_link'=>'',
  );
  $share_array[]=array(
    'share_icon'=>'twitter',
    'share_link'=>'',
  );
  $share_array[]=array(
    'share_icon'=>'other',
    'share_link'=>'',
  );
?>
<div class="share-page">
  <div class="share-box">
    <div class="share-label">Share :</div>
    <div class="share-list">
      <?php foreach($share_array as $share_list){ ?>
        <a title="Share <?php echo($share_list['share_icon'])?>" class="share-link share-<?php echo($share_list['share_icon'])?> content_center" 
        href="<?php echo($share_list['share_link'])?>">
          <?php require ($_SERVER['OG'].'template/img/icon/share-'.$share_list['share_icon'].'.svg')?>
        </a>
      <?php } ?>
    </div>
  </div>
</div>