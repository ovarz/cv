<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">				
<link rel="preconnect" href="https://www.aufarmahardi.com">
<link rel="dns-prefetch" href="https://www.aufarmahardi.com" />
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com"/>
<link href="img/favicon.ico?<?php echo $version; ?>" rel="icon" type="image/ico" />
<title><?php echo $site_title; ?></title>

<link rel="preload" href="fonts/pxiEyp8kv8JHgFVrJJfecg.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/pxiByp8kv8JHgFVrLDD4Z1xlFQ.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="css/rancak-base.css?<?php echo $version; ?>" as="style">
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">

<style><?php require ($_SERVER['FIERSA'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-script");
    $(this).attr('src', get_script);
  })
});
</script>

<link rel="stylesheet" type="text/css" href="css/rancak-base.css?<?php echo $version; ?>"/>

<?php if($page == 'login') { ?>
  <link rel="preload" href="img/logo-white.png" as="image">
  <link rel="preload" href="css/login-base.css?<?php echo $version; ?>" as="style">
  <link rel="stylesheet" type="text/css" href="css/login-base.css?<?php echo $version; ?>"/>
<?php } ?>

<?php if($page == 'dashboard') { ?>
  <link rel="preload" href="img/logo-color.png" as="image">
  <link rel="preload" href="css/dashboard-base.css?<?php echo $version; ?>" as="style">
  <link rel="stylesheet" type="text/css" href="css/dashboard-base.css?<?php echo $version; ?>"/>
<?php } ?>

<?php if($slideshow == 'yes') { ?>
  <link rel="preload" href="css/tiny-slider.css?<?php echo $version; ?>" as="style">
  <link rel="preload" as="script" href="js/tiny-slider.js?<?php echo $version; ?>">
  <link rel="stylesheet" type="text/css" href="css/tiny-slider.css?<?php echo $version; ?>"/>
  <script src="js/tiny-slider.js?<?php echo $version; ?>"></script>
<?php } ?>

</head>
<body>