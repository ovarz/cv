<div class="hero-image">
  <div class="hero-image-frame flex_ori thumb-loading">
    <?php if($photo_number == 'video'){ ?>
      <iframe width="560" height="315" class="lazyload" 
	  data-original="https://www.youtube.com/embed/ozLXQ6pOkq8?si=L2RXU6KIh2XTSpdT&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
	<?php } ?>
    <?php if($photo_number == '1'){ ?>
      <picture>
        <source type="image/webp" srcset="template/img/sample/sample-1.webp"/>
        <source type="image/jpeg" srcset="template/img/sample/sample-1.jpg"/>
        <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" src="template/img/sample/sample-1.jpg"/>
      </picture>
	<?php } ?>
    <?php if($photo_number != '1' && $photo_number != 'video'){ ?>
      <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" 
	  data-original="template/img/sample/sample-<?php echo rand(1,20); ?>.jpg"/>
	<?php } ?>
  </div>
  <div class="hero-image-info">
    <div class="hero-image-caption"><?php echo $random_desc[array_rand($random_desc)];?></div>
    <div class="hero-image-origin">Sumber : <?php echo $random_author[array_rand($random_author)];?></div>
  </div>
</div>