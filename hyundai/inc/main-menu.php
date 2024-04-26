<div class="header-box <?php echo $device; ?>-only">
  <a title="Menu" class="header-link content_center" href="">
    <div class="header-parent">
      <span class="header-label">Find a Car</span>
      <?php require ($_SERVER['HY'].'img/icon/down.svg')?>
    </div>
  </a>
</div>

<a title="Home" class="header-link content_center <?php echo $device; ?>-only" href="">
  <span class="header-label">N Brand</span>
</a>

<div class="header-box <?php echo $device; ?>-only">
  <a title="Menu" class="header-link content_center" href="">
    <div class="header-parent">
      <span class="header-label">Owner</span>
      <?php require ($_SERVER['HY'].'img/icon/down.svg')?>
    </div>
  </a>
  <div class="header-sub hide">
    <span class="width-max">
      <?php 
        $channel_array = array();
        $channel_array[]=array('channel_name'=>'Find A Deader','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'EV Charging Station','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Download Brochure','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Request a Quote','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Genuine Accessories','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Hyundai Bluelink','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'myHyundai Indonesia','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Hyundai Hadir Untukmu','channel_icon'=>'yes','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Hyundai Finance','channel_icon'=>'no','channel_link'=>'');
        foreach($channel_array as $channel_list){
      ?>
        <a title="<?php echo($channel_list['channel_name'])?>" class="header-link content_center" href="<?php echo($channel_list['channel_link'])?>">
          <span class="header-label"><?php echo($channel_list['channel_name'])?></span>
		  <?php if($channel_list['channel_icon'] == 'yes') { ?><?php require ($_SERVER['HY'].'img/icon/right.svg')?><?php } ?>
        </a>
	  <?php } ?>
	</span>
  </div>
</div>

<div class="header-box <?php echo $device; ?>-only">
  <a title="Menu" class="header-link content_center" href="">
    <div class="header-parent">
      <span class="header-label">Hyundai Story</span>
      <?php require ($_SERVER['HY'].'img/icon/down.svg')?>
    </div>
  </a>
  <div class="header-sub hide">
    <span class="width-max">
      <?php 
        $channel_array = array();
        $channel_array[]=array('channel_name'=>'Hyundai Indonesia','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Press','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Newsroom','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Career','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'CSR','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Hyundai Factory Tour','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Hyundai Motorstudio Senayan Park','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Hyundai Mobility Exhibition Center','channel_icon'=>'no','channel_link'=>'');
        $channel_array[]=array('channel_name'=>'Contact Us','channel_icon'=>'no','channel_link'=>'');
        foreach($channel_array as $channel_list){
      ?>
        <a title="<?php echo($channel_list['channel_name'])?>" class="header-link content_center" href="<?php echo($channel_list['channel_link'])?>">
          <span class="header-label"><?php echo($channel_list['channel_name'])?></span>
		  <?php if($channel_list['channel_icon'] == 'yes') { ?><?php require ($_SERVER['HY'].'img/icon/right.svg')?><?php } ?>
        </a>
	  <?php } ?>
	</span>
  </div>
</div>