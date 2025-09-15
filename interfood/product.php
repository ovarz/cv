<?php 
  $lang='id';
  $menu='Product';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['IF'].'template/inc/sample.php')?>
<?php require ($_SERVER['IF'].'template/inc/meta.php')?>
<?php require ($_SERVER['IF'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="home-slide">
    <div class="slide-image img-frame thumb-loading">
      <?php 
        $cover_label_id='Produk'; 
		$cover_sublabel_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.'; 
        $cover_label_en='Product'; 
		$cover_sublabel_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
        $cover_gateway='no';
        require ($_SERVER['IF'].'template/module/full-cover.php')
      ?>
    </div>
  </section>
  
  
  
  <section class="product-display content-center">
    <div class="site-container">
	
	  <div class="product-display-split">
	    <div class="pds-small product-display-dropdown" aria-dropdown-box="filter">
		  <div class="product-display-overlay mobile-only"></div>
		  <div class="product-display-filter">
		    filter
		  </div>
		</div>
		<div class="pds-big">
		  <div class="product-display-top">
		    <div class="pdt-search">
              <div class="form-box form-search pdt-search-box">
                <input class="form-field text-id" name="" type="text" placeholder="Cari Produk.....">
                <input class="form-field text-en" name="" type="text" placeholder="Search Product.....">
                <div class="form-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/search.svg')?></div>
              </div>
			</div>
		    <div class="pdt-info desktop-only">
			  <span class="text-id">Menampilkan 1 - 60 barang dari total</span>
			  <span class="text-en">Showing 1 - 60 items from total</span>
			</div>
		    <div class="pdt-filter-button mobile-only">
			  <button title="" class="btn pdt-button" aria-dropdown-button="filter"><?php require ($_SERVER['IF'].'template/img/icon/menu.svg')?></button>
			</div>
		  </div>
		  <div class="product-display-list">
		    <?php for ($i=1; $i<=12; $i++){ ?>
		      <?php require ($_SERVER['IF'].'template/module/product-box.php')?>
			<?php } ?>
		  </div>
          <?php $more_type='button'; $more_label_id='Muat Produk Berikutnya'; $more_label_en='Load Next Product'; $more_link='product.php'; 
          require ($_SERVER['IF'].'template/module/more.php')?>
		</div>
	  </div>
	  
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/career-popup.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>