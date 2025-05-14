<article class="article-box">
  <?php if($article_thumb == 'yes'){ ?>
    <div class="article-small">
      <a title="<?php echo $random_title[array_rand($random_title)];?>" class="article-thumb flex_ori thumb-loading" href="detail.php">
        <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" 
		data-original="template/img/sample/sample-<?php echo rand(1,20); ?>.jpg">
      </a>
    </div>
  <?php } ?>
  <div class="article-big">
    <a title="<?php echo $random_title[array_rand($random_title)];?>" class="article-title" href="detail.php">
      <h2 class="article-title-detail"><?php echo $random_title[array_rand($random_title)];?></h2>
    </a>
	<div class="article-misc">
      <a title="<?php echo $random_kanal[array_rand($random_kanal)];?>" class="article-kanal" href="kanal.php">
        <h3 class="article-kanal-detail"><?php echo $random_kanal[array_rand($random_kanal)];?></h2>
      </a>
      <h4 class="article-other article-<?php echo $article_misc;?>">
        <?php if($article_misc == 'time'){ ?>4 jam lalu<?php } ?>
        <?php if($article_misc == 'date'){ ?>30 Sep 2025<?php } ?>
	  </h4>
	</div>
	<?php if($article_desc == 'yes'){ ?>
	  <h5 class="article-desc desktop-only"><?php echo $random_desc[array_rand($random_desc)];?></h5>
	<?php } ?>
  </div>
</article>