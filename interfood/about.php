<?php 
  $lang='id';
  $menu='About Us';
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
        $cover_label_id='Tentang Kami'; 
		$cover_sublabel_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.'; 
        $cover_label_en='About Us'; 
		$cover_sublabel_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
        $cover_gateway='no';
        require ($_SERVER['IF'].'template/module/full-cover.php')
      ?>
    </div>
  </section>
  
  
  
  <section class="content-center">
    <div class="site-container">
	
	  tes
	  
	</div>
  </section>
  
  
  
  <section class="home-importer content-center">
	<div class="section-separator section-separator-top"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
    <div class="site-container">
	  <?php 
	    $title_id='Mitra Internasional';
		$subtitle_id='Kami mengimpor produk dari';
	    $title_en='International Supplier'; 
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
              'hil_name_id'=>'Vietnam',
              'hil_name_en'=>'Vietnam',
              'hil_img'=>'vt',
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
  
  
  
  <section class="home-brand content-center">
    <div class="site-container">
	  <?php 
	    $title_id='Mitra Lokal';
		$subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    $title_en='Local Partners'; 
		$subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	
      <div class="home-brand-display page-brand-display">
        <div class="home-brand-list">
          <ul class="hbl-container">
            <?php for ($i=1; $i<=20; $i++){ ?>
              <li class="hbl-column">
                <div class="hbl-box">
                  <div class="hbl-logo img-frame thumb-loading content-center">
                    <img title="Logo <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/brand/<?php echo rand(1,80); ?>.png">
                  </div>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>