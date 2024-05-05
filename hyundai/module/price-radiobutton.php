<div class="default-radiobutton spoc-button spoc-button-type<?php echo($price_option_list['price_option_type'])?>">
  <input class="default-radiobutton-real spoc-button-real" name="<?php echo($price_option_list['price_option_section'])?>" 
  type="radio" value="<?php echo($price_option_list['price_option_value'])?>"
  <?php if($price_option_list['price_option_checked'] == 'yes') { ?>checked<?php } ?>>
  <div class="default-radiobutton-dummy spoc-button-dummy">
  
    <?php if($price_option_list['price_option_type'] == '1') { ?>
	  <div class="pod-name"><?php echo($price_option_list['price_option_name'])?></div>
	<?php } ?>
	
    <?php if($price_option_list['price_option_type'] == '2') { ?>
	  <div class="pod-color content_center">
	    <div class="pod-color-frame pod-color-<?php echo($price_option_list['price_option_color'])?>"></div>
	  </div>
	  <div class="pod-name"><?php echo($price_option_list['price_option_name'])?></div>
	  <div class="pod-price">Rp.<?php echo($price_option_list['price_option_money'])?></div>
	<?php } ?>
	
    <?php if($price_option_list['price_option_type'] == '3') { ?>
	  <div class="pod-img flex_ori thumb-loading">
	    <img alt="<?php echo($price_option_list['price_option_name'])?>" class="lazyload" data-original="img/price-<?php echo($price_option_list['price_option_img'])?>.jpg" />
	  </div>
	  <div class="pod-info">
        <div class="pod-name"><?php echo($price_option_list['price_option_name'])?></div>
        <div class="pod-cate"><?php echo($price_option_list['price_option_cate'])?></div>
        <div class="pod-price">Rp.<?php echo($price_option_list['price_option_money'])?></div>
        <a title="Learn More" class="pod-learn" href="">
          <div class="pod-learn-label">Learn More</div>
          <?php require ($_SERVER['HY'].'img/icon/right-small.svg')?>
        </a>
	  </div>
	<?php } ?>
  
    <?php if($price_option_list['price_option_type'] == '4') { ?>
	  <div class="pod-left">
	    <div class="pod-name"><?php echo($price_option_list['price_option_name'])?></div>
	    <div class="pod-range"><?php echo($price_option_list['price_option_range'])?>kms</div>
	  </div>
	  <div class="pod-right content_center">
	    <div class="pod-price">+ Rp.<?php echo($price_option_list['price_option_money'])?></div>
	  </div>
	<?php } ?>
	
  </div>
</div>