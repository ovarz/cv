<!DOCTYPE html>
<html lang="id">
<base href="/hyundai/" />
<?php 
  $_SERVER['HY'] = $_SERVER['DOCUMENT_ROOT'] . '/hyundai/'; 
  $version = date ('s'.'i'.'H'.'d'.'m'.'Y');
  
  $site_title='Hyundai Indonesia';
  
  $carmodel_array = array();
  $carmodel_array[]=array('carmodel_name'=>'Creta','carmodel_link'=>'');
  $carmodel_array[]=array('carmodel_name'=>'Ioniq 5','carmodel_link'=>'');
  $carmodel_array[]=array('carmodel_name'=>'Ioniq 6','carmodel_link'=>'');
  $carmodel_array[]=array('carmodel_name'=>'Palisade','carmodel_link'=>'');
  $carmodel_array[]=array('carmodel_name'=>'Santa Fe','carmodel_link'=>'');
  $carmodel_array[]=array('carmodel_name'=>'Stargazer','carmodel_link'=>'');
  $carmodel_array[]=array('carmodel_name'=>'Stargazer X','carmodel_link'=>'');
  $carmodel_array[]=array('carmodel_name'=>'Staria','carmodel_link'=>'');
  
  $owners_array = array();
  $owners_array[]=array('owners_name'=>'Find A Deader','owners_icon'=>'no','owners_link'=>'');
  $owners_array[]=array('owners_name'=>'EV Charging Station','owners_icon'=>'no','owners_link'=>'');
  $owners_array[]=array('owners_name'=>'Download Brochure','owners_icon'=>'no','owners_link'=>'');
  $owners_array[]=array('owners_name'=>'Request a Quote','owners_icon'=>'no','owners_link'=>'');
  $owners_array[]=array('owners_name'=>'Genuine Accessories','owners_icon'=>'no','owners_link'=>'');
  $owners_array[]=array('owners_name'=>'Hyundai Bluelink','owners_icon'=>'no','owners_link'=>'');
  $owners_array[]=array('owners_name'=>'myHyundai Indonesia','owners_icon'=>'no','owners_link'=>'');
  $owners_array[]=array('owners_name'=>'Hyundai Hadir Untukmu','owners_icon'=>'yes','owners_link'=>'');
  $owners_array[]=array('owners_name'=>'Hyundai Finance','owners_icon'=>'no','owners_link'=>'');

  $story_array = array();
  $story_array[]=array('story_name'=>'Hyundai Indonesia','story_icon'=>'no','story_link'=>'');
  $story_array[]=array('story_name'=>'Press','story_icon'=>'no','story_link'=>'');
  $story_array[]=array('story_name'=>'Newsroom','story_icon'=>'no','story_link'=>'');
  $story_array[]=array('story_name'=>'Career','story_icon'=>'no','story_link'=>'');
  $story_array[]=array('story_name'=>'CSR','story_icon'=>'no','story_link'=>'');
  $story_array[]=array('story_name'=>'Hyundai Factory Tour','story_icon'=>'no','story_link'=>'');
  $story_array[]=array('story_name'=>'Hyundai Motorstudio Senayan Park','story_icon'=>'no','story_link'=>'');
  $story_array[]=array('story_name'=>'Hyundai Mobility Exhibition Center','story_icon'=>'no','story_link'=>'');
  $story_array[]=array('story_name'=>'Contact Us','story_icon'=>'no','story_link'=>'');
?>