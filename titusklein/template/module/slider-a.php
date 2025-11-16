<link rel="stylesheet" type="text/css" href="template/css/tiny-slider.css"/>
<script src="template/js/tiny-slider.js"></script>
<div class="site-container">
  <div class="slider-A-display">
    <div class="slider-A-container">
      <?php foreach($slider_A_array as $slider_A_box){ ?>
        <div class="slider-A-column">
          <div class="slider-A-box">
            <div class="slider-A-thumb img-frame thumb-loading">
              <img title="" class="lazyload" data-original="template/img/<?php echo($slider_A_box['slider_A_image'])?>">
            </div>
			<div class="slider-A-info">
			  <h2 class="slider-A-name"><?php echo($slider_A_box['slider_A_name'])?></h2>
			  <h3 class="slider-A-title"><?php echo($slider_A_box['slider_A_title'])?></h3>
			</div>
			<h4 class="slider-A-desc"><?php echo($slider_A_box['slider_A_desc'])?></h4>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<script>
  var slider_A = tns({
    container:'.slider-A-container',
    speed:333,
    items:1,
    gutter:21, 
    edgePadding:0,
    mouseDrag:true,
    autoplay:true,
    responsive:{
      568:{
        items:2
      },
      768:{
        items:3
      },
      1280:{
        items:4
      }
    },
  });
</script> 