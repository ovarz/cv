<div class="section-title">
  <div class="section-title-primary">News Update</div>
</div>

<div class="slideshow-news-update">

  <button class="slide-button slide-button-prev" aria-controls="customize" tabindex="-1" data-controls="prev">
    <?php require ($_SERVER['HY'].'img/icon/prev-arrow.svg')?>
  </button>

  <button class="slide-button slide-button-next" aria-controls="customize" tabindex="-1" data-controls="next">
    <?php require ($_SERVER['HY'].'img/icon/next-arrow.svg')?>
  </button>

  <div class="slideshow-news-update-container">
    <?php 
      $newsupdate_array = array();
      $newsupdate_array[]=array(
        'newsupdate_img'=>'sample/sample-1',
        'newsupdate_title'=>'Hyundai IONIQ 5 N Charges On With  2024 World Performance Car Award Victory',
        'newsupdate_link'=>'',
      );
      $newsupdate_array[]=array(
        'newsupdate_img'=>'sample/sample-2',
        'newsupdate_title'=>'Hyundai IONIQ 5 N Charges On With  2024 World Performance Car Award Victory',
        'newsupdate_link'=>'',
      );
      $newsupdate_array[]=array(
        'newsupdate_img'=>'sample/sample-3',
        'newsupdate_title'=>'Hyundai IONIQ 5 N Charges On With  2024 World Performance Car Award Victory',
        'newsupdate_link'=>'',
      );
      $newsupdate_array[]=array(
        'newsupdate_img'=>'sample/sample-4',
        'newsupdate_title'=>'Hyundai IONIQ 5 N Charges On With  2024 World Performance Car Award Victory',
        'newsupdate_link'=>'',
      );
      $newsupdate_array[]=array(
        'newsupdate_img'=>'sample/sample-5',
        'newsupdate_title'=>'Hyundai IONIQ 5 N Charges On With  2024 World Performance Car Award Victory',
        'newsupdate_link'=>'',
      );
      foreach($newsupdate_array as $newsupdate_list){
    ?>
      <a title="<?php echo($newsupdate_list['newsupdate_title'])?>" class="snuc-box" href="<?php echo($newsupdate_list['newsupdate_link'])?>">
		<div class="snuc-frame flex_ori thumb-loading">
		  <img alt="img_title" class="lazyload" data-original="img/<?php echo($newsupdate_list['newsupdate_img'])?>.jpg" />
		</div>
		<div class="snuc-info">
		  <h2 class="snuc-title"><?php echo($newsupdate_list['newsupdate_title'])?></h2>
		</div>
      </a>
    <?php } ?>
  </div>

</div>





<script defer>
  var slider_our_models = tns({
	container:'.slideshow-news-update-container',
	speed:610,
	items:1,
	gutter:5, 
	edgePadding:0,
	controls:true,
	nav:false,
	mouseDrag:true,
	autoplay:true,
	autoplayTimeout:3000,
	controlsContainer:'.slideshow-news-update',
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