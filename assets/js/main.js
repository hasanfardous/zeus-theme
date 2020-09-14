(function ($) {
"use strict";

	//* Navbar Fixed
	var nav_offset_top = $('header').height() + 50;
	/*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 400) {
    $("#sticky-header").removeClass("navbar_fixed");
    $('#back-top').fadeOut(500);
	} else {
    $("#sticky-header").addClass("navbar_fixed");
    $('#back-top').fadeIn(500);
	}
});

// back to top 
$('#back-top a').on("click", function () {
  $('body,html').animate({
    scrollTop: 0
  }, 1000);
  return false;
});

// #######################
//   MOBILE MENU          
// #######################

var menu = $('ul#mobile-menu');
if (menu.length) {
    menu.slicknav({
        prependTo: ".mobile_menu",
        closedSymbol: '<i class="ti-angle-down"></i>',
        openedSymbol: '<i class="ti-angle-up"></i>'
    });
};



// wow js
  new WOW().init();



})(jQuery);	

