<section class="portfolio">
  <?php $section_title='portfolio'; require ('cv/module/section-title.php')?>
  
  <div class="portfolio-list">
    <?php 
      foreach($porto_array as $porto_list){ 
	?>
    <a rel="noreferrer" href="<?php echo($porto_list['porto_link'])?>" class="portfolio-box" target="_blank">
      <span>
        <div class="portfolio-image">
          <div class="portfolio-image-frame">
            <amp-img src="<?php echo $base?>/img/portfolio-<?php echo($porto_list['porto_id'])?>.png" layout="fill" alt="<?php echo($porto_list['porto_name'])?>"></amp-img>
          </div>
        </div>
        <h5 class="portfolio-name"><?php echo($porto_list['porto_name'])?></h5>
        <div class="portfolio-button">
          <div>
            <?php if($web_type == 'default') { ?>Visit Site<?php } ?> 
            <?php if($web_type == 'print') { ?><?php echo($porto_list['porto_domain'])?><?php } ?> 
            &raquo;
          </div>
        </div>
      </span>
    </a>
	<?php } ?>
  </div>
  <?php if($web_type == 'default') { ?>
    <div class="portfolio-more">
      <a rel="noreferrer" href="https://www.linkedin.com/in/aufar/" class="portfolio-more-button" target="_blank">View More &raquo;</a>
    </div>
  <?php } ?>
</section>