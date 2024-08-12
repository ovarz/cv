function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
}



function open_sticky(){
  "use strict";
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('aria-popup');
	$('.open-sticky[aria-popup=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[aria-popup=' + get_id +']').removeClass('show-sticky');
    $('.rancak-popup[aria-overlay=' + get_id +']').fadeToggle('fast');
    $('.rancak-popup').not('.rancak-popup[aria-overlay=' + get_id +']').fadeOut('fast');
	return false;
  });	
  
  $('.rancak-popup-overlay, .rancak-popup-close').click(function(){
	ClosePopup();
	return false;
  });
}



$(document).ready(function(){
  "use strict";
  open_sticky();
});