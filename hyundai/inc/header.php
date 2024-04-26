<header>
  <span class="width-max">
    <div class="header-left">
	  <a title="Home" class="header-link header-logo content_center" href="">
	    <?php require ($_SERVER['HY'].'img/logo.svg')?>
	  </a>
	  
	  <?php $device='desktop'; require ($_SERVER['HY'].'inc/main-menu.php')?>
	</div>
	
	<div class="header-right">
	  <?php $device='desktop'; require ($_SERVER['HY'].'inc/icon-menu.php')?>
	</div>
  </span>
</header>



<nav id="popup-Nav" class="rancak-popup mobile-only">
  <div class="nav-icon">
    <?php $device='mobile'; require ($_SERVER['HY'].'inc/icon-menu.php')?>
  </div>
  <?php $device='mobile'; require ($_SERVER['HY'].'inc/main-menu.php')?>
</nav>