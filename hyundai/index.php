<?php 
  $page='default';
  $nav='Home';
  $slideshow='yes';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/sample.php')?>
<?php require ($_SERVER['HY'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<?php $header_style='transparent'; require ($_SERVER['HY'].'inc/header.php')?>
<div class="rancak-container">





  <section title="Cover" class="slideshow-full slideshow-full-top">
    <?php require ($_SERVER['HY'].'section/slideshow-full.php')?>
  </section>
  
  
  <section title="Our Models" class="rancak-section section-our-models" style="margin-top:var(--size-5)">
    <?php require ($_SERVER['HY'].'section/our-models.php')?>
  </section>



  <section title="Cover" class="rancak-section">
    <span class="width-max">
	  rancak-section
	</span>
  </section>



  <section title="Cover" class="rancak-section">
    <span class="width-max">
	  rancak-section
	</span>
  </section>
  
  
  
  
  
</div>
<?php require ($_SERVER['HY'].'inc/footer.php')?>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>