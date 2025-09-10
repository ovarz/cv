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
	  
	  <div class="distribution-data">
        <?php 
          $dd_array = array();
          $dd_array[]=array(
            'dd_number'=>'13',
            'dd_label_id'=>'Gudang',
            'dd_label_en'=>'Warehouses',
            'dd_sublabel_id'=>'di seluruh Indonesia',
            'dd_sublabel_en'=>'across Indonesia',
          );
          $dd_array[]=array(
            'dd_number'=>'30000',
            'dd_label_id'=>'Meter Persegi',
            'dd_label_en'=>'Square Meter',
            'dd_sublabel_id'=>'Luas Gudang',
            'dd_sublabel_en'=>'of warehouse',
          );
          $dd_array[]=array(
            'dd_number'=>'200',
            'dd_label_id'=>'Truk dan Kendaraan',
            'dd_label_en'=>'Trucks and Vehicles',
            'dd_sublabel_id'=>'mendistribusikan produk kami ke seluruh negeri',
            'dd_sublabel_en'=>'distributing our products country-wide',
          );
          foreach($dd_array as $dd_box){
        ?>
		  <div class="dd-box">
		    <div class="dd-number">
			  <span class="countup-number" aria-number="<?php echo($dd_box['dd_number'])?>"><?php echo($dd_box['dd_number'])?></span>+
			</div>
			<div class="dd-label">
			  <span class="text-id"><?php echo($dd_box['dd_label_id'])?></span>
			  <span class="text-en"><?php echo($dd_box['dd_label_en'])?></span>
			</div>
			<div class="dd-sublabel">
			  <span class="text-id"><?php echo($dd_box['dd_sublabel_id'])?></span>
			  <span class="text-en"><?php echo($dd_box['dd_sublabel_en'])?></span>
			</div>
		  </div>
		<?php } ?>
	  </div>
	  
	  <div class="warehouse-slider">
	    <div class="warehouse-slider-container">
		  <?php for ($i=1; $i<=10; $i++){ ?>
		    <div class="wsc-column">
              <div class="wsc-box">
                <div class="wsc-image">
                  <a title="" class="wsc-image-frame img-frame thumb-loading" href="<?php echo $more_link; ?>">
                    <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/sample/sample-<?php echo rand(1,6); ?>.jpg">
                  </a>
                </div>
                <div class="wsc-info">
                  <div class="wsc-info-container">
                    <div class="wsc-number">0 / 00</div>
                    <div class="wsc-name"><?php echo $random_title[array_rand($random_title)];?></div>
                    <div class="wsc-location">Batam, Indonesia</div>
                  </div>
                </div>
              </div>
		    </div>
		  <?php } ?>
		</div>
		<div class="wirehouse-slider-nav">
		  <button id="customPrev">
            <?php require ($_SERVER['IF'].'template/img/icon/slider-prev.svg')?>
          </button>
		  <button id="customNext">
            <?php require ($_SERVER['IF'].'template/img/icon/slider-next.svg')?>
          </button>
		</div>
	  </div>
      <script>
        var warehouse_slider = tns({
          container:'.warehouse-slider-container',
          speed:333,
          items:1,
          gutter:1, 
          edgePadding:0,
          controls:true,
		  prevButton:'#customPrev',
		  nextButton:'#customNext',
          nav:false,
          mouseDrag:true,
          autoplay:false,
        });
      </script> 
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
	  
	  <div class="home-brand-display">
	    <?php for ($j=1; $j<=2; $j++){ ?>
		  <div class="home-brand-list">
			<ul class="hbl-container">
			  <?php for ($i=1; $i<=20; $i++){ ?>
				<li class="hbl-column">
				  <a title="<?php echo $random_title[array_rand($random_title)];?>" class="hbl-box" href="">
					<div class="hbl-logo img-frame thumb-loading content-center">
					  <img title="Logo <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/brand/<?php echo rand(1,80); ?>.png">
					</div>
				  </a>
				</li>
			  <?php } ?>
			</ul>
		  </div>
		<?php } ?>
	  </div>
	  
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
  
  
  
  <section class="main-location">
    <div class="main-location-map">
	  <div class="main-location-frame img-frame thumb-loading">
		<iframe class="lazyload" data-original="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2792819640836!2d104.07228367567967!3d1.1107528622962473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d988c7d2f22c17%3A0x85777502628df4b9!2sPT.%20Interfood%20Sukses%20Jasindo%20Batam!5e0!3m2!1sid!2sid!4v1757486341883!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	  </div>
	</div>
	<div class="main-location-info content-center">
	  <span class="mli-container">
	    <div class="mli-label">
		  <span class="text-id">Kantor Utama</span>
		  <span class="text-en">Main Office</span>
		</div>
	    <h2 class="mli-city">Batam</h2>
	    <h3 class="mli-address">Tunas Industrial Estate, Blok 8 F, Belian, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29464</h3>
		<div class="mli-contact">
		  <a title="" class="mli-contact-link" href="">
		    <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/contact-phone.svg')?></div>
		    <div class="mli-contact-label">+62 21 345 0214</div>
		  </a>
		  <a title="" class="mli-contact-link" href="">
		    <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/contact-email.svg')?></div>
		    <div class="mli-contact-label">jkt@interfood.co.id</div>
		  </a>
		</div>
		<?php $more_type='link'; $more_label_id='Kantor Daerah'; $more_label_en='Regional Office'; $more_link=''; 
	    require ($_SERVER['IF'].'template/module/more.php')?>
	  </span>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>