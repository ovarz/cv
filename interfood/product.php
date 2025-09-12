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
  
  
  
  <section class="contact-display content-center">
    <div class="site-container">
	
	  tes
	  
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/career-popup.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>