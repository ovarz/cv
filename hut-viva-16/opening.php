<?php 
  $_SERVER['VU'] = $_SERVER['DOCUMENT_ROOT'] . '/hut-viva-16/'; 
  $version = date ('s'.'i'.'H'.'d'.'m'.'Y');
?>

<html>
<body>
<head>
  <link rel="preload" href="asset/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
  <link rel="preload" href="asset/kurnen.css?<?php echo $version; ?>" as="style">
  <link rel="preload" href="asset/jquery.js" as="script">
  
  <link rel="stylesheet" type="text/css" href="asset/kurnen.css?<?php echo $version; ?>"/>
</head>



<button>
<video id="viva16" autoplay muted><source src="asset/opening.mp4?<?php echo $version; ?>" type="video/mp4"></video>
</button>


<script src="asset/jquery.js"></script>
<script>
$(document).ready(function() {
  var video = $('#viva16')[0];
  setTimeout(function() {
    video.muted = false;
  },2000);
  
  setTimeout(function(){
    $('button').click(function(){
	  $(this).html("<video autoplay><source src=\"asset/closing.mp4?<?php echo $version; ?>\" type=\"video/mp4\"></video>");
      return false;
    });
  },70000);
});
</script>


</body>
</html>
