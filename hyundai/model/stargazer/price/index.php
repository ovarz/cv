<?php 
  $page='model';
  $nav='Stargazer';
  $slideshow='yes';
  require ('../../../inc/base.php')
?>
<?php require ($_SERVER['HY'].'inc/sample.php')?>
<?php require ($_SERVER['HY'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<?php $header_style='default'; require ($_SERVER['HY'].'inc/header.php')?>
<div class="rancak-container">





  <section title="Price <?php echo $nav; ?>" class="rancak-section section-price-option">
    <span class="width-max">
	  <div class="section-price-option-container">
	    <div class="spoc-left">
		  <div class="spoc-car">
		    <h2 class="spoc-car-title"><?php echo $nav; ?></h2>
			<a title="/stargazer/price" class="spoc-car-change" href="model">
			  <div class="spoc-car-label">Change vehicle</div>
			  <?php require ($_SERVER['HY'].'img/icon/right.svg')?>
			</a>
			<div class="dmoc-car-frame flex_ori">
              <img alt="Stargazer Creamy White Pearl" class="lazyload" data-original="img/model-stargazer-cwp.png">
            </div>
		  </div>
		</div>
	    <div class="spoc-right">
		  <div class="spoc-right-box">
		    <div class="spoc-car-title">Select energy type.</div>
		  </div>
		</div>
	  </div>
	</span>
  </section>



  <section title="Get into the driver's seat." class="rancak-section gridbox-b">
    <span class="width-max">
	  <div class="gridbox-b-container">
        <?php 
          $contentbox_array = array();
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer/price',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'blue',
            'contentbox_img'=>'driver-seat',
            'contentbox_title'=>"Get into the driver's seat.",
            'contentbox_button'=>'yes',
            'contentbox_button_label'=>'Book a test drive',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer/price',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'yes',
            'contentbox_color'=>'blue',
            'contentbox_img'=>'local-dealer',
            'contentbox_title'=>'Want to speak to your local dealer?',
            'contentbox_button'=>'yes',
            'contentbox_button_label'=>'Contact a dealer',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer/price',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'white',
            'contentbox_img'=>'trade-in',
            'contentbox_title'=>'Want to trade-in?',
            'contentbox_button'=>'yes',
            'contentbox_button_label'=>'Book a valuation',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer/price',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'white',
            'contentbox_img'=>'click-to-buy',
            'contentbox_title'=>'Cl!ck to Buy',
            'contentbox_button'=>'yes',
            'contentbox_button_label'=>'Pay deposit',
          );
          foreach($contentbox_array as $contentbox_list){
        ?>
          <?php require ($_SERVER['HY'].'module/box-b.php')?>
        <?php } ?>
	  </div>
	</span>
  </section>
  
  
  
  
  
</div>



<?php require ($_SERVER['HY'].'inc/footer.php')?>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>