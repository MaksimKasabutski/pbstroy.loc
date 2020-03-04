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




/*SERVICES NAVIGATION BAR for L screen*/
$(document).ready(function(){
  $("#nav-list-item-roofservices").click(function() {
      $(".nav-front-L-services").css({'margin-left' : '90px', 'width' : '195px'})
      $(".service-tab-roof").css({'display' : 'block'})
      $(".service-tab-masonry").css({'display' : 'none'})
      $(".service-tab-base").css({'display' : 'none'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-masonryservices").click(function() {
      $(".nav-front-L-services").css({'margin-left' : '471.5px', 'width' : '185px'}) 
      $(".service-tab-roof").css({'display' : 'none'})
      $(".service-tab-masonry").css({'display' : 'block'})
      $(".service-tab-base").css({'display' : 'none'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-baseservices").click(function() {
      $(".nav-front-L-services").css({'margin-left' : '882.5px', 'width' : '115px'})
      $(".service-tab-roof").css({'display' : 'none'})
      $(".service-tab-masonry").css({'display' : 'none'})
      $(".service-tab-base").css({'display' : 'block'}) 
  });
}); 

/*SERVICES NAVIGATION BAR for M screen*/
$(document).ready(function(){
  $("#nav-list-item-roofservices").click(function() {
      $(".nav-front-M-services").css({'margin-left' : '36px', 'width' : '166px'})
      $(".service-tab-roof").css({'display' : 'block'})
      $(".service-tab-masonry").css({'display' : 'none'})
      $(".service-tab-base").css({'display' : 'none'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-masonryservices").click(function() {
      $(".nav-front-M-services").css({'margin-left' : '277.75px', 'width' : '157px'}) 
      $(".service-tab-roof").css({'display' : 'none'})
      $(".service-tab-masonry").css({'display' : 'block'})
      $(".service-tab-base").css({'display' : 'none'})
  });
});
$(document).ready(function(){
  $("#nav-list-item-baseservices").click(function() {
      $(".nav-front-M-services").css({'margin-left' : '544.5px', 'width' : '99px'})
      $(".service-tab-roof").css({'display' : 'none'})
      $(".service-tab-masonry").css({'display' : 'none'})
      $(".service-tab-base").css({'display' : 'block'}) 
  });
}); 

function open_mobile_menu(){
  var navbar_mobile_menu = document.getElementsByClassName("navbar");
  
  var displaySetting = navbar_mobile_menu[0].style.display;
  
  if (displaySetting == 'block') { 
      navbar_mobile_menu[0].style.display = 'none';
  }
  else { 
      navbar_mobile_menu[0].style.display = 'block';
  }
  }