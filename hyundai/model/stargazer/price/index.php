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
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>
			</div>
		  </div>
		  
		  <div class="spoc-right-box">
		    <div class="spoc-right-title">
		      <div class="spoc-car-title">Select variant.</div>
		      <a title="Find what's behind each variant" class="spoc-car-subtitle" href="model/stargazer/price/">
			    <div class="spoc-car-subtitle-label">Find what's behind each variant</div>
				<?php require ($_SERVER['HY'].'img/icon/right.svg')?>
			  </a>
			</div>
			<div class="spoc-right-list">
              <?php 
                $price_option_array = array();
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'0',
                  'price_option_checked'=>'yes',
                  'price_option_name'=>'STARGAZER Prime IVT 7 Seat (With EPB)',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'1000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'STARGAZER Active MT (With Alloy Wheel)',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'2000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'STARGAZER Active IVT (With Alloy Wheel))',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'3000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'STARGAZER Essential MT 7 Seat',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'4000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'STARGAZER Essential MT Captain Seat',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'5000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'STARGAZER Essential IVT 7 Seat',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'6000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'STARGAZER Essential IVT Captain Seat',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'7000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'STARGAZER Style IVT 7 Seat (New Dashboard)',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'8000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'STARGAZER Style IVT Captain Seat (New Dashboard)',
                  'price_option_color'=>'',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'variant',
                  'price_option_value'=>'9000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'STARGAZER Prime IVT Captain Seat (With EPB)',
                );
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>	
			</div>
		  </div>
		  
		  <div class="spoc-right-box">
		    <div class="spoc-right-title">
		      <div class="spoc-car-title">Choose your engine.</div>
		      <a title="Find what's behind each variant" class="spoc-car-subtitle" href="model/stargazer/price/">
			    <div class="spoc-car-subtitle-label">Which engine to choose?</div>
				<?php require ($_SERVER['HY'].'img/icon/right.svg')?>
			  </a>
			</div>
			<div class="spoc-right-list">
              <?php 
                $price_option_array = array();
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'your engine',
                  'price_option_value'=>'0',
                  'price_option_checked'=>'yes',
                  'price_option_name'=>'2.2 CRDi Petrol',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'your engine',
                  'price_option_value'=>'100',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'3.5 MPi Petrol',
                );
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>
			</div>
		  </div>
		  
		  <div class="spoc-right-box">
		    <div class="spoc-right-title">
		      <div class="spoc-car-title">Transmission.</div>
			</div>
			<div class="spoc-right-list">
              <?php 
                $price_option_array = array();
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'transmission',
                  'price_option_value'=>'0',
                  'price_option_checked'=>'yes',
                  'price_option_name'=>'8-Speed Automatic FWD',
                );
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>
			</div>
		  </div>
		  
		  <div class="spoc-right-box">
		    <div class="spoc-right-title">
		      <div class="spoc-car-title">Exterior Colour.</div>
		      <div class="spoc-car-subtitle">
			    <div class="spoc-car-subtitle-label">Estimated prices shown.</div>
			  </div>
			</div>
			<div class="spoc-right-list spoc-right-split">
              <?php 
                $price_option_array = array();
                $price_option_array[]=array(
                  'price_option_type'=>'2',
                  'price_option_section'=>'exterior colour',
                  'price_option_value'=>'10000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'Abyss Black',
                  'price_option_color'=>'black',
                  'price_option_money'=>'10.000',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'2',
                  'price_option_section'=>'exterior colour',
                  'price_option_value'=>'20000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'Typhoon Silver',
                  'price_option_color'=>'silver',
                  'price_option_money'=>'20.000',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'2',
                  'price_option_section'=>'exterior colour',
                  'price_option_value'=>'0',
                  'price_option_checked'=>'yes',
                  'price_option_name'=>'White Cream',
                  'price_option_color'=>'white',
                  'price_option_money'=>'0',
                );
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>
			</div>
		  </div>
		  
		  <div class="spoc-right-box">
		    <div class="spoc-right-title">
		      <div class="spoc-car-title">Interior Colour.</div>
		      <div class="spoc-car-subtitle">
			    <div class="spoc-car-subtitle-label">Estimated prices shown.</div>
			  </div>
			</div>
			<div class="spoc-right-list spoc-right-split">
              <?php 
                $price_option_array = array();
                $price_option_array[]=array(
                  'price_option_type'=>'2',
                  'price_option_section'=>'interior colour',
                  'price_option_value'=>'0',
                  'price_option_checked'=>'yes',
                  'price_option_name'=>'Black Cloth',
                  'price_option_color'=>'black',
                  'price_option_money'=>'0',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'2',
                  'price_option_section'=>'interior colour',
                  'price_option_value'=>'100000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'Cream Cloth',
                  'price_option_color'=>'cream',
                  'price_option_money'=>'100.000',
                );
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>
			</div>
		  </div>
		  
		  <div class="spoc-right-box">
		    <div class="spoc-right-title">
		      <div class="spoc-car-title">Genuine Accessories.</div>
		      <a title="The benefits of genuine" class="spoc-car-subtitle" href="model/stargazer/price/">
			    <div class="spoc-car-subtitle-label">The benefits of genuine</div>
				<?php require ($_SERVER['HY'].'img/icon/right.svg')?>
			  </a>
			</div>
			<div class="spoc-right-list spoc-right-split">
              <?php 
                $price_option_array = array();
                $price_option_array[]=array(
                  'price_option_type'=>'3',
                  'price_option_section'=>'genuine accessories',
                  'price_option_value'=>'0',
                  'price_option_checked'=>'yes',
                  'price_option_name'=>'Interior',
                  'price_option_img'=>'interior',
                  'price_option_cate'=>'Packs',
                  'price_option_money'=>'0',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'3',
                  'price_option_section'=>'genuine accessories',
                  'price_option_value'=>'1000000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'2 bike carrier',
                  'price_option_img'=>'bike-carrier',
                  'price_option_cate'=>'Lifestyle',
                  'price_option_money'=>'1.000.000',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'3',
                  'price_option_section'=>'genuine accessories',
                  'price_option_value'=>'2000000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'Towbar, tow ball & trailer wiring harness',
                  'price_option_img'=>'towbar',
                  'price_option_cate'=>'Exterior',
                  'price_option_money'=>'2.000.000',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'3',
                  'price_option_section'=>'genuine accessories',
                  'price_option_value'=>'3000000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'Integrated sidesteps',
                  'price_option_img'=>'sidesteps',
                  'price_option_cate'=>'Exterior',
                  'price_option_money'=>'3.000.000',
                );
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>
			</div>
		  </div>
		  
		  <div class="spoc-right-box">
		    <div class="spoc-right-title">
		      <div class="spoc-car-title">Pre-Paid Servicing (optional).</div>
		      <a title="See how it works" class="spoc-car-subtitle" href="model/stargazer/price/">
			    <div class="spoc-car-subtitle-label">See how it works</div>
				<?php require ($_SERVER['HY'].'img/icon/right.svg')?>
			  </a>
			</div>
			<div class="spoc-right-list">
              <?php 
                $price_option_array = array();
                $price_option_array[]=array(
                  'price_option_type'=>'4',
                  'price_option_section'=>'prepaid servicing',
                  'price_option_value'=>'0',
                  'price_option_checked'=>'yes',
                  'price_option_name'=>'None',
                  'price_option_range'=>'0',
                  'price_option_money'=>'0',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'4',
                  'price_option_section'=>'prepaid servicing',
                  'price_option_value'=>'10000000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'3 years, up to',
                  'price_option_range'=>'45.000',
                  'price_option_money'=>'10.000.000',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'4',
                  'price_option_section'=>'prepaid servicing',
                  'price_option_value'=>'20000000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'4 years, up to',
                  'price_option_range'=>'60.000',
                  'price_option_money'=>'20.000.000',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'4',
                  'price_option_section'=>'prepaid servicing',
                  'price_option_value'=>'30000000',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'5 years, up to',
                  'price_option_range'=>'75.000',
                  'price_option_money'=>'30.000.000',
                );
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>
			</div>
		  </div>
		  
		  <div class="spoc-right-box">
		    <div class="spoc-right-title">
		      <div class="spoc-car-title"><?php echo $nav; ?></div>
		      <div class="spoc-car-subtitle">
			    <div class="spoc-car-subtitle-label spoc-variant-label"></div>
			  </div>
			</div>
			<div class="spoc-right-list">
              <div class="spoc-location-choose">
			    <input class="spoc-location-field" name="" type="text" autocomplete="off" placeholder="Insert your location.....">
				<button title="Choose Via Maps" class="spoc-location-button content_center">
				  <?php require ($_SERVER['HY'].'img/icon/maps.svg')?>
				</button>
			  </div>
			  <button title="Final Price" class="spoc-final-detail">
			    <div class="spoc-final-detail-label">Price</div>
			    <div class="spoc-final-detail-price">Rp.<span class="spoc-final-price">0</span></div>
			    <div class="spoc-final-detail-arrow content_center">
				  <?php require ($_SERVER['HY'].'img/icon/down.svg')?>
				</div>
			  </button>
			  <div class="spoc-final-list hide">
			    <div class="spoc-final-row">
				  <div class="spoc-final-row-label">Price Base Car</div>
				  <div class="spoc-final-row-price">Rp.<span class="spoc-base-price">0</span></div>
				</div>
			    <div class="spoc-final-row">
				  <div class="spoc-final-row-label">Price Variant</div>
				  <div class="spoc-final-row-price">Rp.<span class="spoc-variant-price">0</span></div>
				</div>
			    <div class="spoc-final-row">
				  <div class="spoc-final-row-label">Price Total Feature</div>
				  <div class="spoc-final-row-price">Rp.<span class="spoc-feature-price">0</span></div>
				</div>
			  </div>
			</div>
		  </div>
		  
		  <div class="spoc-right-box spoc-dealer-list hide">
		    <div class="spoc-right-title">
		      <div class="spoc-car-title">Select dealer.</div>
			</div>
			<div class="spoc-right-list">
              <?php 
                $price_option_array = array();
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'select dealer',
                  'price_option_value'=>'',
                  'price_option_checked'=>'yes',
                  'price_option_name'=>'Lotte Shopping Avenue',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'select dealer',
                  'price_option_value'=>'',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'Pancoran',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'select dealer',
                  'price_option_value'=>'',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'Mampang',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'select dealer',
                  'price_option_value'=>'',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'Simprug',
                );
                $price_option_array[]=array(
                  'price_option_type'=>'1',
                  'price_option_section'=>'select dealer',
                  'price_option_value'=>'',
                  'price_option_checked'=>'no',
                  'price_option_name'=>'AEON Mall Jakarta Garden City',
                );
                foreach($price_option_array as $price_option_list){
              ?>
                <?php require ($_SERVER['HY'].'module/price-radiobutton.php')?>
              <?php } ?>
			</div>
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
  var name_variant = $('input[name="variant"]:checked').parent().find('.pod-name').html();
  var value_engine = parseInt($('input[name="your engine"]:checked').val());
  var value_transmission = parseInt($('input[name="transmission"]:checked').val());
  var value_exterior_colour = parseInt($('input[name="exterior colour"]:checked').val());
  var value_interior_colour = parseInt($('input[name="interior colour"]:checked').val());
  var value_genuine_accessories = parseInt($('input[name="genuine accessories"]:checked').val());
  var value_prepaid_servicing = parseInt($('input[name="prepaid servicing"]:checked').val());
  
  var value_total = value_energy_type + value_variant + value_engine + value_transmission + value_exterior_colour + value_interior_colour + value_genuine_accessories + value_prepaid_servicing;
  var value_feature = value_engine + value_transmission + value_exterior_colour + value_interior_colour + value_genuine_accessories + value_prepaid_servicing;
  var change_format_total = value_total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  var change_format_feature = value_feature.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  var change_format_energy = value_energy_type.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  var change_format_variant = value_variant.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
  
  $('.spoc-final-price').html(change_format_total);
  $('.spoc-base-price').html(change_format_energy);
  $('.spoc-variant-price').html(change_format_variant);
  $('.spoc-feature-price').html(change_format_feature);
  $('.spoc-variant-label').html(name_variant);
  
  $('.default-radiobutton-real').click(function(){
    var get_section = $(this).attr('name');
	
	
    if(get_section == 'energy type'){
	  value_energy_type = parseInt($(this).val());
	}
	
    if(get_section == 'variant'){
	  value_variant = parseInt($(this).val());
      name_variant = $(this).parent().find('.pod-name').html();
	}
	
    if(get_section == 'your engine'){
	  value_engine = parseInt($(this).val());
	}
	
    if(get_section == 'transmission'){
	  value_transmission = parseInt($(this).val());
	}
	
    if(get_section == 'exterior colour'){
	  value_exterior_colour = parseInt($(this).val());
	}
	
    if(get_section == 'interior colour'){
	  value_interior_colour = parseInt($(this).val());
	}
	
    if(get_section == 'genuine accessories'){
	  value_genuine_accessories = parseInt($(this).val());
	}
	
    if(get_section == 'prepaid servicing'){
	  value_prepaid_servicing = parseInt($(this).val());
	}
	
    var change_value_total = value_energy_type + value_variant + value_engine + value_transmission + value_exterior_colour + value_interior_colour + value_genuine_accessories + value_prepaid_servicing;
    var change_value_feature = value_engine + value_transmission + value_exterior_colour + value_interior_colour + value_genuine_accessories + value_prepaid_servicing;
    if (!isNaN(change_value_total)){
	  var change_format_total = change_value_total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
      var change_format_feature = change_value_feature.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
      var change_format_energy = value_energy_type.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
      var change_format_variant = value_variant.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	  
      $('.spoc-final-price').text(change_format_total);
      $('.spoc-base-price').html(change_format_energy);
      $('.spoc-variant-price').html(change_format_variant);
      $('.spoc-feature-price').html(change_format_feature);
      $('.spoc-variant-label').html(name_variant);
    } else{
      console.log("Price Invalid");
    }
  });
	
  $('.spoc-final-detail').click(function(){
    $(this).toggleClass('spoc-final-detail-open');
    $(this).parent().find('.spoc-final-list').slideToggle('fast');
  });
	
  $('.spoc-location-field').click(function(){
    $('.spoc-dealer-list').slideDown('fast');
  });
	
});
</script>



<?php require ($_SERVER['HY'].'inc/footer.php')?>

<div class="floating-price">
  <span class="width-max">
    <div class="floating-variant spoc-variant-label">STARGAZER Prime IVT Captain Seat (With EPB)</div>
    <div class="floating-price-label">Price</div>
    <div class="floating-price-detail">Rp.<span class="spoc-final-price">0</span></div>
  </span>
</div>

<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>