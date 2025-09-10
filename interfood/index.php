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
	  <?php 
	    $title_id='Produk';
		$subtitle_id='Kami menyediakan beragam produk makanan dan minuman, mulai dari camilan manis seperti cokelat dan permen, hingga berbagai bahan untuk kebutuhan bisnis FnB maupun memasak di rumah.';
	    $title_en='Product'; 
		$subtitle_en='We offer a wide variety of food & beverage products. From sweets like chocolate & confectionaries, ingredients for both FnB businesses and home cooks, etc.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
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
  
  
  
  <section class="content-center home-distribution">
    <div class="site-container">
	  <?php 
	    $title_id='Distribusi';
		$subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    $title_en='Distribution'; 
		$subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	</div>
  </section>
  
  
  
  <section class="content-center home-importer">
	<div class="section-separator section-separator-top"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
    <div class="site-container">
	  <?php 
	    $title_id='Pengimpor';
		$subtitle_id='Kami mengimpor produk dari';
	    $title_en='Importer'; 
		$subtitle_en='We import products from';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
      <div class="home-importer-list">
        <ul class="hil-container">
          <?php 
            $home_importer_array = array();
            $home_importer_array[]=array(
              'hil_name_id'=>'Singapore',
              'hil_name_en'=>'Singapura',
              'hil_img'=>'sg',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'Malaysia',
              'hil_name_en'=>'Malaysia',
              'hil_img'=>'my',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'Thailand',
              'hil_name_en'=>'Thailand',
              'hil_img'=>'th',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'China',
              'hil_name_en'=>'Cina',
              'hil_img'=>'cn',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'Turki',
              'hil_name_en'=>'Turkey',
              'hil_img'=>'ty',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'Lainnya',
              'hil_name_en'=>'Many more',
              'hil_img'=>'wd',
            );
            foreach($home_importer_array as $home_importer_list){
          ?>
            <li class="hil-column">
              <div class="hil-box img-frame thumb-loading">
                <img title="Foto <?php echo($home_importer_list['hil_name_en'])?>" class="lazyload" 
				data-original="template/img/photo-<?php echo($home_importer_list['hil_img'])?>.jpg">
                <div class="hil-overlay content-center">
				  <div class="hil-overlay-info">
				    <div class="hil-overlay-icon content-center">
					  <?php require ($_SERVER['IF'].'template/img/flag-'.$home_importer_list['hil_img'].'.svg')?>
					</div>
                    <h2 class="hil-overlay-name">
                      <span class="text-id"><?php echo($home_importer_list['hil_name_id'])?></span>
                      <span class="text-en"><?php echo($home_importer_list['hil_name_en'])?></span>
                    </h2>
				  </div>
				</div>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
	</div>
	<div class="section-separator section-separator-bottom"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
  </section>
  
  
  
  <section class="content-center home-brand">
    <div class="site-container">
	  <?php 
	    $title_id='Brand Ternama yang Kami Wakili';
		$subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    $title_en='Top Brands We Represent'; 
		$subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	</div>
  </section>
  
  
  
  <section class="content-center latest-news">
    <div class="site-container">
	  <?php 
	    $title_id='Berita Terkini';
		$subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    $title_en='Latest News'; 
		$subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
	  <div class="news-list">
	    <?php for ($i=1; $i<=4; $i++){ ?>
	      <?php require ($_SERVER['IF'].'template/module/news-box.php')?>
		<?php } ?>
	  </div>
	  
	  <?php $more_type='button'; $more_label_id='Berita Lainnya'; $more_label_en='More News'; $more_link=''; 
	  require ($_SERVER['IF'].'template/module/more.php')?>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>