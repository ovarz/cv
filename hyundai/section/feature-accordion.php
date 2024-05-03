<div class="fac-image">
  <div class="fac-image-frame flex_ori thumb-loading"?>
    <img alt="Captain Seat" class="lazyload" data-original="img/model-stargazer-captain-seat.jpg" />
  </div>
</div>

<div class="fac-list">
  <?php 
	$feature_accordion_array = array();
	$feature_accordion_array[]=array(
      'feature_accordion_type'=>'open',
      'feature_accordion_name'=>'Captain Seat',
      'feature_accordion_desc'=>"Enjoy maximum comfort inside the equipped New STARGAZER with Captain's Seat and spacious cabin space. Provides comfort extra for activities while in the car.",
      'feature_accordion_content'=>'<img alt="Captain Seat" class="lazyload" data-original="img/model-stargazer-captain-seat.jpg" />',
	);
	$feature_accordion_array[]=array(
      'feature_accordion_type'=>'',
      'feature_accordion_name'=>'Drive Mode',
      'feature_accordion_desc'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non arcu id nunc ullamcorper posuere id ornare mauris. Maecenas nunc tortor, tempor quis nisl at, ultrices condimentum arcu.",
      'feature_accordion_content'=>'<img alt="Sample" class="lazyload" data-original="img/sample/sample-1.jpg" />',
	);
	$feature_accordion_array[]=array(
      'feature_accordion_type'=>'',
      'feature_accordion_name'=>'Lane Keeping Assist',
      'feature_accordion_desc'=>"The front view camera detects a lane (on the roadside) to monitor the vehicle's starting lane position. The system will alert the driver if the vehicle deviates from its route without using the turn signal and automatically steer the steering wheel to keep the vehicle in its lane.",
      'feature_accordion_content'=>'<video title="Lane Keeping Assist" width="1920" height="768" playsinline="true" preload="none" muted="true" loop="loop" autoplay="true" class="lazyload" data-original="img/lane-keeping-assist.mp4">&nbsp;</video>',
	);
	$feature_accordion_array[]=array(
      'feature_accordion_type'=>'',
      'feature_accordion_name'=>'Ergonomically storage areas',
      'feature_accordion_desc'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non arcu id nunc ullamcorper posuere id ornare mauris. Maecenas nunc tortor, tempor quis nisl at, ultrices condimentum arcu.",
      'feature_accordion_content'=>'<img alt="Sample" class="lazyload" data-original="img/sample/sample-3.jpg" />',
	);
	$feature_accordion_array[]=array(
      'feature_accordion_type'=>'',
      'feature_accordion_name'=>'Intelligent Variable Transmission (IVT)',
      'feature_accordion_desc'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non arcu id nunc ullamcorper posuere id ornare mauris. Maecenas nunc tortor, tempor quis nisl at, ultrices condimentum arcu.",
      'feature_accordion_content'=>'<img alt="Sample" class="lazyload" data-original="img/sample/sample-4.jpg" />',
	);
	foreach($feature_accordion_array as $feature_accordion_list){
  ?>
    <div class="fac-row">
      <button title="<?php echo($feature_accordion_list['feature_accordion_name'])?>" aria-content='<?php echo($feature_accordion_list['feature_accordion_content'])?>' 
	  class="fac-button <?php if($feature_accordion_list['feature_accordion_type'] == 'open') { ?>fac-button-open<?php } ?>">
        <div class="fac-button-label"><?php echo($feature_accordion_list['feature_accordion_name'])?></div>
        <div class="fac-button-icon content_center"><?php require ($_SERVER['HY'].'img/icon/down.svg')?></div>
      </button>
      <div class="fac-info" <?php if($feature_accordion_list['feature_accordion_type'] == 'open') { ?>style="display:block;"<?php } ?>>
	    <?php echo($feature_accordion_list['feature_accordion_desc'])?>
	  </div>
    </div>
  <?php } ?>
</div>



<script defer>
  $('.fac-button').click(function(){
   var get_feature_accordion = $(this).attr('aria-content');
	$(this).toggleClass('fac-button-open');
	$(this).parent().find('.fac-info').slideToggle('fast');
	$('.fac-button').not(this).removeClass('fac-button-open');
	$('.fac-button').not(this).parent().find('.fac-info').slideUp('fast');
	$(this).parents().eq(2).find('.fac-image-frame').html(get_feature_accordion);
  });
</script>