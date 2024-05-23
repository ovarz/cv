<!-- footer -->
<footer>
  <h6>Aufar Mahardi &copy;2018 - All Right Reserved</h6>
</footer>
<!-- end footer -->

<amp-animation id="showAnim"
  layout="nodisplay">
  <script type="application/json">
	{
	  "duration": "200ms",
	  "fill": "both",
	  "iterations": "1",
	  "direction": "alternate",
	  "animations": [{
		"selector": "#scrollToTopButton",
		"keyframes": [{
		  "opacity": "1",
		  "visibility": "visible"
		}]
	  }]
	}
  </script>
</amp-animation>

<amp-animation id="hideAnim"
  layout="nodisplay">
  <script type="application/json">
	{
	  "duration": "200ms",
	  "fill": "both",
	  "iterations": "1",
	  "direction": "alternate",
	  "animations": [{
		"selector": "#scrollToTopButton",
		"keyframes": [{
		  "opacity": "0",
		  "visibility": "hidden"
		}]
	  }]
	}
  </script>
</amp-animation>

<div id="marker">
  <amp-position-observer on="enter:hideAnim.start; exit:showAnim.start"
	layout="nodisplay">
  </amp-position-observer>
</div>
<button id="scrollToTopButton" on="tap:top-page.scrollTo(duration=200)" class="content_center scrollToTop"><i class="fas fa-angle-double-up">&#xf102</i></button>

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Person",
  "name" : "Aufar Mahardi",
  "url" : "https://aufarmahardi.com/",
  "logo": "https://aufarmahardi.com/img/ovarz.jpg"
}
</script>

</body>
</html>