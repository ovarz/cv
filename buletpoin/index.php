<?php 
  $page='default';
  $nav='Home';
  require ('inc/base.php')
?>
<?php require ($_SERVER['BP'].'inc/sample.php')?>
<?php require ($_SERVER['BP'].'inc/meta.php')?>
<?php require ($_SERVER['BP'].'inc/header.php')?>
<h1 class="hide"><?php echo $site_title; ?></h1>
<div class="rancak-container">





  <div class="rancak-prime">
    <section title="Daftar Artikel" class="rancak-section">
	
	  <?php foreach($article_array as $article_row => $article_box){ ?>
        <?php require ($_SERVER['BP'].'module/article-default.php')?>
	  <?php } ?>
	  <!--
	  <div class="rancak-article-iklan">
	    <div class="rai-slot rai-300x250 content_center">
		  <div class="rai-frame">
            <iframe title="iklan" class="lazyload" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" 
		    data-original="../vivacoid/iklan/inc/retangle.php" width="300" height="250"></iframe>
		  </div>
	    </div>
	    <div class="rai-slot rai-300x250 content_center">
		  <div class="rai-frame">
            <iframe title="iklan" class="lazyload" scrolling="no" frameborder="0" marginheight="0" marginwidth="0" 
		    data-original="../vivacoid/iklan/inc/retangle.php" width="300" height="250"></iframe>
		  </div>
	    </div>
	  </div>
	  -->
	  <?php foreach($article_array as $article_row => $article_box){ ?>
        <?php require ($_SERVER['BP'].'module/article-default.php')?>
	  <?php } ?>
	  <div class="load-more-article content_center">
	    <div class="lma-button">
		  <?php require ($_SERVER['BP'].'img/bp-icon-animate.svg')?>
		  <div class="lma-label">Muat artikel berikutnya</div>
		</div>
		<!--
		<button title="Share" class="btn lma-button">
		  ?php require ($_SERVER['BP'].'img/icon/loadmore.svg')?>
		  <div class="lma-label">Muat artikel berikutnya</div>
		</button>
		-->
	  </div>
	  
	</section>
  </div>
  
  
  
  
  
</div>
<?php require ($_SERVER['BP'].'inc/footer.php')?>
<?php require ($_SERVER['BP'].'inc/base-bottom.php')?>