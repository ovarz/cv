<head>  
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">				
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="description" content="<?php echo $sitename; ?> <?php echo $menu; ?>">
<link rel="preconnect" href="https://aufarmahardi.com">
<link rel="dns-prefetch" href="https://aufarmahardi.com">
<link rel="preconnect" href="https://cdnjs.cloudflare.com">
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
<title><?php echo $sitename; ?> <?php echo $menu; ?></title>
<link href="template/img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico" />

<link rel="preload" href="template/fonts/inter/UcCm3FwrK3iLTcvnUwQT9g.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="template/css/rancak.css?<?php echo $anticache; ?>" as="style">
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" as="script">

<style><?php require ($_SERVER['TK'].'template/css/font.css')?></style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>

<link rel="stylesheet" type="text/css" href="template/css/rancak.css?<?php echo $anticache; ?>"/>
<link rel="stylesheet" type="text/css" href="template/css/rancak-desktop.css?<?php echo $anticache; ?>" media="(min-width:1024px)">
</head>
<body>