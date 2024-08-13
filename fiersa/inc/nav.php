<nav>
  <a title="Back to home" class="main-logo rancak-lazy thumb-loading" href="information.php">
    <img class="lazyload" src="img/logo-color.png" />
  </a>
  
  <ul class="nav-list">
    <?php foreach($nav_array as $nav_row => $nav_box){ ?>
	  <li>
        <?php require ($_SERVER['FIERSA'].'module/nav-list.php')?>
		<?php if($nav_box['nav_sub'] != '') { ?>
          <ul class="nav-sub" <?php if($nav == $nav_box['nav_title'] || $opensub == 'yes') { ?>style="display:block"<?php } ?>>
            <?php foreach($nav_box['nav_sub'] as $nav_box){ ?>
              <li><?php require ($_SERVER['FIERSA'].'module/nav-list.php')?></li>
            <?php } ?>
          </ul>
		<?php } ?>
	  </li>
    <?php } ?>
  </ul>
</nav>