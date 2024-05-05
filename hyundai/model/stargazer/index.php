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



  <section title="Best Deals For You" id="promo" class="rancak-section section-best-deal" style="margin-top:var(--size-5);">
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



  <section title="The new star of the family" id="key-features" class="rancak-section section-feature-accordion">
    <span class="width-max">
	  <div class="section-title">
        <div class="section-title-primary">The new star of the family</div>
        <div class="section-title-secondary">It's time to enjoy a new era of MPV with New STARGAZER, mobility innovation for every quality trip. This is a new standard for family cars that provides maximum comfort and classy features, as well as providing ample space for you and your loved ones to be together.</div>
      </div>
	  <div class="feature-accordion-container">
        <?php require ($_SERVER['HY'].'section/feature-accordion.php')?>
      </div>
	</span>
  </section>



  <section title="Discover your STARGAZER" id="design" class="rancak-section section-discover-model">
    <span class="width-max">
	  <div class="section-title">
        <div class="section-title-primary">Discover your STARGAZER</div>
        <div class="section-title-secondary">Compare and contrast the specifications of each variant in the Santa Fe range to find the one that will suit you and your household best..</div>
      </div>
	  <div class="discover-model-option">
	    <span class="width-max">
	      <?php require ($_SERVER['HY'].'section/discover-model-option.php')?>
		</span>
	  </div>
	  <div class="discover-model-container">
        <?php require ($_SERVER['HY'].'section/discover-model-slide.php')?>
      </div>
	</span>
  </section>



  <section title="Why not see it for yourself?" class="rancak-section gridbox-b">
    <span class="width-max">
	  <div class="gridbox-b-container">
        <?php 
          $contentbox_array = array();
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'blue',
            'contentbox_img'=>'',
            'contentbox_title'=>"Why not see it for yourself?",
            'contentbox_button'=>'yes',
            'contentbox_button_label'=>'Pelajari lebih lanjut',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'sample-product-popup',
            'contentbox_type'=>'image',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'',
            'contentbox_img'=>'wireless-smartphone-charger',
            'contentbox_title'=>'Wireless Smartphone Charger',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'sample-product-popup',
            'contentbox_type'=>'image',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'',
            'contentbox_img'=>'led-headlamp',
            'contentbox_title'=>'LED Headlamp',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'sample-product-popup',
            'contentbox_type'=>'image',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'',
            'contentbox_img'=>'led-high-mount-stop-lamps-with-rear-spoiler',
            'contentbox_title'=>'LED High Mount Stop Lamps with Rear Spoiler',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'sample-product-popup',
            'contentbox_type'=>'image',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'',
            'contentbox_img'=>'full-digital-cluster-with-4.2-tft-lcd',
            'contentbox_title'=>'Full Digital Cluster with 4.2” TFT LCD',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          foreach($contentbox_array as $contentbox_list){
        ?>
          <?php require ($_SERVER['HY'].'module/box-b.php')?>
        <?php } ?>
	  </div>
	</span>
  </section>



  <section title="Hyundai SmartSense" id="safety" class="rancak-section section-hyundai-smartsense-slide">
    <span class="width-max">
      <?php require ($_SERVER['HY'].'section/smartsense-slide.php')?>
	</span>
  </section>



  <section title="Accessorise your lifestyle" id="accessories" class="rancak-section gridbox-b">
    <span class="width-max">
	  <div class="section-title">
        <div class="section-title-primary">Accessorise your lifestyle</div>
      </div>
	  <div class="gridbox-b-container">
        <?php 
          $contentbox_array = array();
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'blue',
            'contentbox_img'=>'',
            'contentbox_title'=>"STARGAZER Genuine Accessories",
            'contentbox_button'=>'yes',
            'contentbox_button_label'=>'Pelajari lebih lanjut',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'sample-product-popup',
            'contentbox_type'=>'image',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'',
            'contentbox_img'=>'hidden-tray',
            'contentbox_title'=>'Hidden Tray',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'sample-product-popup',
            'contentbox_type'=>'image',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'',
            'contentbox_img'=>'center-console-armrest',
            'contentbox_title'=>'Center Console Armrest',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'sample-product-popup',
            'contentbox_type'=>'image',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'',
            'contentbox_img'=>'center-console-rear-storage-with-usb-port',
            'contentbox_title'=>'Center Console Rear Storage with USB Port',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'sample-product-popup',
            'contentbox_type'=>'image',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'',
            'contentbox_img'=>'seat-back-table',
            'contentbox_title'=>'Seat Back Table',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          foreach($contentbox_array as $contentbox_list){
        ?>
          <?php require ($_SERVER['HY'].'module/box-b.php')?>
        <?php } ?>
	  </div>
	</span>
  </section>



  <section title="Ready to take the next step?" id="specs" class="rancak-section gridbox-b">
    <span class="width-max">
	  <div class="section-title">
        <div class="section-title-primary">Ready to take the next step?</div>
      </div>
	  <div class="gridbox-b-container">
        <?php 
          $contentbox_array = array();
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'blue',
            'contentbox_img'=>'',
            'contentbox_title'=>"Get into the driver's seat.",
            'contentbox_button'=>'yes',
            'contentbox_button_label'=>'Pelajari lebih lanjut',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'white',
            'contentbox_img'=>'find-a-dealer',
            'contentbox_title'=>'Find a dealer',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'blue',
            'contentbox_img'=>'talk-to-an-expert',
            'contentbox_title'=>'Talk to an expert.',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'blue',
            'contentbox_img'=>'',
            'contentbox_title'=>'Pricing your dream car.',
            'contentbox_button'=>'yes',
            'contentbox_button_label'=>'Pelajari lebih lanjut',
          );
          $contentbox_array[]=array(
            'contentbox_link'=>'model/stargazer',
            'contentbox_type'=>'color',
            'contentbox_merge'=>'no',
            'contentbox_color'=>'white',
            'contentbox_img'=>'download-a-brochure',
            'contentbox_title'=>'Download a brochure.',
            'contentbox_button'=>'no',
            'contentbox_button_label'=>'',
          );
          foreach($contentbox_array as $contentbox_list){
        ?>
          <?php require ($_SERVER['HY'].'module/box-b.php')?>
        <?php } ?>
	  </div>
	</span>
  </section>
  
  
  
  
  
