<footer>
  <span class="width-max">
    <div class="footer-box">
	  <?php require ($_SERVER['HY'].'img/logo-icon.svg')?>
	</div>
	
    <div class="footer-box">
	  <a title="Find a Car" class="footer-label" href="">Find a Car</a>
      <?php foreach($carmodel_array as $carmodel_list){ ?>
        <a title="<?php echo($carmodel_list['carmodel_name'])?>" class="footer-link" href="<?php echo($carmodel_list['carmodel_link'])?>">
          <?php echo($carmodel_list['carmodel_name'])?>
        </a>
	  <?php } ?>
	</div>
	
    <div class="footer-box">
	  <a title="N Brand" class="footer-label" href="">N Brand</a>
	</div>
	
    <div class="footer-box">
	  <a title="Owners" class="footer-label" href="">Owners</a>
      <?php foreach($owners_array as $owners_list){ ?>
	    <a title="<?php echo($owners_list['owners_name'])?>" class="footer-link" href="<?php echo($owners_list['owners_link'])?>">
          <?php echo($owners_list['owners_name'])?>
        </a>
	  <?php } ?>
	</div>
	
    <div class="footer-box">
	  <a title="Hyundai Story" class="footer-label" href="">Hyundai Story</a>
      <?php foreach($story_array as $story_list){ ?>
	    <a title="<?php echo($story_list['story_name'])?>" class="footer-link" href="<?php echo($story_list['story_link'])?>">
          <?php echo($story_list['story_name'])?>
        </a>
	  <?php } ?>
	</div>
	
    <div class="footer-box footer-socmed">
      <?php 
        $footer_icon_array = array();
        $footer_icon_array[]=array('footer_icon_name'=>'Facebook','footer_icon_icon'=>'facebook','footer_icon_link'=>'');
        $footer_icon_array[]=array('footer_icon_name'=>'Youtube','footer_icon_icon'=>'youtube','footer_icon_link'=>'');
        $footer_icon_array[]=array('footer_icon_name'=>'Twitter','footer_icon_icon'=>'twitter','footer_icon_link'=>'');
        $footer_icon_array[]=array('footer_icon_name'=>'Linkedin','footer_icon_icon'=>'linkedin','footer_icon_link'=>'');
        $footer_icon_array[]=array('footer_icon_name'=>'Instagram','footer_icon_icon'=>'instagram','footer_icon_link'=>'');
        $footer_icon_array[]=array('footer_icon_name'=>'Tiktok','footer_icon_icon'=>'tiktok','footer_icon_link'=>'');
        $footer_icon_array[]=array('footer_icon_name'=>'Whatsapp','footer_icon_icon'=>'whatsapp','footer_icon_link'=>'');
        foreach($footer_icon_array as $footer_icon_list){
      ?>
        <a title="<?php echo($footer_icon_list['footer_icon_name'])?> Hyundai" class="footer-link" href="<?php echo($footer_icon_list['footer_icon_link'])?>">
          <?php require ($_SERVER['HY'].'img/icon/footer-'.$footer_icon_list['footer_icon_icon'].'.svg')?>
        </a>
	  <?php } ?>
	</div>
  </span>
</footer>