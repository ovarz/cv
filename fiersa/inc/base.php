<!DOCTYPE html>
<html lang="id">
<base href="/fiersa/" />
<?php 
  $_SERVER['FIERSA'] = $_SERVER['DOCUMENT_ROOT'] . '/fiersa/'; 
  $version = date ('s'.'i'.'H'.'d'.'m'.'Y');
  
  $site_title='FIERSA (FiberStar Selfcare Application)';
  
  
  
  $nav_array = array();
  $nav_array[]=array(
    'nav_icon'=>'information',
	'nav_title'=>'Information',
    'nav_link'=>'information',
	'nav_sub'=>'',
  );
  $nav_array[]=array(
    'nav_icon'=>'customer-data',
	'nav_title'=>'Customer Data',
    'nav_link'=>'customer-data',
    'nav_sub' => [
      [
        'nav_icon'=>'sub',
        'nav_title'=>'End Customer Data',
        'nav_link'=>'end-customer-data',
		'nav_sub'=>'',
	  ],
      [
        'nav_icon'=>'sub',
        'nav_title'=>'Healthy Check',
        'nav_link'=>'healthy-check',
		'nav_sub'=>'',
	  ],
    ],
  );
  $nav_array[]=array(
    'nav_icon'=>'ticket-request',
	'nav_title'=>'Ticket Request',
    'nav_link'=>'ticket-request',
	'nav_sub'=>'',
  );
  $nav_array[]=array(
    'nav_icon'=>'ticket-complaint',
	'nav_title'=>'Ticket Complaint',
    'nav_link'=>'ticket-complaint',
	'nav_sub'=>'',
  );
  $nav_array[]=array(
    'nav_icon'=>'ticket-status',
	'nav_title'=>'Ticket Status',
    'nav_link'=>'ticket-status',
	'nav_sub'=>'',
  );
  $nav_array[]=array(
    'nav_icon'=>'outage-report',
	'nav_title'=>'Outage Report',
    'nav_link'=>'outage-report',
	'nav_sub'=>'',
  );
  $nav_array[]=array(
    'nav_icon'=>'performance-report',
	'nav_title'=>'Performance Report',
    'nav_link'=>'performance-report',
	'nav_sub'=>'',
  );
?>