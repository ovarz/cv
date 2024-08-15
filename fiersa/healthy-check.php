<?php 
  $page='dashboard';
  $nav='Healthy Check';
  $opensub='Customer Data';
  $slideshow='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['FIERSA'].'inc/sample.php')?>
<?php require ($_SERVER['FIERSA'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<?php require ($_SERVER['FIERSA'].'inc/header.php')?>
<?php require ($_SERVER['FIERSA'].'inc/nav.php')?>
<div class="rancak-container">



  <div class="coming-soon">
    <style>
	  .rancak-container{display:flex; justify-content:center; align-items:center;}
	  .coming-soon{color:var(--color-text-3); fill:var(--color-text-3);}
	  .coming-soon-icon .svgicon{width:auto; height:var(--size-7);}
	  .coming-soon-label{text-align:center; text-transform:uppercase; font-weight:800; font-size:var(--fontsize-title); margin-top:var(--size-2);}
	</style>
	<div class="coming-soon-icon content_center">
	  <?php require ($_SERVER['FIERSA'].'img/icon/coming-soon.svg')?>
	</div>
	<div class="coming-soon-label">Coming Soon</div>
  </div>



</div>
<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>