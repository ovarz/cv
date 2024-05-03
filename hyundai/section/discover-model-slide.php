<div class="slideshow-discover-model-container">
  <?php 
    $discovermodel_array = array();
    $discovermodel_array[]=array(
      'discovermodel_title'=>'STARGAZER Prime',
      'discovermodel_price'=>'888.888.888',
      'discovermodel_link_price'=>'model/stargazer/price',
    );
    $discovermodel_array[]=array(
      'discovermodel_title'=>'STARGAZER Active',
      'discovermodel_price'=>'888.888.888',
      'discovermodel_link_price'=>'model/stargazer/price',
    );
    $discovermodel_array[]=array(
      'discovermodel_title'=>'STARGAZER Essential',
      'discovermodel_price'=>'888.888.888',
      'discovermodel_link_price'=>'model/stargazer/price',
    );
    $discovermodel_array[]=array(
      'discovermodel_title'=>'STARGAZER Style',
      'discovermodel_price'=>'888.888.888',
      'discovermodel_link_price'=>'model/stargazer/price',
    );
    $discovermodel_array[]=array(
      'discovermodel_title'=>'STARGAZER Prime',
      'discovermodel_price'=>'888.888.888',
      'discovermodel_link_price'=>'model/stargazer/price',
    );
    foreach($discovermodel_array as $discovermodel_list){
  ?>
    <div class="sdmc-column">
	  <div class="sdmc-point content_center">
	    <?php require ($_SERVER['HY'].'img/icon/up-small.svg')?>
	  </div>
	  <div class="sdmc-box">
	    <div class="sdmc-info">
		  <h2 class="sdmc-title"><?php echo($discovermodel_list['discovermodel_title'])?></h2>
		  <h3 class="sdmc-price">Starting from Rp.<?php echo($discovermodel_list['discovermodel_price'])?></h3>
          <a title="Bonus offer available" class="sdmc-link" href="<?php echo($discovermodel_list['discovermodel_link_price'])?>">Bonus offer available</a>
		</div>
		<div class="sdmc-data">
		  <div class="sdmc-data-list">
		    <div class="sdmc-data-row sdmc-data-title">Engine & transmission</div>
		    <div class="sdmc-data-row">2.2 CRDi Diesel 8-Speed DCT AWD</div>
		    <div class="sdmc-data-row">3.5 MPi Petrol 8-Speed Automatic FWD</div>
		  </div>
		  <div class="sdmc-data-list">
		    <div class="sdmc-data-row sdmc-data-title">Key specifications above Stargazer:</div>
		    <div class="sdmc-data-row">18" alloy wheels with full size spare</div>
		    <div class="sdmc-data-row">Smart key with push button start</div>
		    <div class="sdmc-data-row">Leather appointed seats and dash</div>
		    <div class="sdmc-data-row">Hyundai SmartSense as standard</div>
		  </div>
		</div>
		<div class="sdmc-gateway">
          <a title="Build & Price" class="sdmc-button" href="<?php echo($discovermodel_list['discovermodel_link_price'])?>">
		    <div class="sdmc-button-label">Build & Price</div>
			<div class="sdmc-button-icon"><?php require ($_SERVER['HY'].'img/icon/right-small.svg')?></div>
		  </a>
          <button title="See More" class="sdmc-button">
		    <div class="sdmc-button-label">See More</div>
			<div class="sdmc-button-icon"><?php require ($_SERVER['HY'].'img/icon/down-small.svg')?></div>
		  </button>
		</div>
	  </div>
    </div>
  <?php } ?>
</div>







<script defer>
  var slider_our_models = tns({
	container:'.slideshow-discover-model-container',
	speed:610,
	items:1,
	gutter:8, 
	edgePadding:34,
	controls:true,
	nav:false,
	mouseDrag:true,
	autoplay:false,
	autoplayTimeout:5000,
    responsive:{
      "1360": {
        "items":3
      },
      "900": {
        "items":2,
	    edgePadding:89,
      }
    },
  });
</script>