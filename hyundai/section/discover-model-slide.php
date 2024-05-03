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
	  <div class="sdmc-box">
	    <div class="sdmc-info">
		  <h2 class="sdmc-title"><?php echo($discovermodel_list['discovermodel_title'])?></h2>
		  <h3 class="sdmc-price">Starting from Rp.<?php echo($discovermodel_list['discovermodel_price'])?></h3>
          <a title="Bonus offer available" class="sdmc-link" href="<?php echo($discovermodel_list['discovermodel_link_price'])?>">Bonus offer available</a>
		</div>
		<div class="sdmc-gateway">
          <a title="Build & Price" class="sdmc-button" href="<?php echo($discovermodel_list['discovermodel_link_price'])?>">
		    <div class="sdmc-button-label">Build & Price</div>
			<div class="sdmc-button-icon"><?php require ($_SERVER['HY'].'img/icon/right-small.svg')?></div>
		  </a>
          <button title="See More" class="sdmc-button">
		    <div class="sdmc-button-label">See More</div>
			<div class="sdmc-button-icon"><?php require ($_SERVER['HY'].'img/icon/right-small.svg')?></div>
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
	gutter:13, 
	edgePadding:0,
	controls:true,
	nav:false,
	mouseDrag:true,
	autoplay:false,
	edgePadding:89,
	autoplayTimeout:5000,
    responsive:{
      "1360": {
        "items":3
      },
      "768": {
        "items":2
      }
    },
  });
</script>