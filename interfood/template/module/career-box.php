<div class="career-box">
  <div class="career-status">
    <div class="career-status-box career-status-<?php echo $career_status;?>">
      <span class="text-id">
	    <?php if($career_status == 'open') { ?>Dibuka<?php } ?>
	    <?php if($career_status == 'close') { ?>Ditutup<?php } ?>
	  </span>
      <span class="text-en">
	    <?php if($career_status == 'open') { ?>Open<?php } ?>
	    <?php if($career_status == 'close') { ?>Close<?php } ?>
	  </span>
    </div>
  </div>
  <button title="" class="career-title">
    <h2>
      <span class="text-id">Senior Associate Business Operation Manager - Quality Assurance</span>
      <span class="text-en">Senior Associate Business Operation Manager - Quality Assurance</span>
    </h2>
  </button>
  <div class="career-misc">
    <div class="career-type">
      <div class="career-icon"><?php require ($_SERVER['IF'].'template/img/icon/location.svg')?></div>
      <div class="career-label">
        <span class="text-id">Magang</span>
        <span class="text-en">Internship</span>
      </div>
    </div>
    <div class="career-location">
      <div class="career-icon"><?php require ($_SERVER['IF'].'template/img/icon/location.svg')?></div>
      <div class="career-label">Jakarta</div>
    </div>
  </div>
  <button title="" class="more-link">
    <div class="more-label">
      <span class="text-id">Selengkapnya</span>
      <span class="text-en">Learn More</span>
    </div>
    <div class="more-icon content-center">
      <?php require ($_SERVER['IF'].'template/img/icon/more.svg')?>  
    </div>
  </button>
</div>