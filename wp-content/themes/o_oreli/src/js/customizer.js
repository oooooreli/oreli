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
  jQuery('.parallaxe--bottom').css('bottom',(scrolled*0.02)+'px');
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
    jQuery('.section--portfolio').each(function(){   
       if (checkVisible(jQuery(this))) {
          $(".triangle").css({'opacity':'0'});
      }
    });  




 
   
if (window.matchMedia("(min-width: 800px)").matches) {
  parallax();    
}
});


( function( $ ) {
function o_scrollify(){
$.scrollify({
    section : "body.tilt .slide",
    sectionName : "section-name",
    interstitialSection : "",
    easing: "easeOutExpo",
    scrollSpeed: 1000,
    offset : 0,
    scrollbars: true,
    standardScrollElements: "",
    setHeights: true,
    overflowScroll: true,
    updateHash: true,
    touchScroll:true,
    before:function() {
      $(".triangle").toggleClass('ici');
      $(".triangle").toggleClass('plusla');
    },
    after:function() {
      $(".triangle").css({'opacity':'1'});
    },
    afterResize:function() {console.log('c');},
    afterRender:function() {console.log('d');}
  });
}


  $('.home').addClass('tilt');
o_scrollify();


/* NEW CARD EXPAND */







$('.projet .tilter').on('click', function() {

jQuery('.projet').each(function(){   
   $(this).find('span').toggleClass('remove');
}); 
  $('.home').toggleClass('body--close');
  $.scrollify.disable();
  $(this).parent().find('.projet__complete').toggleClass('reveal');


});


$('.projet .closet').on('click', function() {
 setTimeout(function(){
  // alert("Hello"); 
  $('.home').toggleClass('body--close');

}, 800);

  $.scrollify.enable();
  $('.projet__complete').removeClass('reveal');

jQuery('.projet').each(function(){   
   $(this).find('span').toggleClass('remove');
}); 



});












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
