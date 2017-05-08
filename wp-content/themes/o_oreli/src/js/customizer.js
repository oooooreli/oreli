/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {
/* MENU */
	$( ".site-header--menu" ).click(function() {
	 	$(".site-header--menu-main").toggleClass('active');
	});
	$('.o_nav-icon').click(function(){
		$(this).toggleClass('open');
	});




} )( jQuery );

