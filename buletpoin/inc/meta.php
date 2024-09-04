<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">				
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="description" content="<?php echo $site_title; ?>">
<link rel="preconnect" href="https://www.thevivanetworks.com">
<link rel="dns-prefetch" href="https://www.thevivanetworks.com" />
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com"/>
<link rel="icon" href="img/favicon.ico?<?php echo $anticache; ?>" type="image/ico" />
<title><?php echo $site_title; ?></title>

<link rel="preload" href="fonts/nunito/XRXV3I6Li01BKofINeaB.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/courier-prime/u-4n0q2lgwslOqpF_6gQ8kELawRZWMf6.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/courier-prime/u-4i0q2lgwslOqpF_6gQ8kELawRR4-Lvqdns.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/courier-prime/u-450q2lgwslOqpF_6gQ8kELawFpWg.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/courier-prime/u-4k0q2lgwslOqpF_6gQ8kELY7pMT-Dfqw.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/rancak.css?<?php echo $anticache; ?>" as="style">
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">

<style><?php require ($_SERVER['BP'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../vivanetworks/global-js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>

<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>
</head>
<body>

<style>.loadingpage,.loadingpage *{padding:0;margin:0;text-align:center}.loadingpage{display:flex;justify-content:center;align-items:center;transition:all 0.34s;background:#FAFAFA;position:fixed;z-index:2147483648;top:0;left:0;width:100%;height:100%}.loadingpage-label{text-align:center;color:#717788;font-weight:900;font-size:24px;font-family:Courier,sans-serif}.loadingpage svg{width:89px;height:auto;margin:8px auto;animation:logo-icon-loading 2s linear infinite forwards}@-webkit-keyframes logo-icon-loading{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}@keyframes logo-icon-loading{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}</style><div class="loadingpage"><div class="loadingpage-box"><div class="loadingpage-label">NOW</div> <?php require ($_SERVER['BP'].'img/bp-icon.svg')?> <div class="loadingpage-label">LOADING</div></div></div>