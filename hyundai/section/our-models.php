<div class="section-title">
  <div class="section-title-primary">Our Models</div>
</div>

<div class="our-models-tab">
  <button title="Select Models" class="omt-select mobile-only">
    <div class="omt-select-inside omt-select-label">All</div>
	<div class="omt-select-inside omt-select-icon"><?php require ($_SERVER['HY'].'img/icon/down.svg')?></div>
  </button>
  <div class="omt-list">
    <?php foreach($models_tab_array as $models_tab_list){ ?>
      <button title="<?php echo($models_tab_list['models_tab_title'])?>" class="omt-button <?php if($models_tab_list['models_tab_curr'] == 'yes') { ?>omt-button-curr<?php } ?>">
        <?php echo($models_tab_list['models_tab_title'])?>
      </button>
    <?php } ?>
  </div>
</div>

<div class="slideshow-models">

  <button class="slide-button slide-button-prev" aria-controls="customize" tabindex="-1" data-controls="prev">
    <?php require ($_SERVER['HY'].'img/icon/prev-arrow.svg')?>
  </button>

  <button class="slide-button slide-button-next" aria-controls="customize" tabindex="-1" data-controls="next">
    <?php require ($_SERVER['HY'].'img/icon/next-arrow.svg')?>
  </button>

  <div class="slideshow-models-container">
    <?php 
      $models_array = array();
      $models_array[]=array(
        'models_img'=>'stargazer',
        'models_year'=>'2024',
        'models_name'=>'Stargazer',
        'models_type'=>'Multi-Purpose Vehicle',
        'models_price'=>'262.600.000',
        'models_range'=>'210 km',
        'models_power'=>'320hp / 239 kW',
        'models_other'=>'HTRAC AWD',
        'models_link_product'=>'model/stargazer',
        'models_link_price'=>'model/stargazer/price',
      );
      $models_array[]=array(
        'models_img'=>'stargazer-x',
        'models_year'=>'2023',
        'models_name'=>'Stargazer X',
        'models_type'=>'Crossover',
        'models_price'=>'335.800.000',
        'models_range'=>'210 km',
        'models_power'=>'320hp / 239 kW',
        'models_other'=>'HTRAC AWD',
        'models_link_product'=>'',
        'models_link_price'=>'',
      );
      $models_array[]=array(
        'models_img'=>'staria',
        'models_year'=>'2022',
        'models_name'=>'Staria',
        'models_type'=>'Multi-Purpose Vehicle',
        'models_price'=>'924.000.000',
        'models_range'=>'210 km',
        'models_power'=>'320hp / 239 kW',
        'models_other'=>'HTRAC AWD',
        'models_link_product'=>'',
        'models_link_price'=>'',
      );
      $models_array[]=array(
        'models_img'=>'creta',
        'models_year'=>'2024',
        'models_name'=>'Creta',
        'models_type'=>'Sports Utility Vehicle',
        'models_price'=>'421.800.000',
        'models_range'=>'210 km',
        'models_power'=>'320hp / 239 kW',
        'models_other'=>'HTRAC AWD',
        'models_link_product'=>'',
        'models_link_price'=>'',
      );
      $models_array[]=array(
        'models_img'=>'ioniq5',
        'models_year'=>'2023',
        'models_name'=>'Ioniq 5',
        'models_type'=>'Electric Sedan',
        'models_price'=>'990.000.000',
        'models_range'=>'210 km',
        'models_power'=>'320hp / 239 kW',
        'models_other'=>'HTRAC AWD',
        'models_link_product'=>'',
        'models_link_price'=>'',
      );
      $models_array[]=array(
        'models_img'=>'ioniq6',
        'models_year'=>'2022',
        'models_name'=>'Ioniq 6',
        'models_type'=>'Electric Sedan',
        'models_price'=>'1.220.000.000',
        'models_range'=>'210 km',
        'models_power'=>'320hp / 239 kW',
        'models_other'=>'HTRAC AWD',
        'models_link_product'=>'',
        'models_link_price'=>'',
      );
      $models_array[]=array(
        'models_img'=>'palisade',
        'models_year'=>'2024',
        'models_name'=>'Palisade',
        'models_type'=>'Sports Utility Vehicle',
        'models_price'=>'1.181.000.000',
        'models_range'=>'210 km',
        'models_power'=>'320hp / 239 kW',
        'models_other'=>'HTRAC AWD',
        'models_link_product'=>'',
        'models_link_price'=>'',
      );
      $models_array[]=array(
        'models_img'=>'santafe',
        'models_year'=>'2023',
        'models_name'=>'Santa Fe',
        'models_type'=>'Sports Utility Vehicle',
        'models_price'=>'625.000.000',
        'models_range'=>'210 km',
        'models_power'=>'320hp / 239 kW',
        'models_other'=>'HTRAC AWD',
        'models_link_product'=>'',
        'models_link_price'=>'',
      );
      foreach($models_array as $models_list){
    ?>
    <div class="slideshow-models-box">
      <div class="smb-car">
        <a title="<?php echo($models_list['models_year'])?> <?php echo($models_list['models_name'])?>" class="smb-car-frame flex_ori thumb-loading"
		href="<?php echo($models_list['models_link_product'])?>">
          <img alt="img_title" class="lazyload" data-original="img/model-<?php echo($models_list['models_img'])?>.png" />
        </a>
        <div class="smb-info">
          <div class="smb-info-box smb-info-main">
            <div class="smb-info-date"><?php echo($models_list['models_year'])?></div>
            <div class="smb-info-name"><?php echo($models_list['models_name'])?></div>
            <div class="smb-info-label"><?php echo($models_list['models_type'])?></div>
          </div>
          <div class="smb-info-box">
            <div class="smb-info-label">Price start from</div>
            <div class="smb-info-data">Rp.<?php echo($models_list['models_price'])?></div>
          </div>
          <div class="smb-info-box">
            <div class="smb-info-label">Range up to</div>
            <div class="smb-info-data"><?php echo($models_list['models_range'])?></div>
          </div>
          <div class="smb-info-box">
            <div class="smb-info-label">Power up to</div>
            <div class="smb-info-data"><?php echo($models_list['models_power'])?></div>
          </div>
          <div class="smb-info-box">
            <div class="smb-info-label">Available</div>
            <div class="smb-info-data"><?php echo($models_list['models_other'])?></div>
          </div>
        </div>
		<div class="gateway-bottom content_center">
		  <span class="gateway-list">
		    <a title="Get Price" class="btn gateway-button" href="<?php echo($models_list['models_link_price'])?>">Get price</a>
		    <a title="See more models" class="btn gateway-button" href="<?php echo($models_list['models_link_product'])?>">See more models</a>
		  </span>
		</div>
      </div>
    </div>
    <?php } ?>

  </div>

</div>





<script defer>
  var slider_our_models = tns({
	container:'.slideshow-models-container',
	speed:610,
	items:1,
	gutter:55, 
	edgePadding:0,
	controls:true,
	nav:true,
	navPosition:'bottom',
	mouseDrag:true,
	autoplay:true,
	autoplayTimeout:4000,
	controlsContainer:'.slideshow-models',
  });
  
  $('.omt-select').click(function(){
    $(this).find('.omt-select-icon').toggleClass('omt-selected-icon');
    $(this).parent().find('.omt-list').slideToggle('fast');
	return false;
  });
  
  $('.omt-button').click(function(){
    var get_models = $(this).attr('title');
    $(this).addClass('omt-button-curr');
	$(this).parents().eq(1).find('.omt-select > .omt-select-label').text(get_models);
    $('.omt-button').not(this).removeClass('omt-button-curr');
	$('.omt-select-icon').removeClass('omt-selected-icon');
	$('.omt-list').slideUp('fast');
	return false;
  });
</script>