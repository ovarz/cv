function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
}



function all_scroll(){
  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();
    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
      $('header').addClass("header-afterscroll");		
    }
    else{
      $('#btt').hide();
      $('header').removeClass("header-afterscroll");
    }
  });  
}



function back_to_top(){
  $('#btt').on('click',function(){
    $('html, body').animate({
      scrollTop:0
    },500);
    return false;
  });	
}



function open_sticky(){
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('aria-popup');
	$('.open-sticky[aria-popup=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[aria-popup=' + get_id +']').removeClass('show-sticky');
    $('#popup-' + get_id).slideToggle('fast');
    $('.rancak-popup').not('#popup-' + get_id).slideUp('fast');
	return false;
  });	
}



function change_lang(){
  $('.choice-lang').click(function(){
    var get_lang = $(this).attr('aria-lang');
	$('body').removeClass();
	$('body').addClass('lang-' + get_lang);
	return false;
  });	
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky();
  change_lang();
});