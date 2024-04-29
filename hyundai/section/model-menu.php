<div class="model-menu-name content_center"><?php echo $nav; ?></div>
<div class="model-menu-list">
  <?php foreach($model_menu_array as $model_menu_list){ ?>
	<a title="<?php echo($model_menu_list['model_menu_name'])?>" class="mml-link" href="<?php echo $model_link_anchor; ?>/#<?php echo($model_menu_list['model_menu_id'])?>">
	  <?php echo($model_menu_list['model_menu_name'])?>
	</a>
  <?php } ?>
</div>
<div class="model-menu-action">
  <a title="Price" class="mma-link content_center" href="<?php echo $model_link_price; ?>">Price</a>
  <a title="Contact Dealer" class="mma-link content_center" href="<?php echo $model_link_dealer; ?>">Contact Dealer</a>
</div>
<div class="model-menu-toggle mobile-only">
  <button title="Menu" class="mma-link content_center"><?php require ($_SERVER['HY'].'img/icon/menu.svg')?></button>
</div>



<script defer>
  $('.model-menu-toggle .mma-link').click(function(){
    $(this).toggleClass('model-menu-open');
    $(this).parents().eq(1).find('.model-menu-list').slideToggle('fast');
	return false;
  });
  
  $('.model-menu-list .mml-link').click(function(){
    $('.model-menu-toggle .mma-link').removeClass('model-menu-open');
    $('.model-menu-list').slideUp('fast');
  });
</script>