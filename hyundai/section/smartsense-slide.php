<div class="section-title">
  <div class="section-title-primary">Hyundai SmartSense</div>
</div>

<div class="slideshow-hyundai-smartsense">

  <button class="slide-button slide-button-prev" aria-controls="customize" tabindex="-1" data-controls="prev">
    <?php require ($_SERVER['HY'].'img/icon/left.svg')?>
  </button>

  <button class="slide-button slide-button-next" aria-controls="customize" tabindex="-1" data-controls="next">
    <?php require ($_SERVER['HY'].'img/icon/right.svg')?>
  </button>

  <div class="slideshow-hyundai-smartsense-container">
    <?php 
      $smartsense_array = array();
      $smartsense_array[]=array(
        'smartsense_img'=>'fca',
        'smartsense_title'=>'Forward Collision-avoidance Assist (FCA)',
        'smartsense_desc'=>"This feature warns the driver when the system detects a risk of collision from the front, such as with a pedestrian or with a vehicle that suddenly slows down or stops. If the risk of the crash continues to increase after a warning, the system will automatically assist by applying emergency braking.",
      );
      $smartsense_array[]=array(
        'smartsense_img'=>'lka',
        'smartsense_title'=>'Lane Keeping Assist (LKA)',
        'smartsense_desc'=>"The front view camera detects lane markings (by the roadside) to monitor the vehicle's position in the starting lane. The system will warn the driver if the car leaves the road without using the turn signal and will automatically help steer the steering wheel to prevent the vehicle from diverting from the proper lane.",
      );
      $smartsense_array[]=array(
        'smartsense_img'=>'rvm',
        'smartsense_title'=>'Rear View Monitor (RVM)*',
        'smartsense_desc'=>"It is safer when reversing or parking. The rear camera will monitor the back area of the car.",
      );
      $smartsense_array[]=array(
        'smartsense_img'=>'hac',
        'smartsense_title'=>'Hill-start Assist Control (HAC)',
        'smartsense_desc'=>"When starting from a stop on an incline, the HAC prevents the accidental rollback after the brake pedal is released.",
      );
      $smartsense_array[]=array(
        'smartsense_img'=>'rcaa',
        'smartsense_title'=>'Rear Cross-traffic Collision-avoidance Assist (RCCA)',
        'smartsense_desc'=>"The RCCA warns if a vehicle in the rear lane is approaching while reversing and applies emergency braking if necessary.",
      );
      foreach($smartsense_array as $smartsense_list){
    ?>
      <div class="shsc-box">
		<div class="shsc-frame flex_ori thumb-loading">
		  <img alt="<?php echo($smartsense_list['smartsense_title'])?>" class="lazyload" data-original="img/smartsense-<?php echo($smartsense_list['smartsense_img'])?>.jpg" />
		</div>
		<div class="shsc-info">
		  <h2 class="shsc-title"><?php echo($smartsense_list['smartsense_title'])?></h2>
		  <h3 class="shsc-desc"><?php echo($smartsense_list['smartsense_desc'])?></h3>
		</div>
      </div>
    <?php } ?>
  </div>

</div>





<script defer>
  var slider_our_models = tns({
	container:'.slideshow-hyundai-smartsense-container',
	speed:610,
	items:1,
	gutter:21, 
	edgePadding:0,
	controls:true,
	nav:true,
	navPosition:'bottom',
	mouseDrag:true,
	autoplay:false,
	center:true,
	autoplayTimeout:3000,
	controlsContainer:'.slideshow-hyundai-smartsense',
    responsive:{
      "640": {
        "items":2
      },
      "1024": {
        "items":3
      }
    },
  });
</script>