<?php 
  $page='dashboard';
  $nav='Information';
  $opensub='';
  $slideshow='yes';
  require ('inc/base.php')
?>
<?php require ($_SERVER['FIERSA'].'inc/sample.php')?>
<?php require ($_SERVER['FIERSA'].'inc/meta.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<?php require ($_SERVER['FIERSA'].'inc/header.php')?>
<?php require ($_SERVER['FIERSA'].'inc/nav.php')?>
<div class="rancak-container">



    <section class="main-carousel">
	  <div class="main-carousel-container">
        <?php 
          $slidebox_array = array();
          $slidebox_array[]=array(
            'slidebox_title'=>'',
            'slidebox_img'=>'1',
            'slidebox_link'=>'',
          );
          $slidebox_array[]=array(
            'slidebox_title'=>'',
            'slidebox_img'=>'2',
            'slidebox_link'=>'',
          );
          $slidebox_array[]=array(
            'slidebox_title'=>'',
            'slidebox_img'=>'3',
            'slidebox_link'=>'',
          );
          $slidebox_array[]=array(
            'slidebox_title'=>'',
            'slidebox_img'=>'4',
            'slidebox_link'=>'',
          );
          $slidebox_array[]=array(
            'slidebox_title'=>'',
            'slidebox_img'=>'5',
            'slidebox_link'=>'',
          );
          foreach($slidebox_array as $slidebox_list){
        ?>
          <div class="main-slide">
		    <a title="<?php echo($slidebox_list['slidebox_title'])?>" class="main-slide-thumb rancak-lazy thumb-loading"
			href="<?php echo($slidebox_list['slidebox_link'])?>" target="_blank">
			  <img class="lazyload" data-original="img/sample/slide-<?php echo($slidebox_list['slidebox_img'])?>.jpg" />
			</a>
          </div>
		<?php } ?>
	  </div>

      <div class="main-carousel-controls" aria-label="Carousel Navigation" tabindex="0">
        <button class="slide-button slide-button-prev" aria-controls="customize" tabindex="-1" data-controls="prev">
          <?php require ($_SERVER['FIERSA'].'img/icon/left.svg')?>
        </button>
        <button class="slide-button slide-button-next" aria-controls="customize" tabindex="-1" data-controls="next">
          <?php require ($_SERVER['FIERSA'].'img/icon/right.svg')?>
        </button>
      </div>
	  
      <script defer>
        var main_carousel = tns({
          container:'.main-carousel-container',
          speed:610,
          items:1,
          gutter:0, 
          edgePadding:0,
          controls:true,
          nav:true,
          navPosition:'bottom',
          mouseDrag:true,
          autoplay:true,
		  controlsContainer:'.main-carousel-controls',
        });
      </script>
	</section>



</div>
<?php require ($_SERVER['FIERSA'].'inc/footer.php')?>