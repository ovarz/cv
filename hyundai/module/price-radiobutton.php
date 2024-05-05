<div class="default-radiobutton spoc-button spoc-button-type<?php echo($price_option_list['price_option_type'])?>">
  <input class="default-radiobutton-real spoc-button-real" name="<?php echo($price_option_list['price_option_section'])?>" 
  type="radio" value="<?php echo($price_option_list['price_option_value'])?>"
  <?php if($price_option_list['price_option_checked'] == 'yes') { ?>checked<?php } ?>>
  <div class="default-radiobutton-dummy spoc-button-dummy">
    <?php if($price_option_list['price_option_type'] == '1') { ?>
	  <div class="pod-name"><?php echo($price_option_list['price_option_name'])?></div>
	<?php } ?>
  </div>
</div>