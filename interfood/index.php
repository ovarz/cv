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