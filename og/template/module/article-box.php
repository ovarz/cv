<article class="article-box article-box-<?php echo $content_type;?>">
  <?php if($article_thumb == 'show'){ ?>
    <div class="article-small">
      <a title="<?php echo $random_title[array_rand($random_title)];?>" class="article-thumb flex_ori thumb-loading" 
	    <?php if($content_type == 'default'){ ?>href="detail.php"<?php } ?>
		<?php if($content_type == 'video'){ ?>href="video-detail.php"<?php } ?>
	  >
        <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" 
		data-original="template/img/sample/sample-<?php echo rand(1,20); ?>.jpg">
		<?php if($content_type == 'video'){ ?>
          <div class="article-thumb-icon content_center">
            <?php require ($_SERVER['OG'].'template/img/icon/play.svg')?>
          </div>
		<?php } ?>
      </a>
    </div>
  <?php } ?>
  <div class="article-big">
    <a title="<?php echo $random_title[array_rand($random_title)];?>" class="article-title"
      <?php if($content_type == 'default'){ ?>href="detail.php"<?php } ?>
      <?php if($content_type == 'video'){ ?>href="video-detail.php"<?php } ?>
	>
      <h2 class="article-title-detail"><?php echo $random_title[array_rand($random_title)];?></h2>
    </a>
	<div class="article-misc">
	  <?php if($article_cate == 'show'){ ?>
        <a title="<?php echo $random_cate[array_rand($random_cate)];?>" class="article-cate" href="subdomain.php">
          <h3 class="article-cate-detail"><?php echo $random_cate[array_rand($random_cate)];?></h3>
        </a>
	  <?php } ?>
      <h4 class="article-other article-<?php echo $article_misc;?>">
        <?php if($article_misc == 'time'){ ?>4 jam lalu<?php } ?>
        <?php if($article_misc == 'date'){ ?>30 Sep 2025<?php } ?>
	  </h4>
	</div>
	<?php if($article_desc == 'show'){ ?>
	  <h5 class="article-desc desktop-only"><?php echo $random_desc[array_rand($random_desc)];?></h5>
	<?php } ?>
  </div>
</article>