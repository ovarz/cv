<div class="rancak-popup product-detail-popup" aria-popup-box="ProductDetail">
  <div class="rancak-popup-container content-center">
    <div class="rancak-popup-overlay"></div>
    <div class="rancak-popup-box product-detail">
	
	  <button title="Close" class="rancak-popup-close content-center mobile-only">
	    <?php require ($_SERVER['IF'].'template/img/icon/close-popup.svg')?>
	  </button>
	  
	  <div class="product-detail-thumb">
	    <div class="product-detail-frame img-frame thumb-loading">
          <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/sample/sample-3.jpg">
		</div>
      </div>
	  
	  <div class="product-detail-container">
        <div class="pdc-barcode">
		  <div class="pdc-barcode-frame img-frame thumb-loading">
            <img title="Barcode" class="lazyload" data-original="template/img/icon/barcode.svg">
		  </div>
		</div>
        <div class="pdc-id">00XXX0X00XXX</div>
        <h2 class="pdc-name">Product Name <?php echo rand(1,100); ?></h2>
        <h3 class="pdc-brand">Brand Name</h3>
		<?php require ($_SERVER['IF'].'template/module/share-list.php')?>
		<div class="pdc-row">
		  <div class="pdc-label">
            <span class="text-id">Varian</span>
            <span class="text-en">Variants</span>
		  </div>
          <div class="pdc-option">
		    <?php for ($i=1; $i<=5; $i++){ ?>
              <div class="pdc-option-box">
                <span class="text-id">Varian <?php echo rand(1,100); ?></span>
                <span class="text-en">Variants <?php echo rand(1,100); ?></span>
			  </div>
			<?php } ?>
		    <?php for ($i=1; $i<=2; $i++){ ?>
              <div class="pdc-option-box pdc-option-unavailable">
                <span class="text-id">Varian <?php echo rand(1,100); ?></span>
                <span class="text-en">Variants <?php echo rand(1,100); ?></span>
			  </div>
			<?php } ?>
          </div>
		</div>
		<div class="pdc-row">
		  <div class="pdc-label">
            <span class="text-id">Kemasan</span>
            <span class="text-en">Packaging</span>
		  </div>
          <div class="pdc-option">
		    <?php for ($i=1; $i<=1; $i++){ ?>
              <div class="pdc-option-box">
                <span class="text-id">300ml x 24 can</span>
                <span class="text-en">300ml x 24 can</span>
			  </div>
			<?php } ?>
		    <?php for ($i=1; $i<=1; $i++){ ?>
              <div class="pdc-option-box pdc-option-unavailable">
                <span class="text-id">600ml x 12 can</span>
                <span class="text-en">600ml x 12 can</span>
			  </div>
			<?php } ?>
          </div>
		</div>
		<div class="pdc-row">
		  <div class="pdc-label">
            <span class="text-id">Deskripsi</span>
            <span class="text-en">Deskription</span>
		  </div>
          <div class="pdc-desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum tempor consectetur. Aliquam erat volutpat. Nam et ultrices magna, nec fringilla augue. Donec aliquet dui nisi, eu posuere odio semper dignissim.</p>
          </div>
		</div>
	  </div>
	  
	</div>
  </div>
</div>