<nav class="<?php echo $nav_device;?>-only">
  <ul class="nav-list">
    <?php foreach($nav_array as $nav_row => $nav_box){ ?>
	  <li class="nav-box">
        <?php require ($_SERVER['IF'].'template/module/nav-list.php')?>
		<?php if($nav_box['nav_sub'] != '') { ?>
          <ul class="nav-sub">
            <?php foreach($nav_box['nav_sub'] as $nav_box){ ?>
              <li class="nav-box"><?php require ($_SERVER['IF'].'template/module/nav-list.php')?></li>
            <?php } ?>
          </ul>
		<?php } ?>
	  </li>
    <?php } ?>
  </ul>
</nav>