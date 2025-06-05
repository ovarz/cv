<!DOCTYPE html>
<html lang="id">
<base href="/og/" />
<?php 
  $_SERVER['OG'] = $_SERVER['DOCUMENT_ROOT'] . '/og/';  
  $sitename = 'OtoGear';
  $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y');
  
  $nav_array = array();
  $nav_array[]=array(
	'nav_title'=>'Home',
    'nav_link'=>'',
	'nav_sub'=>'',
  );
  $nav_array[]=array(
	'nav_title'=>'Mobil',
    'nav_link'=>'subdomain.php',
	'nav_sub'=>'',
  );
  $nav_array[]=array(
	'nav_title'=>'Motor',
    'nav_link'=>'subdomain.php',
	'nav_sub'=>'',
  );
  $nav_array[]=array(
	'nav_title'=>'Video',
    'nav_link'=>'video.php',
	'nav_sub'=>'',
  );
  $nav_array[]=array(
	'nav_title'=>'Lainnya',
    'nav_link'=>'subdomain.php',
	'nav_sub'=>'',
  );
  /*
  $nav_array[]=array(
	'nav_title'=>'Mobil',
    'nav_link'=>'subdomain.php',
    'nav_sub' => [
      [
        'nav_title'=>'Mobil Sub 1',
        'nav_link'=>'category.php',
		'nav_sub'=>'',
	  ],
      [
        'nav_title'=>'Mobil Sub 2',
        'nav_link'=>'category.php',
		'nav_sub'=>'',
	  ],
    ],
  );
  */
?>