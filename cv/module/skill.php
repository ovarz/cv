<section class="skill">
<div class="section-sticky">
  <?php $section_title='skill'; require ('cv/module/section-title.php')?>
  
  <ul class="data-list skill-detail">
    <?php foreach($skill_array as $skill_box){ ?>
      <li>
        <h4 class="skill-label">
          <b><?php echo($skill_box['skill_label'])?></b> <span>[<?php echo($skill_box['skill_score'])?>%]</span>
        </h4> 
        <div class="skill-progress">
          <div class="skill-bar loading-bar-line" style="width:<?php echo($skill_box['skill_score'])?>%"></div>
        </div>
      </li>
	<?php } ?>
  </ul>
</div>
</section>