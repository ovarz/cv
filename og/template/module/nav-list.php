<div class="nav-link <?php if($menu == $nav_box['nav_title']) { ?>nav-curr<?php } ?> <?php if($submenu == $nav_box['nav_title']) { ?>nav-curr<?php } ?>">
  <a title="<?php echo($nav_box['nav_title'])?>" class="nav-link-label"
  href="<?php echo($nav_box['nav_link'])?>"><?php echo($nav_box['nav_title'])?></a>
  <?php if($nav_box['nav_sub'] != ''){ ?>
    <button title="<?php echo($nav_box['nav_title'])?>" class="nav-link-toggle">
	  <?php require ($_SERVER['OG'].'template/img/icon/dropdown.svg')?>
	</button>
  <?php } ?>
</div>