<header class="content-center">
  <ul class="site-container">
	<li class="header-left">
	  <a title="<?php echo $sitename; ?>" class="header-box header-logo content-center" href="">
	    <?php require ($_SERVER['IF'].'template/img/logo.svg')?>
	  </a>
	</li>
	<li class="header-center">
	  <div class="main-nav">
        <a title="" class="nav-link nav-curr" href="">Nav</a>
        <a title="" class="nav-link" href="">Nav</a>
	  </div>
	</li>
	<li class="header-right">
	  <div class="header-box header-lang content-center">
	    <button title="Indonesia" class="lang-choice lang-id lang-curr">ID</button>
	    <button title="English" class="lang-choice lang-en">EN</button>
	  </div>
	  <button title="Toggle Menu" class="header-box header-togglemenu content-center mobile-only">
	    <?php require ($_SERVER['IF'].'template/img/icon/menu.svg')?>
	  </button>
	</li>
  </ul>
</header>