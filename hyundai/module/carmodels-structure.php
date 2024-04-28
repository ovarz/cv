<div class="cld-box">
  <a title="<?php echo($carmodels_list['carmodels_name'])?>" class="cld-name" href="<?php echo($carmodels_list['carmodels_link'])?>">
    <?php echo($carmodels_list['carmodels_name'])?>
  </a>
  <a title="<?php echo($carmodels_list['carmodels_name'])?>" class="cld-thumb flex_ori thumb-loading" href="<?php echo($carmodels_list['carmodels_link'])?>">
    <img alt="Foto <?php echo($carmodels_list['carmodels_name'])?>" class="lazyload" data-original="img/model-<?php echo($carmodels_list['carmodels_img'])?>.png" />
  </a>
  <div class="cld-label">Price start form</div>
  <div class="cld-price">Rp.<?php echo($carmodels_list['carmodels_price'])?></div>
  <div class="cld-available">Available in <?php echo rand(2,10); ?> options</div>
  <div class="cld-action">
    <a title="Discover" class="cld-action-link" href="<?php echo($carmodels_list['carmodels_link'])?>">
      <div class="cld-action-label">Discover</div>
      <?php require ($_SERVER['HY'].'img/icon/right-small.svg')?>
    </a>
    <a title="Get Price" class="cld-action-link" href="<?php echo($carmodels_list['carmodels_link_price'])?>">
      <div class="cld-action-label">Get Price</div>
      <?php require ($_SERVER['HY'].'img/icon/right-small.svg')?>
    </a>
  </div>
</div>