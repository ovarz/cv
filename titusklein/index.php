<?php 
  $lang='id';
  $menu='Home';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['TK'].'template/inc/meta.php')?>
<?php require ($_SERVER['TK'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="highlight-A section-dark content-center">
    <div class="highlight-A-bg img-frame thumb-loading">
      <img title="" class="lazyload" data-original="template/img/hero1.jpg">
	</div>
    <div class="site-container">
	
	  <div class="highlight-A-box">
	    <h2 class="highlight-A-title">DESIGN + STRATEGY</h2>
	    <h3 class="highlight-A-desc">Titus Klein is a design and strategy agency for complex organizations. We craft brand systems, narrative frameworks, and AI-enhanced tools that help global teams align, scale, and move with clarity.</h3>
	    <a title="" class="highlight-A-more" href=""><?php require ($_SERVER['TK'].'template/img/icon/more-down-circle.svg')?></a>
	  </div>
	  
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['TK'].'template/inc/footer.php')?>
<?php require ($_SERVER['TK'].'template/inc/base-bottom.php')?>