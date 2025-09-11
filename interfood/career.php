<?php 
  $lang='id';
  $menu='Career';
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
        $cover_label_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat'; 
        $cover_label_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat'; 
        $cover_gateway='no';
        require ($_SERVER['IF'].'template/module/full-cover.php')
      ?>
    </div>
  </section>
  
  
  
  <section class="career-display content-center">
    <div class="site-container">
	  <?php 
	    $title_id='Karir';
		$subtitle_id='Lowongan pekerjaan Interfood hanya melalui web interfood.co.id. Tidak meminta data KTP dll. Tidak memungut biaya.';
	    $title_en='Career'; 
		$subtitle_en='Official Interfood jobs are available only through the website interfood.co.id. No ID card details are required, and no fees are charged.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
	  <div class="career-list">
	    <?php for ($i=1; $i<=10; $i++){ ?>
          <?php $career_status='open'; require ('template/module/career-box.php') ?>
		<?php } ?>
	    <?php for ($i=1; $i<=5; $i++){ ?>
          <?php $career_status='close'; require ('template/module/career-box.php') ?>
		<?php } ?>
	  </div>
	  
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>