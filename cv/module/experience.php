<section class="experience">
<div class="section-sticky">
  <?php $section_title='experience'; require ('cv/module/section-title.php')?>
  
  <ul class="data-list experience-detail">
    <?php foreach($experience_array as $experience_box){ ?>
      <li class="experience-<?php echo($experience_box['experience_label'])?>">
        <div class="experience-label"><?php echo($experience_box['experience_label'])?></div> <div class="experience-date"><?php echo($experience_box['experience_date'])?></div>
        <h3 class="experience-title"><?php echo($experience_box['experience_title'])?></h3>
      </li>
	<?php } ?>
  </ul>
</div>
</section>