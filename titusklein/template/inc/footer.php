<footer class="content-center">
  <div class="site-container">
    <div class="footer-copyright">&copy; 2025 <?php echo $sitename; ?></div>
	<div class="footer-nav">
      <?php 
        $nav_array = array();
        $nav_array[]=array(
          'nav_title'=>'Contact', 'nav_label'=>'Contact', 'nav_link'=>'',
        );
        $nav_array[]=array(
          'nav_title'=>'Contact', 'nav_label'=>'Contact', 'nav_link'=>'',
        );
        foreach($nav_array as $nav_list){
      ?>
	    <a title="<?php echo($nav_list['nav_title'])?>" class="footer-nav-link" href="<?php echo($nav_list['nav_link'])?>">
		  <?php echo($nav_list['nav_label'])?>
		</a>
	  <?php } ?>
	</div>
    <div class="footer-socmed">
      <?php 
        $socmed_array = array();
        $socmed_array[]=array(
          'socmed_title'=>'Linkedin', 'socmed_icon'=>'footer-linkedin', 'socmed_link'=>'',
        );
        $socmed_array[]=array(
          'socmed_title'=>'X', 'socmed_icon'=>'footer-x', 'socmed_link'=>'',
        );
        $socmed_array[]=array(
          'socmed_title'=>'Back to Top', 'socmed_icon'=>'back-to-top', 'socmed_link'=>'',
        );
        foreach($socmed_array as $socmed_list){
      ?>
	    <a id="<?php echo($socmed_list['socmed_icon'])?>" title="<?php echo($socmed_list['socmed_title'])?>" class="footer-socmed-button" href="<?php echo($socmed_list['socmed_link'])?>">
		  <?php require ($_SERVER['TK'].'template/img/icon/'.$socmed_list['socmed_icon'].'.svg')?>
		</a>
	  <?php } ?>
	</div>
  </div>
</footer>