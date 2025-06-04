<div class="rancak-column-box rancak-column-small">
  <div class="rcb-container rcb-container-sticky">



    <section title="section_name" class="rancak-section rancak-section-box">
      <?php $section_title='Latest Video'; require ($_SERVER['OG'].'template/module/section-title.php')?>
      <div class="video-playlist flex_ori thumb-loading">
		<iframe width="560" height="315" class="lazyload" data-original="https://www.youtube.com/embed/videoseries?si=ThtycTWYJLLo6-Bs&amp;list=PLX6nLBE9jIqj7J3zhDsCDl0eC2MWhRed5" frameborder="0" allowfullscreen></iframe>
      </div>
    </section>
	
	
	
	<section title="Trending" class="rancak-section rancak-section-box trending-section">
      <?php $section_title='Trending'; require ($_SERVER['OG'].'template/module/section-title.php')?>
	  <div class="trending-list">
	    <?php for ($i=1; $i<=5; $i++){ ?>
          <a title="<?php echo $random_topic[array_rand($random_topic)];?>" class="trending-link" href="topic.php">
            <h2 class="trending-label">#<?php echo $i;?></h2>
            <h2 class="trending-title"><?php echo $random_topic[array_rand($random_topic)];?></h2>
          </a>
		<?php } ?>
	  </div>
	</section>



    <?php require ($_SERVER['OG'].'template/iklan/iklan-retangle.php')?>
	
	
	
	<section title="Instagram" class="rancak-section rancak-section-box embed-socmed">
      <?php $section_title='Instagram'; require ($_SERVER['OG'].'template/module/section-title.php')?>
	  <div class="embed-socmed-container content_center">
        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/otogearscom/" style="width:100%; min-width:299px; max-width:300px;" data-instgrm-version="14"></blockquote>
        <script async rancak-hold="//www.instagram.com/embed.js"></script>
	  </div>
	</section>
	
	
	
	<section title="Tiktok" class="rancak-section rancak-section-box embed-socmed">
      <?php $section_title='Tiktok'; require ($_SERVER['OG'].'template/module/section-title.php')?>
	  <div class="embed-socmed-container content_center">
        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@otogearscom" data-unique-id="otogearscom" data-embed-type="creator"> 
          <section><a target="_blank" href="https://www.tiktok.com/@otogearscom?refer=creator_embed">@otogearscom</a></section> 
        </blockquote>
        <script async rancak-hold="https://www.tiktok.com/embed.js"></script>
	  </div>
	</section>



    <?php require ($_SERVER['OG'].'template/iklan/iklan-retangle.php')?>



  </div>
</div>