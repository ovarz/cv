<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">				
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<link rel="preconnect" href="https://www.aufarmahardi.com">
<link rel="dns-prefetch" href="https://www.aufarmahardi.com" />
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com"/>
<link href="img/favicon.ico?<?php echo $version; ?>" rel="icon" type="image/ico" />
<title><?php echo $site_title; ?></title>

<link rel="preload" href="fonts/HyundaiSans/HyundaiSansHead-Bold.woff" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/HyundaiSans/HyundaiSansHead-Light.woff" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/HyundaiSans/HyundaiSansHead-Medium.woff" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/HyundaiSans/HyundaiSansHead-Regular.woff" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/HyundaiSans/HyundaiSansText-Bold.woff" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/HyundaiSans/HyundaiSansText-BoldItalic.woff" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/HyundaiSans/HyundaiSansText-Italic.woff" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/HyundaiSans/HyundaiSansText-Medium.woff" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/HyundaiSans/HyundaiSansText-MediumItalic.woff" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="fonts/HyundaiSans/HyundaiSansText-Regular.woff" as="font" type="font/woff2" crossorigin="anonymous"/>
<link rel="preload" href="css/rancak.css?<?php echo $version; ?>" as="style">
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">

<style><?php require ($_SERVER['HY'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>

<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $version; ?>"/>

<?php if($slideshow == 'yes') { ?>
  <link rel="preload" href="css/tiny-slider.css?<?php echo $version; ?>" as="style">
  <link rel="preload" as="script" href="js/tiny-slider.js?<?php echo $version; ?>">
  <link rel="stylesheet" type="text/css" href="css/tiny-slider.css?<?php echo $version; ?>"/>
  <script src="js/tiny-slider.js?<?php echo $version; ?>"></script>
<?php } ?>

</head>
<body>