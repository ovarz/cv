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



  <menu title="Menu <?php echo $nav; ?>" class="model-menu">
    <span class="width-max">
      <?php 
        $model_menu_name='stargazer';
		$model_link_anchor='model/stargazer';
		$model_link_price='model/stargazer/price';
		$model_link_dealer='model/stargazer';
		
		$model_menu_array = array();
        $model_menu_array[]=array('model_menu_name'=>'Promo','model_menu_id'=>'promo');
        $model_menu_array[]=array('model_menu_name'=>'Key Features','model_menu_id'=>'key-features');
        $model_menu_array[]=array('model_menu_name'=>'Design','model_menu_id'=>'design');
        $model_menu_array[]=array('model_menu_name'=>'Trims','model_menu_id'=>'trims');
        $model_menu_array[]=array('model_menu_name'=>'Safety','model_menu_id'=>'safety');
        $model_menu_array[]=array('model_menu_name'=>'Performance','model_menu_id'=>'performance');
        $model_menu_array[]=array('model_menu_name'=>'Accessories','model_menu_id'=>'accessories');
        $model_menu_array[]=array('model_menu_name'=>'Specs','model_menu_id'=>'specs');
        require ($_SERVER['HY'].'section/model-menu.php')
      ?>
	</span>
  </menu>



  <section title="Best Deals For You" class="rancak-section section-best-deal" style="margin-top:var(--size-5);">
    <span class="width-max">
	  <div class="section-title">
        <div class="section-title-primary">Best Deals For You</div>
      </div>
	</span>
  </section>
  
  
  
  
  
</div>
<?php require ($_SERVER['HY'].'inc/footer.php')?>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>