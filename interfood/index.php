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
  
  
  <section class="content-center">
    <div class="site-container">
	  <?php require ($_SERVER['IF'].'template/module/h2h3.php')?>
	</div>
  </section>
  
  
</div>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>