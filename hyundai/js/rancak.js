function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
}



function all_scroll(){
  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('.header-transparent').removeClass("header-transparent-active");	
      $('#btt').css("display","flex");	
    }

    else{
      $('.header-transparent').addClass("header-transparent-active");
      $('#btt').hide();
    }
  });  
}



function back_to_top(){
  $('#btt').click(function(){
	$('body,html').scrollTop(0);
    return false;
  });	
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
  
  $('.header-box > .header-link').click(function(){
    $(this).parent().find('.header-sub').slideToggle('fast');
	return false;
  });
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky();
});