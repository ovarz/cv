<?php 
  $menu='About';
  require ('../template/inc/base.php')
?>
<?php require ($_SERVER['TK'].'template/inc/meta.php')?>
<?php require ($_SERVER['TK'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="highlight-A section-dark content-center">
    <?php 
      $hero_image='hero-about.jpg';
      $title='Impact by Design';
      $desc='Learn how innovative teams like yours leverage design to increase revenue, position products, and grow market share.';
      $link='';
      require ($_SERVER['TK'].'template/module/highlight-a.php')
    ?>
  </section>
  
  
  
</div>
<?php require ($_SERVER['TK'].'template/inc/footer.php')?>
<?php require ($_SERVER['TK'].'template/inc/base-bottom.php')?>