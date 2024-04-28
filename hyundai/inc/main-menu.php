<div class="header-box <?php echo $device; ?>-only">
  <a title="Menu" class="header-link content_center" href="">
    <div class="header-parent">
      <span class="header-label">Find a Car</span>
      <?php require ($_SERVER['HY'].'img/icon/down.svg')?>
    </div>
  </a>
  <div class="header-sub header-sub-car hide">
    <span class="width-max">
      <div class="hsc-tab desktop-only">
	    <div class="hsc-tab-label">Models</div>
		<?php foreach($models_tab_array as $models_tab_list){ ?>
		  <button title="<?php echo($models_tab_list['models_tab_title'])?>" 
		  class="hsc-tab-button <?php if($models_tab_list['models_tab_curr'] == 'yes') { ?>hsc-tab-curr<?php } ?>">
		    <?php echo($models_tab_list['models_tab_title'])?>
		  </button>
		<?php } ?>
	  </div>
	  <div class="hsc-data">
	    <?php require ($_SERVER['HY'].'module/carmodels-all.php')?>
	  </div>
	</span>
  </div>
</div>

<a title="Home" class="header-link content_center <?php echo $device; ?>-only" href="">
  <span class="header-label">N Brand</span>
</a>

<div class="header-box <?php echo $device; ?>-only">
  <a title="Menu" class="header-link content_center" href="">
    <div class="header-parent">
      <span class="header-label">Owner</span>
      <?php require ($_SERVER['HY'].'img/icon/down.svg')?>
    </div>
  </a>
  <div class="header-sub hide">
    <span class="width-max">
      <?php foreach($owners_array as $owners_list){ ?>
        <a title="<?php echo($owners_list['owners_name'])?>" class="header-link content_center" href="<?php echo($owners_list['owners_link'])?>">
          <span class="header-label"><?php echo($owners_list['owners_name'])?></span>
		  <?php if($owners_list['owners_icon'] == 'yes') { ?><?php require ($_SERVER['HY'].'img/icon/right.svg')?><?php } ?>
        </a>
	  <?php } ?>
	</span>
  </div>
</div>

<div class="header-box <?php echo $device; ?>-only">
  <a title="Menu" class="header-link content_center" href="">
    <div class="header-parent">
      <span class="header-label">Hyundai Story</span>
      <?php require ($_SERVER['HY'].'img/icon/down.svg')?>
    </div>
  </a>
  <div class="header-sub hide">
    <span class="width-max">
      <?php foreach($story_array as $story_list){ ?>
        <a title="<?php echo($story_list['story_name'])?>" class="header-link content_center" href="<?php echo($story_list['story_link'])?>">
          <span class="header-label"><?php echo($story_list['story_name'])?></span>
		  <?php if($story_list['story_icon'] == 'yes') { ?><?php require ($_SERVER['HY'].'img/icon/right.svg')?><?php } ?>
        </a>
	  <?php } ?>
	</span>
  </div>
</div>