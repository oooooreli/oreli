
/* VISIBLE */
function checkVisible( elm, eval ) {
    eval = eval || "visible";
    var vpH = jQuery(window).height(), // Viewport Height
        st = jQuery(window).scrollTop(), // Scroll Top
        y = jQuery(elm).offset().top,
        elementHeight = jQuery(elm).height();
    
    if (eval == "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));
    if (eval == "above") return ((y < (vpH + st)));
}


/* PARALLAXE */
function parallax(){
  var scrolled = jQuery(window).scrollTop();
  jQuery('.parallaxe').css('top',-(scrolled*0.2)+'px');
}



jQuery(window).scroll(function() {

  /* Declenche element au scroll */  
  	jQuery('section .o_title, .anime').each(function(){		
  	   if (checkVisible(jQuery(this))) {
  			jQuery(this).addClass("spl--p").delay( 800 );
  			jQuery(this).find('.spl--letter').css({"transform":"matrix(1, 0, 0, 1, 0, 0)","filter":"blur(0)"});
  		}
  	});   

    /* Declenche element au scroll */  
    jQuery('section .projet--infos-dom,section .projet--infos-techno').each(function(){   
       if (checkVisible(jQuery(this))) {
        jQuery(this).css({ "animation":"starter 1.5s"});
      
      }
    });


        /* Declenche element au scroll */  
    jQuery('.projet').each(function(){   
       if (checkVisible(jQuery(this))) {
        jQuery(this).removeClass("projet--waiting"); 

      }
    }); 

// if (window.matchMedia("(min-width: 800px)").matches) {
//   parallax();    
// }

});



( function( $ ) {


$('.home').addClass('tilt');
$('.tilt .projet').on('click', function()   {
  $('.home').removeClass('tilt');
});


/* SCROLLIFFY */
// $.scrollify({
// 		section : ".page-template-tpl-home.tilt .slide",
// 		sectionName : "section-name",
// 		interstitialSection : "",
// 		easing: "easeOutExpo",
// 		scrollSpeed: 1000,
// 		offset : 0,
// 		scrollbars: true,
// 		standardScrollElements: "",
// 		setHeights: true,
// 		overflowScroll: true,
// 		updateHash: true,
// 		touchScroll:true,
// 		before:function() {},
// 		after:function() {},
// 		afterResize:function() {},
// 		afterRender:function() {}
// 	});


			
/* LETTER */
			
/* LETTER */
$('.o_title, .anime').each(function () {
    var characters = $(this).text().split(" ");
    $this = $(this);
    $this.empty();
    $.each(characters, function (i, el) {
    $this.append("<span class='spl--word'>" + el + "</span");
    });
});

$('.spl--word').each(function () {
    var characters = $(this).text().split("");
    $this = $(this);
    $this.empty();
    $.each(characters, function (i, el) {
    $this.append("<span class='spl--letter'>" + el + "</span");
    });
});










/* MENU */
	$( ".site-header--hamburger" ).click(function() {
	 	$(".site-header--menu-content").toggleClass('active');
	});
	$( ".site-header--menu-content a" ).click(function() {
	 	$(".site-header--menu-content").toggleClass('active');
	});
	$('.o_nav-icon').click(function(){
		$(this).toggleClass('open');
	});











} )( jQuery );







    jQuery(document).ready(function ($) {










    });