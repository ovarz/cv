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



function sticky_small_column(){
  var $window = $(window);
  function checkWidth(){
    var windowsize = $window.width();
    if (windowsize > 1000){
      $window.scroll(function(){
		var sc = $window.scrollTop();
        var right_container_height = $('.rcb-container-sticky').outerHeight();
		if(sc >= 0){
          $('.rcb-container-sticky').css({
			'top':'calc(100% - ' + right_container_height + 'px - 21px)' //--section-space-normal
          });
		}
      });
    }
  }
  checkWidth();
  //$(window).resize(checkWidth);
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
    var get_id = $(this).attr('title');
	$('.open-sticky[title=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[title=' + get_id +']').removeClass('show-sticky');
    $('#popup-' + get_id).fadeToggle('fast');
    $('.rancak-popup').not('#popup-' + get_id).fadeOut('fast');
	if($('#popup-' + get_id).hasClass("popup-alert-temporary")){
      setTimeout(function() {
        ClosePopup();
      },2000);
	}
	return false;
  });	
}



function toggle_menu(){
  $('.header-togglenav').click(function(){
	$(this).toggleClass('header-opennav');
	$(this).find('svg').slideToggle('fast');
	$('.header-nav-mobile').slideToggle('fast');
	return false;
  });
  
  $('.header-nav-mobile .nav-link-toggle').click(function(){
	$(this).toggleClass('sub-opennav');
	$(this).parents().eq(1).find('.nav-sub').slideToggle('fast');
	return false;
  });
}



function iklan_sticky_bottom(){
  $(".isb-close").click(function(){
    $(".iklan-sticky-bottom").hide();
    $("footer.footer-all").css("padding-bottom",21);
    return false;
  });
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  sticky_small_column();
  back_to_top();
  open_sticky();
  toggle_menu();
  iklan_sticky_bottom();
});