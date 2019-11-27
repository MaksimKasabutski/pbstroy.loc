"use strict";

function header_bg_color() {
  if ($(window).scrollTop() >700) {
    $('#header').addClass('change-color');
  } else {
    $('#header').removeClass('change-color');
  }
}

function hide_mouse() {
  if ($(window).scrollTop() >300) {
    $("#mouse-scroll-down").addClass('hidden');
  } else {
    $("#mouse-scroll-down").removeClass('hidden');
  }
}
$(window).scroll(function() {
  hide_mouse();
  header_bg_color();
});


/*IMAGE CHANGER*/
$(".show-image").click(function() {
  event.preventDefault();
  var mainImage = $(this).index(); 
  $('.home-image-main img').removeClass('active');
  $('.home-image-main img').eq(mainImage).addClass('active'); 
});