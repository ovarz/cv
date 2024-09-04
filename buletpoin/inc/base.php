<!DOCTYPE html>
<html lang="id">
<base href="/buletpoin/" />
<?php 
  $anticache = date ('s'.'i'.'H'.'d'.'m'.'Y');
  $_SERVER['BP'] = $_SERVER['DOCUMENT_ROOT'] . '/buletpoin/'; 
  $site_title = 'BuletPoin';
    
  $category_array = array();
  $category_array[]=array('category_icon'=>'news','category_name'=>'News');
  $category_array[]=array('category_icon'=>'automotive','category_name'=>'Automotive');
  $category_array[]=array('category_icon'=>'showbiz','category_name'=>'Showbiz');
  $category_array[]=array('category_icon'=>'digital','category_name'=>'Digital');
  $category_array[]=array('category_icon'=>'sport','category_name'=>'Sport');
  $category_array[]=array('category_icon'=>'lifestyle','category_name'=>'Lifestyle');
    
  $share_array = array();
  $share_array[]=array('share_icon'=>'facebook','share_link'=>'');
  $share_array[]=array('share_icon'=>'x','share_link'=>'');
  $share_array[]=array('share_icon'=>'telegram','share_link'=>'');
  $share_array[]=array('share_icon'=>'whatsapp','share_link'=>'');
?>