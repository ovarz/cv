<div class="nav-link <?php if($nav == $nav_box['nav_title']) { ?>nav-curr<?php } ?>">
  <a title="<?php echo($nav_box['nav_title'])?>" class="nav-link-icon"
  href="<?php echo($nav_box['nav_link'])?>.php"><?php require ($_SERVER['FIERSA'].'img/icon/menu-'.$nav_box['nav_icon'].'.svg')?></a>
  <a title="<?php echo($nav_box['nav_title'])?>" class="nav-link-label"
  href="<?php echo($nav_box['nav_link'])?>.php"><?php echo($nav_box['nav_title'])?></a>
  <?php if($nav_box['nav_sub'] != ''){ ?>
    <button title="<?php echo($nav_box['nav_title'])?>" class="nav-link-toggle <?php if($nav == $nav_box['nav_title'] || $opensub == 'yes') { ?>nav-link-open<?php } ?>">
	  <?php require ($_SERVER['FIERSA'].'img/icon/dropdown.svg')?>
	</button>
  <?php } ?>
</div>