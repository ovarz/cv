<header class="content-center">
  <ul class="site-container">
	<li class="header-left">
	  <a title="" class="header-box header-logo content-center" href="">
	    <?php require ($_SERVER['TK'].'template/img/logo.svg')?>
	  </a>
	</li>
	<li class="header-right">
	  <button title="" class="header-box header-toggle-menu open-sticky content-center" aria-popup-button="MainNav">
	    <?php require ($_SERVER['TK'].'template/img/icon/menu.svg')?>
		<?php require ($_SERVER['TK'].'template/img/icon/close.svg')?>
	  </button>
	</li>
  </ul>
</header>



<nav class="rancak-popup" aria-popup-box="MainNav">
  <div class="site-container">
    <div class="main-nav-list">
      <?php 
        $nav_array = array();
        $nav_array[]=array(
          'nav_title'=>'Home', 'nav_label'=>'Home', 'nav_link'=>'',
        );
        $nav_array[]=array(
          'nav_title'=>'About', 'nav_label'=>'About', 'nav_link'=>'about/',
        );
        $nav_array[]=array(
          'nav_title'=>'Work', 'nav_label'=>'Work', 'nav_link'=>'',
        );
        $nav_array[]=array(
          'nav_title'=>'Persentation', 'nav_label'=>'Persentation <span>New</span>', 'nav_link'=>'',
        );
        $nav_array[]=array(
          'nav_title'=>'Focus', 'nav_label'=>'Focus', 'nav_link'=>'',
        );
        $nav_array[]=array(
          'nav_title'=>'Contact', 'nav_label'=>'Contact', 'nav_link'=>'contact/',
        );
        $nav_array[]=array(
          'nav_title'=>'MWC 2020', 'nav_label'=>'MWC 2020', 'nav_link'=>'',
        );
        foreach($nav_array as $nav_list){
      ?>
	    <a title="<?php echo($nav_list['nav_title'])?>" class="main-nav-link <?php if($menu == $nav_list['nav_title']) { ?>main-nav-curr<?php } ?>" href="<?php echo($nav_list['nav_link'])?>">
		  <?php echo($nav_list['nav_label'])?>
		</a>
	  <?php } ?>
	</div>
	<div class="main-start-project">
      <a title="Start A Project" class="main-start-project-link" href="">
        <span>Start A Project</span>
		<?php require ($_SERVER['TK'].'template/img/icon/more.svg')?>
      </a>
	</div>
  </div>
</nav>