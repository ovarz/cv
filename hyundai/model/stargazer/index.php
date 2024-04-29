<?php 
  $page='model';
  $nav='Stargazer';
  $slideshow='yes';
  require ('../../inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/sample.php')?>
<?php require ($_SERVER['HY'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<?php $header_style='default'; require ($_SERVER['HY'].'inc/header.php')?>
<div class="rancak-container">





  <section title="Cover <?php echo $nav; ?>" class="model-cover">
    <?php 
	  $cover_model='stargazer';
	  $cover_title='New Stargazer';
	  $cover_price='Rp.999.000.000';
	  $cover_range='210 km';
	  $cover_power='320hp / 239 kW';
	  $cover_available='HTRAC AWD';
	  require ($_SERVER['HY'].'section/model-cover.php')
	?>
  </section>



  <section title="Best Deals For You" class="rancak-section section-best-deal">
    <span class="width-max">
	  <div class="section-title">
        <div class="section-title-primary">Best Deals For You</div>
      </div>
	</span>
  </section>
  
  
  
  
  
</div>
<?php require ($_SERVER['HY'].'inc/footer.php')?>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>