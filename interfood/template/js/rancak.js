function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
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
    var get_id = $(this).attr('aria-popup-button');
	$('.open-sticky[aria-popup-button=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[aria-popup-button=' + get_id +']').removeClass('show-sticky');
    $('.rancak-popup[aria-popup-box=' + get_id +']').slideToggle('fast');
    $('.rancak-popup').not('[aria-popup-box=' + get_id +']').slideUp('fast');
	return false;
  });	
  
  $('.rancak-popup-overlay, .rancak-popup-close').click(function(){
    ClosePopup();
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



function countup(){
  $('.countup-number').each(function () {
    var $this = $(this);
    var target = parseInt($this.attr('aria-number'), 10);

    $({ countNum: 0 }).animate(
      { countNum: target },
      {
        duration: 2000, // durasi animasi (ms)
        easing: 'swing',
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
        }
      }
    );
  });
}



function all_scroll(){
  var counted = false;
  
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



    var oTop = $(".home-distribution").offset().top - window.innerHeight + 144;
    if (!counted && $(window).scrollTop() > oTop) {
      countup();
	  counted = true;
    }
  }); 
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky();
  change_lang();
});