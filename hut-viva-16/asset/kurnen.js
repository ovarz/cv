$(document).ready(function() {
  var video = $('#viva16')[0];
  setTimeout(function() {
    video.muted = false;
    video.play().catch(function(error) {
      console.log("Autoplay failed, waiting for user interaction.");
    });
  },1000);
  
  setTimeout(function(){
    //$('button').html("<video autoplay><source src=\"asset/closing.mp4\" type=\"video/mp4\"></video>");
	
	$('button').click(function(){
	  $(this).html("<video autoplay><source src=\"asset/closing.mp4\" type=\"video/mp4\"></video>");
      return false;
    });
  },5000);
});