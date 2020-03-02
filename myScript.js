"use strict";
window.$ = jQuery;
window.jQuery = jQuery;

function header_bg_color() {
  if ($(window).scrollTop() >150) {
    $('#header').addClass('change-color');
  } else {
    $('#header').removeClass('change-color');
  }
}

function hide_mouse() {
  if ($(window).scrollTop() <300) {
    $("#mouse-scroll-down").removeClass('hidden');
  } else {
    $("#mouse-scroll-down").addClass('hidden');
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
  $('.house-image-main img').removeClass('active');
  $('.house-image-main img').eq(mainImage).addClass('active');
  $('.house-image-small a').removeClass('active');
  $('.house-image-small a').addClass('inactive');
  $('.house-image-small a').eq(mainImage).addClass('active');
  $('.house-image-small a').eq(mainImage).removeClass('inactive');
});

/*PORTFOLIO NAVIGATION BAR for L screen*/
$(document).ready(function(){
  $("#nav-list-item-all").click(function() {
      $(".nav-front-L").css({'margin-left' : '70px', 'width' : '145px'})
      $("#roofing").css({'display' : 'block'})
      $("#masonry").css({'display' : 'block'})
      $("#base").css({'display' : 'block'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-roof").click(function() {
      $(".nav-front-L").css({'margin-left' : '330px', 'width' : '195px'}) 
      $("#roofing").css({'display' : 'block'})
      $("#masonry").css({'display' : 'none'})
      $("#base").css({'display' : 'none'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-masonry").click(function() {
      $(".nav-front-L").css({'margin-left' : '620px', 'width' : '185px'})
      $("#roofing").css({'display' : 'none'})
      $("#masonry").css({'display' : 'block'})
      $("#base").css({'display' : 'none'}) 
  });
});
$(document).ready(function(){
  $("#nav-list-item-base").click(function() {
      $(".nav-front-L").css({'margin-left' : '945px', 'width' : '107px'})
      $("#roofing").css({'display' : 'none'})
      $("#masonry").css({'display' : 'none'})
      $("#base").css({'display' : 'block'})
  });
});

/*PORTFOLIO NAVIGATION BAR for M screen*/
$(document).ready(function(){
  $("#nav-list-item-all").click(function() {
      $(".nav-front-M").css({'margin-left' : '30px', 'width' : '120px'})
      $("#roofing").css({'display' : 'block'})
      $("#masonry").css({'display' : 'block'})
      $("#base").css({'display' : 'block'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-roof").click(function() {
      $(".nav-front-M").css({'margin-left' : '187px', 'width' : '166px'}) 
      $("#roofing").css({'display' : 'block'})
      $("#masonry").css({'display' : 'none'})
      $("#base").css({'display' : 'none'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-masonry").click(function() {
      $(".nav-front-M").css({'margin-left' : '371.5px', 'width' : '157px'})
      $("#roofing").css({'display' : 'none'})
      $("#masonry").css({'display' : 'block'})
      $("#base").css({'display' : 'none'}) 
  });
});
$(document).ready(function(){
  $("#nav-list-item-base").click(function() {
      $(".nav-front-M").css({'margin-left' : '580px', 'width' : '100px'})
      $("#roofing").css({'display' : 'none'})
      $("#masonry").css({'display' : 'none'})
      $("#base").css({'display' : 'block'})
  });
});

/*SERVICES NAVIGATION BAR*/
$(document).ready(function(){
  $("#nav-list-item-roofservices").click(function() {
      $(".services-nav-front").css({'margin-left' : '47.5px', 'width' : '190px'})
      $(".service-tab-roof").css({'display' : 'block'})
      $(".service-tab-masonry").css({'display' : 'none'})
      $(".service-tab-base").css({'display' : 'none'})
      $(".service-tab-other").css({'display' : 'none'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-masonryservices").click(function() {
      $(".services-nav-front").css({'margin-left' : '335px', 'width' : '185px'}) 
      $(".service-tab-roof").css({'display' : 'none'})
      $(".service-tab-masonry").css({'display' : 'block'})
      $(".service-tab-base").css({'display' : 'none'})
      $(".service-tab-other").css({'display' : 'none'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-baseservices").click(function() {
      $(".services-nav-front").css({'margin-left' : '657.5px', 'width' : '110px'})
      $(".service-tab-roof").css({'display' : 'none'})
      $(".service-tab-masonry").css({'display' : 'none'})
      $(".service-tab-base").css({'display' : 'block'}) 
      $(".service-tab-other").css({'display' : 'none'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-other").click(function() {
      $(".services-nav-front").css({'margin-left' : '959px', 'width' : '77px'})
      $(".service-tab-roof").css({'display' : 'none'})
      $(".service-tab-masonry").css({'display' : 'none'})
      $(".service-tab-base").css({'display' : 'none'})
      $(".service-tab-other").css({'display' : 'block'})
  });
});


/********************************************CAROUSEL*******************************/

var slideWidth=800;
$(function(){
$('.slidewrapper').width($('.slidewrapper').children().length*slideWidth);
    $('#next_slide').click(function(){
        nextSlide();
    });
    $('#prev_slide').click(function(){
        prevSlide();
       
    });
});

function nextSlide(){
    var currentSlide=parseInt($('.slidewrapper').data('current'));
    currentSlide++;
    if(currentSlide>=$('.slidewrapper').children().length) {
        $('.slidewrapper').css('left',-(currentSlide-2)*slideWidth);  
        $('.slidewrapper').append($('.slidewrapper').children().first().clone()); 
        $('.slidewrapper').children().first().remove();
        currentSlide--;                        
    }
        $('.slidewrapper').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
}

function prevSlide(){
    var currentSlide=parseInt($('.slidewrapper').data('current'));
    currentSlide--;
    if(currentSlide<0)
    {
        $('.slidewrapper').css('left',-(currentSlide+2)*slideWidth);  
        $('.slidewrapper').prepend($('.slidewrapper').children().last().clone()); 
        $('.slidewrapper').children().last().remove();
        currentSlide++;   
    }
    $('.slidewrapper').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
}

function open_mobile_menu(){
  var navbar_mobile_menu = document.getElementsByClassName("navbar-mobile-menu");
  
  var displaySetting = navbar_mobile_menu[0].style.display;
  
  if (displaySetting == 'block') { 
    navbar_mobile_menu[0].style.display = 'none';
  }
  else { 
    navbar_mobile_menu[0].style.display = 'block';
  }
  }