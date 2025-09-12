<?php 
  $lang='id';
  $menu='Contact';
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
        $cover_label_id='Kontak'; 
		$cover_sublabel_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.'; 
        $cover_label_en='Contact'; 
		$cover_sublabel_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
        $cover_gateway='no';
        require ($_SERVER['IF'].'template/module/full-cover.php')
      ?>
    </div>
  </section>
  
  
  
  <section class="contact-display content-center">
    <div class="site-container">
	  <div class="contact-display-split">
	  
        <div class="tab-contact">
          <div class="tab-contact-action">
            <div class="tca-container">
              <button title="General inquiries" class="tca-button tca-curr content-center" aria-tab-button="TabGI">
                <span class="text-id">Pertanyaan Umum</span>
                <span class="text-en">General Inquiries</span>
              </button>
              <button title="Purchase interest" class="tca-button content-center" aria-tab-button="TabPI">
                <span class="text-id">Minat Pembelian</span>
                <span class="text-en">Purchase Interest</span>
              </button>
            </div>
          </div>
          <div class="tab-contact-form">
            <?php require ($_SERVER['IF'].'template/module/contact-gi.php')?>
            <?php require ($_SERVER['IF'].'template/module/contact-pi.php')?>
          </div>
        </div>
		
		<div class="contact-display-list">
          <?php 
            $title_id='Jaringan Kami';
            $subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
            $title_en='Our Network'; 
            $subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
            require ($_SERVER['IF'].'template/module/h2h3.php')
          ?>
		</div>
		
	  </div>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/career-popup.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>