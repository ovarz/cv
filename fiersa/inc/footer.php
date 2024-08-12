<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/rancak-hold.css?<?php echo $version; ?>" media="print" onload="this.media='all'"/>

  <?php if($page == 'login') { ?>
    <link rel="stylesheet" type="text/css" href="css/login-hold.css?<?php echo $version; ?>" media="print" onload="this.media='all'"/>
  <?php } ?>
  
  <?php if($page == 'dashboard') { ?>
    <link rel="stylesheet" type="text/css" href="css/dashboard-hold.css?<?php echo $version; ?>" media="print" onload="this.media='all'"/>
  <?php } ?>
</noscript>
<script defer>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function(){window.setTimeout(loadDeferredStyles,0);});
  else window.addEventListener('load', loadDeferredStyles);
</script>
<script defer src="js/lazysizes.min.js"></script>
<script defer rancak-script="js/rancak.js?<?php echo $version; ?>"></script>
<script defer>
$(document).ready(function(){
  $(window).scrollTop(0);
});
</script>



</body>
</html>