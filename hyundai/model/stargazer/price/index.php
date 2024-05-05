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
		    <div class="spoc-right-title">
		      <div class="spoc-car-title">Select energy type.</div>
			</div>
			<div class="spoc-right-list">
              <?php 
                $price_option_array = array();
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'energy type',
                  'price_option_value'=>'300000000',
                  'price_option_checked'=>'yes',
                  'price_option_name'=>'Petrol',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'energy type',
                  'price_option_value'=>'310000000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'Diesel',
                );
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>
			</div>
		  </div>
		  
		  <div class="spoc-right-box">
		    <div class="spoc-right-title">
		      <div class="spoc-car-title">Select variant.</div>
		      <div class="spoc-car-subtitle">
			    <div class="spoc-car-subtitle-label">Find what's behind each variant</div>
				<?php require ($_SERVER['HY'].'img/icon/right.svg')?>
			  </div>
			</div>
			<div class="spoc-right-list">
              <?php 
                $price_option_array = array();
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'1',
                  'price_option_checked'=>'yes',
                  'price_option_name'=>'STARGAZER Prime IVT 7 Seat (With EPB)',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'2',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'STARGAZER Active MT (With Alloy Wheel)',
                );
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>	
			</div>
		  </div>
		  
		  <div class="spoc-right-box">
		    <div class="spoc-car-total">0</div>
			<div class="spoc-car-total-energy">0</div>
			<div class="spoc-car-total-variant">0</div>
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



<script defer>
$(document).ready(function(){
  var value_energy_type = parseInt($('input[name="energy type"]:checked').val());
  var value_variant = parseInt($('input[name="variant"]:checked').val());
  var value_total = value_energy_type + value_variant;
  $('.spoc-car-total').html(value_total);
  
  $('.default-radiobutton-real').click(function(){
    var get_section = $(this).attr('name');
	
	
    if(get_section == 'energy type'){
	  var get_value_energy_type = parseInt($(this).attr('name', 'energy type').val());
	}
	
    else if(get_section == 'variant'){
	  var get_value_variant = parseInt($(this).attr('name', 'variant').val());
	}
	
	var change_value_total = parseInt(get_value_energy_type) + parseInt(get_value_variant);
	alert(change_value_total);
    $('.spoc-car-total').text(change_value_total);
    $('.spoc-car-total-energy').text(get_value_energy_type);
    $('.spoc-car-total-variant').text(get_value_variant);
  });
  
});
</script>



<?php require ($_SERVER['HY'].'inc/footer.php')?>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>