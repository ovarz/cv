<?php 
  $lang='id';
  $menu='Home';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['IF'].'template/inc/sample.php')?>
<?php require ($_SERVER['IF'].'template/inc/meta.php')?>
<?php require ($_SERVER['IF'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="content-center home-about">
    <div class="site-container">
	  <div class="home-about-box hab-left">
	    <?php require ($_SERVER['IF'].'template/module/home-about.php')?>
	  </div>
	  <div class="home-about-box hab-right">
	    <?php require ($_SERVER['IF'].'template/module/home-about.php')?>
	  </div>
	</div>
  </section>
  
  
  
  <section class="content-center home-product">
    <div class="section-separator section-separator-top"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
    <div class="site-container">
	  <?php require ($_SERVER['IF'].'template/module/h2h3.php')?>
	  
      <div class="home-product-list">
        <ul class="hpl-container">
          <?php 
            $home_product_array = array();
            $home_product_array[]=array(
              'hpl_name_id'=>'Makanan Ringan',
              'hpl_name_en'=>'Snack',
              'hpl_label'=>'snack',
              'hpl_link'=>'',
            );
            $home_product_array[]=array(
              'hpl_name_id'=>'Makanan Kaleng',
              'hpl_name_en'=>'Canned Food',
              'hpl_label'=>'canned-food',
              'hpl_link'=>'',
            );
            $home_product_array[]=array(
              'hpl_name_id'=>'Makanan Beku',
              'hpl_name_en'=>'Frozen Food',
              'hpl_label'=>'frozen-food',
              'hpl_link'=>'',
            );
            $home_product_array[]=array(
              'hpl_name_id'=>'Minuman',
              'hpl_name_en'=>'Beverage',
              'hpl_label'=>'beverage',
              'hpl_link'=>'',
            );
            $home_product_array[]=array(
              'hpl_name_id'=>'Bahan Dapur',
              'hpl_name_en'=>'Kitchen',
              'hpl_label'=>'kitchen',
              'hpl_link'=>'',
            );
            $home_product_array[]=array(
              'hpl_name_id'=>'Lainnya',
              'hpl_name_en'=>'Others',
              'hpl_label'=>'others',
              'hpl_link'=>'',
            );
            foreach($home_product_array as $home_product_list){
          ?>
            <li class="hpl-column">
              <a title="<?php echo($home_product_list['hpl_name_en'])?>" class="hpl-box img-frame thumb-loading" href="<?php echo($home_product_list['hpl_link'])?>">
                <img title="Foto <?php echo($home_product_list['hpl_name_en'])?>" class="lazyload" 
				data-original="template/img/product-<?php echo($home_product_list['hpl_label'])?>.jpg">
                <h2 class="hpl-overlay">
				  <span class="text-id"><?php echo($home_product_list['hpl_name_id'])?></span>
				  <span class="text-en"><?php echo($home_product_list['hpl_name_en'])?></span>
				</h2>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
	  
	  <?php $more_type='button'; $more_label_id='Produk Lainnya'; $more_label_en='More Product'; $more_link=''; 
	  require ($_SERVER['IF'].'template/module/more.php')?>
	  
	</div>
	<div class="section-separator section-separator-bottom"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
  </section>
  
  
  
  <section class="content-center">
    <div class="site-container">
	  <?php require ($_SERVER['IF'].'template/module/h2h3.php')?>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>