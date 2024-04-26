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



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
});