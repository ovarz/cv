<footer class="content_center">
  <div class="footer-container">
    <div class="footer-menu">
	  <a title="Terms of Service" class="footer-menu-link" href="tos.php">Terms of Service</a>
	  <a title="Privacy Policy" class="footer-menu-link" href="privacy-policy.php">Privacy Policy</a>
	</div>
    <div class="footer-socmed">
	  <?php foreach($socmed_array as $socmed_list){ ?>
	    <a title="<?php echo($socmed_list['socmed_icon'])?>" class="footer-socmed-link" href="<?php echo($socmed_list['socmed_link'])?>" target="_blank">
		  <?php require ($_SERVER['OG'].'template/img/icon/footer-'.$socmed_list['socmed_icon'].'.svg')?>
		</a>
	  <?php } ?>
	</div>
	<div class="footer-copyright">OtoGear &copy;2025 - All Right Reserved</div>
  </div>
</footer>