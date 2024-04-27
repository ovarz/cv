<section title="Our Models" class="rancak-section section-our-models">
  <span class="width-max">

    <div class="slideshow-models">
	
      <button class="slide-button slide-button-prev" aria-controls="customize" tabindex="-1" data-controls="prev">
        <?php require ($_SERVER['HY'].'img/icon/prev-arrow.svg')?>
      </button>

      <button class="slide-button slide-button-next" aria-controls="customize" tabindex="-1" data-controls="next">
        <?php require ($_SERVER['HY'].'img/icon/next-arrow.svg')?>
      </button>
	
      <div class="slideshow-models-container">
	  
	    <?php for ($i=1; $i <= 3 ; $i++) { ?>
        <div class="slideshow-models-box">
          <div class="smb-car content_center">
		    <div class="smb-car-frame flex_ori thumb-loading">
			  <img alt="img_title" class="lazyload" data-original="img/model-stargazer.png" />
			</div>
		  </div>
		  <div class="smb-info">
		    <div class="smb-info-box smb-info-main">
			  <div class="smb-info-date">2024</div>
			  <div class="smb-info-name">Stargazer</div>
			  <div class="smb-info-label">Multi-Purpose Vehicle</div>
			</div>
		  </div>
        </div>
		<?php } ?>

      </div>
		
    </div>

  </span>
</section>







<script>
  var slider_slideshow_full = tns({
	container:'.slideshow-models-container',
	speed:377,
	items:1,
	gutter:0, 
	edgePadding:0,
	controls:true,
	nav:true,
	navPosition:'bottom',
	mouseDrag:true,
	autoplay:false,
	controlsContainer:'.slideshow-models',
  });
</script>