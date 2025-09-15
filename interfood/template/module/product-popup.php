<div class="rancak-popup product-detail-popup" aria-popup-box="ProductDetail">
  <div class="rancak-popup-container content-center">
    <div class="rancak-popup-overlay"></div>
    <div class="rancak-popup-box product-detail">
	
	  <button title="Close" class="rancak-popup-close content-center">
	    <?php require ($_SERVER['IF'].'template/img/icon/close-popup.svg')?>
	  </button>
	  
	  <div class="product-detail-thumb">
	    <div class="product-detail-frame img-frame thumb-loading">
          <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/sample/sample-<?php echo rand(1,6); ?>.jpg">
		</div>
      </div>
	  
	  <div class="product-detail-container">
        <div style="height:200vh"></div>
	  </div>
	  
	</div>
  </div>
</div>