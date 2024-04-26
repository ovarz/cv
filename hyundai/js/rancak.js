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



var open_sticky = function(){
  "use strict";
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('title');
	$('.open-sticky[title=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[title=' + get_id +']').removeClass('show-sticky');
    $('#popup-' + get_id).fadeToggle('fast');
    $('.rancak-popup').not('#popup-' + get_id).fadeOut('fast');
	if($('#popup-' + get_id).hasClass("popup-alert-temporary")){
      setTimeout(function() {
        ClosePopup();
      },2000);
	};
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