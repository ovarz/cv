<span class="width-max">
  <div class="section-title">Our Models</div>

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
		  'models_price'=>'999.000.000',
		  'models_range'=>'210 km',
		  'models_power'=>'320hp / 239 kW',
		  'models_other'=>'HTRAC AWD',
		);
        $models_array[]=array(
		  'models_img'=>'ioniq5',
		  'models_year'=>'2023',
		  'models_name'=>'IONIQ 5',
		  'models_type'=>'Electric Sedan',
		  'models_price'=>'999.000.000',
		  'models_range'=>'210 km',
		  'models_power'=>'320hp / 239 kW',
		  'models_other'=>'HTRAC AWD',
		);
        $models_array[]=array(
		  'models_img'=>'santafe',
		  'models_year'=>'2022',
		  'models_name'=>'SANTA FE',
		  'models_type'=>'Sports Utility Vehicle',
		  'models_price'=>'999.000.000',
		  'models_range'=>'210 km',
		  'models_power'=>'320hp / 239 kW',
		  'models_other'=>'HTRAC AWD',
		);
        foreach($models_array as $models_list){
      ?>
      <div class="slideshow-models-box">
        <div class="smb-car">
          <div class="smb-car-frame flex_ori thumb-loading">
            <img alt="img_title" class="lazyload" data-original="img/model-<?php echo($models_list['models_img'])?>.png" />
          </div>
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
        </div>
      </div>
      <?php } ?>

    </div>

  </div>

</span>





<script>
  var slider_slideshow_full = tns({
	container:'.slideshow-models-container',
	speed:610,
	items:1,
	gutter:0, 
	edgePadding:0,
	controls:true,
	nav:true,
	navPosition:'bottom',
	mouseDrag:true,
	autoplay:true,
	autoplayTimeout:4000,
	controlsContainer:'.slideshow-models',
  });
</script>