</div>



<div class="rancak-popup rancak-popup-box-b" aria-overlay="box-b-popup">
  <div class="rancak-popup-overlay"></div>
  <div class="rancak-popup-container content_center">
    <div class="rancak-popup-box">
	  <div class="popup-box-b-content">
	    <div class="pbbc-left">
		  <div class="pbbc-frame flex_ori thumb-loading">
		    <img alt="Ambient Mood Lighting" class="lazyload" data-original="img/hidden-tray.jpg" />
		  </div>
		</div>
	    <div class="pbbc-right">
		  <div class="pbbc-row">
		    <div class="pbbc-subtitle">Feature</div>
		    <h2 class="pbbc-title">Ambient Mood Lighting</h2>
		  </div>
		  <div class="pbbc-row">
		    <h3 class="pbbc-price">Rp.8.000.000</h3>
		    <div class="pbbc-note">Price includes GST and fitment.</div>
		  </div>
		  <div class="pbbc-row">
		    <div class="pbbc-desc">Compact and lightweight for daily use. Features extendable wheel holders and longer wheel straps with quick release buckles for easy loading. Total max load of 46kg and 25kg max per bike limit.</div>
		  </div>
		  <div class="pbbc-row">
		    <div class="pbbc-partnumber">Part Number: <span>C0A13APH40</span></div>
		  </div>
		  <div class="pbbc-row">
		    <div class="pbbc-disclaimer">
			  Disclaimer: <br/>
			  Requires fitment of Hyundai Genuine Tow Bar kit. Thule® is a registered trade mark of Thule® Sweden AB.
            </div>
		  </div>
		  <div class="pbbc-row">
		    <a title="See more accessories" class="pbbc-link" href="">
		      <div class="pbbc-link-label">See more accessories</div>
		      <div class="pbbc-link-icon content_center"><?php require ($_SERVER['HY'].'img/icon/right.svg')?></div>
            </a>
		  </div>
		</div>
	  </div>
	  <button title="Close Popup" class="rancak-popup-close"><?php require ($_SERVER['HY'].'img/icon/close.svg')?></button>
	</div>
  </div>
</div>



<?php require ($_SERVER['HY'].'inc/footer.php')?>
<?php require ($_SERVER['HY'].'inc/base-bottom.php')?>