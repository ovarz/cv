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
  
  
  
  $socmed_array = array();
  $socmed_array[]=array(
	'socmed_title'=>'Instagram',
    'socmed_link'=>'https://www.instagram.com/otogearscom/',
	'socmed_icon'=>'instagram',
  );
  $socmed_array[]=array(
	'socmed_title'=>'Tiktok',
    'socmed_link'=>'https://www.tiktok.com/@otogearscom',
	'socmed_icon'=>'tiktok',
  );
  $socmed_array[]=array(
	'socmed_title'=>'Youtube',
    'socmed_link'=>'https://www.youtube.com/@otogear',
	'socmed_icon'=>'youtube',
  );
?>