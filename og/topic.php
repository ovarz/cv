<?php 
  $menu='Topic';
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



		  <section title="section_name" class="rancak-section rancak-section-box article-list">
		    <?php $section_title='random'; require ($_SERVER['OG'].'template/module/section-title.php')?>
            <div class="article-list-container">
			  <?php for ($i=1; $i<=10; $i++){ ?>
			    <?php $content_type='default'; $article_misc='time'; $article_cate='hide'; $article_desc='show'; $article_thumb='show';
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