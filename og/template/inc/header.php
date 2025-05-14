<header class="content_center">
  <ul class="header-container">
	<li class="header-left">
	  <a title="<?php echo $sitename; ?>" class="header-box logo content_center" href="">
	    <?php require ($_SERVER['OG'].'template/img/logo.svg')?>
	  </a>
	</li>
	<li class="header-right">
	  <?php $nav_device="desktop"; require ($_SERVER['OG'].'template/inc/nav.php')?>
	  <a title="Cari" class="header-box header-search content_center" href="search.php">
	    <?php require ($_SERVER['OG'].'template/img/icon/search.svg')?>
	  </a>
	  <button title="Toggle Navigation" class="header-box header-togglenav content_center mobile-only">
	    <?php require ($_SERVER['OG'].'template/img/icon/nav.svg')?>
		<?php require ($_SERVER['OG'].'template/img/icon/close.svg')?>
	  </button>
	</li>
	<li class="header-nav-mobile mobile-only">
	  <?php $nav_device="mobile"; require ($_SERVER['OG'].'template/inc/nav.php')?>
	</li>
  </ul>
</header>