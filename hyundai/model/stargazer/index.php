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
	  <div class="best-deal-container">
        <?php 
          $deal_array = array();
          $deal_array[]=array(
            'deal_icon'=>'payment',
            'deal_title'=>'Low Down Payment',
            'deal_desc'=>'Hyundai Finance in the form of Low Interest 2.4% for 3 Years with a DP of 20%, apart from that you can also enjoy a low interest program for a tenor of 1-7 years'
          );
          $deal_array[]=array(
            'deal_icon'=>'resale',
            'deal_title'=>'Resale Value Guarantee',
            'deal_desc'=>'Hyundai guarantees a resale value of 70% of the purchase price if the owner trades in the vehicle for a new Hyundai vehicle within the third year of ownership.'
          );
          $deal_array[]=array(
            'deal_icon'=>'smartdeal',
            'deal_title'=>'Hyundai Smartdeal',
            'deal_desc'=>'Hyundai SmartDeal is a smart financing solution to own Hyundai with lower cost up to 50%, worry-less of maintenance cost, and benefit of guaranteed 70% resale value for trade in to new Hyundai car directly after settling the last installment.'
          );
          $deal_array[]=array(
            'deal_icon'=>'protection',
            'deal_title'=>'Customer Protection',
            'deal_desc'=>'Medical treatment cost guarantee for drivers and passengers, in the event of an accident requiring medical treatment at the hospital.'
          );
          foreach($deal_array as $deal_list){
        ?>
		  <div class="bdc-box">
		    <div class="bdc-icon content_center">
			  <div class="bdc-icon-circle content_center">
			    <?php require ($_SERVER['HY'].'img/icon/deal-'.$deal_list['deal_icon'].'.svg')?>
			  </div>
			</div>
			<h2 class="bdc-title"><?php echo($deal_list['deal_title'])?></h2>
			<h3 class="bdc-desc"><?php echo($deal_list['deal_desc'])?></h3>
		  </div>
        <?php } ?>	
	  </div>
	  <div class="gateway-bottom content_center">
        <span class="gateway-list">
          <a title="Explore Hyundai Deals" class="btn gateway-button" href="">Explore Hyundai Deals</a>
        </span>
      </div>
	</span>
  </section>
  
  
  
  
  
</div>
<?php require ($_SERVER['HY'].'inc/footer.php')?>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>