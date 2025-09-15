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
        <div class="pdc-id">00XXX0X00XXX</div>
        <h2 class="pdc-name">Product Name <?php echo rand(1,100); ?></h2>
        <h3 class="pdc-brand">Brand Name</h3>
		<?php require ($_SERVER['IF'].'template/module/share-list.php')?>
		<div class="pdc-desc">
		  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum tempor consectetur. Aliquam erat volutpat. Nam et ultrices magna, nec fringilla augue. Donec aliquet dui nisi, eu posuere odio semper dignissim.</p>
		  <p>Pellentesque purus nibh, facilisis non hendrerit sit amet, imperdiet ut metus. Vestibulum tortor mi, pulvinar porta quam vitae, cursus convallis mauris. Suspendisse auctor, elit a aliquam accumsan, velit urna ullamcorper arcu,</p>
		</div>
	  </div>
	  
	</div>
  </div>
</div>