<section class="contact">
  <?php $section_title='contact'; require ('cv/module/section-title.php')?>
  
  <div class="contact-list">
    <?php foreach($contact_array as $contact_box){ ?>
      <a rel="noreferrer" href="<?php echo($contact_box['contact_link'])?>" class="contact-list-box contact-list-<?php echo($contact_box['contact_icon'])?>" target="_blank">
        <div class="clb-icon">
		  <?php require ('cv/img/icon/'.$contact_box['contact_icon'].'.svg')?>
          <div class="clb-arrow">
            <?php require ('cv/img/icon/contact-arrow.svg')?>
          </div>
        </div>
        <div class="clb-info"><span><?php echo($contact_box['contact_data'])?></span></div>
      </a>
	<?php } ?>
  </div>
</section>