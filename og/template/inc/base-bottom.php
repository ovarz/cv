<button title="Return To Top" id="btt" class="content_center hide">
  <?php require ($_SERVER['OG'].'template/img/icon/back-to-top.svg')?>
</button>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="template/css/hold.css?<?php echo $anticache; ?>" media="print" onload="this.media='all'"/>
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
<div id="fb-root"></div>
<script defer src="template/js/lazysizes.min.js"></script>
<script defer rancak-hold="template/js/rancak.js"></script>



</body>
</html>