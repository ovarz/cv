<nav class="custom-scrollbar">
  <a title="Back to home" class="main-logo rancak-lazy thumb-loading" href="information.php">
    <img class="lazyload" data-original="img/logo-color.png" />
  </a>
  
  <ul class="nav-list">
    <?php foreach($nav_admin_array as $nav_row => $nav_box){ ?>
	  <li>
        <?php require ($_SERVER['FIERSA'].'module/nav-list.php')?>
		<?php if($nav_box['nav_sub'] != '') { ?>
          <ul class="nav-sub" <?php if($opensub == $nav_box['nav_title']) { ?>style="display:block"<?php } ?>>
            <?php foreach($nav_box['nav_sub'] as $nav_box){ ?>
              <li><?php require ($_SERVER['FIERSA'].'module/nav-list.php')?></li>
            <?php } ?>
          </ul>
		<?php } ?>
	  </li>
    <?php } ?>
  </ul>
  
  <footer>
    <p>&copy; 2024 - PT Mega Akses Persada</p>
	<p>All Right Reserved</p>
  </footer>
</nav>