function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
}



function all_scroll(){
  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();

    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
    }

    else{
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
    $('.rancak-popup[aria-overlay=' + get_id +']').slideToggle('fast');
    $('.rancak-popup').not('.rancak-popup[aria-overlay=' + get_id +']').slideUp('fast');
	return false;
  });	
  
  $('.rancak-popup-overlay, .rancak-popup-close').click(function(){
	ClosePopup();
	return false;
  });
}



function category_toggle(){
  "use strict";
  $('.header-search').click(function(){
	$('.search-box').slideToggle();
	return false;
  });
  
  $('.category-toggle').click(function(){
	$(this).toggleClass('category-toggle-active');
	$(this).find('.category-close').fadeToggle();
	$('.category-clear').slideDown();
	return false;
  });
  
  $('.category-clear-button').click(function(){
	$('.category-toggle').removeClass('category-toggle-active');
	$('.category-toggle').find('.category-close').fadeOut();
	$('.category-clear').slideUp();
	return false;
  });	
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky();
  category_toggle();
});