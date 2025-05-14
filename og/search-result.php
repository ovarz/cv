<?php 
  $menu='Mobil';
  $submenu='';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['OG'].'template/inc/sample.php')?>
<?php require ($_SERVER['OG'].'template/inc/meta.php')?>
<?php require ($_SERVER['OG'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  <?php $skinads='left';  require ($_SERVER['OG'].'template/iklan/iklan-skin.php')?>
  <div class="rancak-container">
	<?php require ($_SERVER['OG'].'template/iklan/iklan-leaderboard.php')?>
	<?php require ($_SERVER['OG'].'template/iklan/iklan-mobile-top.php')?>
	<div class="rancak-column">
	  <div class="rancak-column-box rancak-column-big">
	    <div class="rcb-container">



		  <section title="section_name" class="rancak-section rancak-section-box">
            <?php require ($_SERVER['OG'].'template/module/search-box.php')?>
			<div class="search-result">
			  <div class="search-result-label">Hasil pencarian:</div>
			  <h2 class="search-result-info"><?php echo $random_cate[array_rand($random_cate)];?></h2>
			</div>
          </section>



		  <section title="section_name" class="rancak-section rancak-section-box article-list">
            <div class="article-list-container">
			  <?php for ($i=1; $i<=10; $i++){ ?>
			    <?php $article_misc='time'; $article_cate='hide'; $article_desc='show'; $article_thumb='show';
				require ($_SERVER['OG'].'template/module/article-box.php')?>
			  <?php } ?>
			</div>
		    <?php require ($_SERVER['OG'].'template/iklan/iklan-retangle.php')?>
			<?php require ($_SERVER['OG'].'template/module/loadmore.php')?>
          </section>
	  
	  
	  
	    </div>
	  </div>
	  <?php require ($_SERVER['OG'].'template/inc/sidebar.php')?>
	</div>
  </div>
  <?php $skinads='right';  require ($_SERVER['OG'].'template/iklan/iklan-skin.php')?>
</div>
<?php require ($_SERVER['OG'].'template/inc/footer.php')?>
<?php require ($_SERVER['OG'].'template/inc/base-bottom.php')?>