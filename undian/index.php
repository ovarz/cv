<?php 
  $_SERVER['VU'] = $_SERVER['DOCUMENT_ROOT'] . '/undian/'; 
  $version = date ('s'.'i'.'H'.'d'.'m'.'Y');
?>

<html>
<body class="content_center">
<head>
  <link rel="preload" href="asset/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
  <link rel="preload" href="asset/rancak.css?<?php echo $version; ?>" as="style">
  <link rel="preload" href="asset/jquery.js" as="script">
  <link rel="preload" href="asset/rancak.js?<?php echo $version; ?>" as="script">
  
  <link rel="stylesheet" type="text/css" href="asset/rancak.css?<?php echo $version; ?>"/>
</head>



<div class="box-content">
  <div class="content_center logo">
    <?php require ($_SERVER['VU'].'asset/logo.svg')?>
  </div>
  <div id="result" class="hasil-undian">&nbsp;</div>
  <div class="content_center">
    <button id="draw-button" class="mulai-undian content_center">Mulai Undian</button>
  </div>
</div>



<script src="asset/jquery.js"></script>
<script src="asset/rancak.js?<?php echo $version; ?>"></script>



</body>
</html>
