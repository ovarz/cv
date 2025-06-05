<a title="<?php echo $random_title[array_rand($random_title)];?>" class="article-thumb flex_ori thumb-loading" href="video-detail.php">
  <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" 
  data-original="<?php echo $random_video_thumb[array_rand($random_video_thumb)];?>">
  <div class="article-thumb-icon content_center">
    <?php require ($_SERVER['OG'].'template/img/icon/play.svg')?>
  </div>
</a>