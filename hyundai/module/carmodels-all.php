<div id="carmodels-All" class="carmodels-list">
  <div class="carmodels-list-detail">
    <?php for ($i=1; $i <= 8 ; $i++) { ?>
      <div class="cld-box">
        <a title="Stargazer" class="cld-name" href="">Stargazer</a>
		<a title="Stargazer" class="cld-thumb flex_ori thumb-loading" href="">
		  <img alt="Foto Stargazer" class="lazyload" data-original="img/model-stargazer.png" />
		</a>
		<div class="cld-label">Price start form</div>
		<div class="cld-price">Rp.1.250.000.000</div>
		<div class="cld-available">Available in <?php echo rand(2,10); ?> options</div>
		<div class="cld-action">
		  <a title="Discover" class="cld-action-link" href="">
		    <div class="cld-action-label">Discover</div>
			<?php require ($_SERVER['HY'].'img/icon/right-small.svg')?>
		  </a>
		  <a title="Get Price" class="cld-action-link" href="">
		    <div class="cld-action-label">Get Price</div>
			<?php require ($_SERVER['HY'].'img/icon/right-small.svg')?>
		  </a>
		</div>
      </div>
    <?php } ?>
  </div>
</div>