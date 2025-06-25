<section class="headline">
  <div class="headline-image">
    <div class="headline-image-frame">
      <amp-img alt="<?php echo $name?>" width="210" height="210" layout="fill" src="<?php echo $base?>/img/ovarz.webp?<?php echo $version?>">
        <amp-img alt="<?php echo $name?>" fallback width="210" height="210" layout="fill" src="<?php echo $base?>/img/ovarz.jpg?<?php echo $version?>"></amp-img>
      </amp-img>
    </div>
  </div>
  <div class="headline-name">
    <h1><?php echo $name?></h1>
  </div>
  <div class="headline-title">
    <h2><?php echo $intro?></h2>
  </div>
  
  <?php if($web_type == 'default') { ?>
    <a title="Download CV" class="download-cv" href="<?php echo $base?>/img/CV-AufarMahardi.pdf" target="_blank">
      <?php require ('cv/img/icon/pdf.svg')?>
      <div class="download-cv-label">Download CV</div>
    </a>
  <?php } ?>
</section>