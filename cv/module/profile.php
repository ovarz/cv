<section class="profile">
<div class="section-sticky">
  <?php $section_title='profile'; require ('cv/module/section-title.php')?>
  
  <ul class="data-list profile-detail">
    <?php foreach($profile_array as $profile_box){ ?>
      <li>
        <div class="profile-label"><?php echo($profile_box['profile_label'])?></div> 
        <div class="profile-data"><?php echo($profile_box['profile_data'])?></div>
      </li>
	<?php } ?>
  </ul>
</div>

<?php if($web_type == 'print') { ?>
  <?php require ('cv/module/contact.php')?>
<?php } ?>
</section>