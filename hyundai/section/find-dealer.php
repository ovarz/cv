<div class="section-title">
  <div class="section-title-primary">Find a Dealer</div>
  <div class="section-title-secondary">Locate your nearest dealership</div>
</div>

<div class="find-dealer-container">
  <div class="find-dealer-label">Select Dealership</div>
  <div class="find-dealder-list">
    <div class="find-dealer-choose">
      <?php $radio_class='find-dealer-radiobutton'; $radio_name='find-dealer-choice'; $radio_label='Showroom'; $radio_checked='checked';
      require ($_SERVER['HY'].'module/default-radiobutton.php')?>
      <?php $radio_class='find-dealer-radiobutton'; $radio_name='find-dealer-choice'; $radio_label='Service'; $radio_checked='';
      require ($_SERVER['HY'].'module/default-radiobutton.php')?>
      <?php $radio_class='find-dealer-radiobutton'; $radio_name='find-dealer-choice'; $radio_label='Used Car'; $radio_checked='';
      require ($_SERVER['HY'].'module/default-radiobutton.php')?>
	</div>
	<div class="find-dealer-select">
	  <div class="default-field">
	    <select class="default-field-box default-field-selector">
		  <option value="All">Select a Model</option>
		  <?php foreach($carmodel_array as $carmodel_list){ ?>
		    <option value="<?php echo($carmodel_list['carmodel_name'])?>"><?php echo($carmodel_list['carmodel_name'])?></option>
		  <?php } ?>
		</select>
		<?php require ($_SERVER['HY'].'img/icon/down.svg')?>
	  </div>
	  <div class="default-field">
	    <input class="default-field-box default-field-search" placeholder="Search by location/city" type="text" autocomplete="off">
		<button type="Search Location" class="default-field-search-button"><?php require ($_SERVER['HY'].'img/icon/search.svg')?></button>
	  </div>
	  <div class="default-field">
	    <select class="default-field-box default-field-selector">
		  <option value="Select Radius">Select Radius</option>
		  <?php 
		    $radius_array = array();
            $radius_array[]=array('radius_data'=>'5 Kilometers');
            $radius_array[]=array('radius_data'=>'10 Kilometers');
            $radius_array[]=array('radius_data'=>'20 Kilometers');
		    foreach($radius_array as $radius_list){ 
		  ?>
		    <option value="<?php echo($radius_list['radius_data'])?>"><?php echo($radius_list['radius_data'])?></option>
		  <?php } ?>
		</select>
		<?php require ($_SERVER['HY'].'img/icon/down.svg')?>
	  </div>
	</div>
  </div>
</div>