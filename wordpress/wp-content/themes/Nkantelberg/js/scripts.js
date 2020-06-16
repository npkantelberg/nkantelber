(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away

		// $(window).scroll(function(){
		// 	var scrollTop = $(window).scrollTop() / 4;
		// 	var firstScrollTop = $(window).scrollTop() / 2;
			
		// 	var firstImgTop = "calc(5% - " + firstScrollTop + "px)";
		// 	$('.hero-background-sky').css("background-position-y", firstScrollTop);

		// 	var secondImgTop = "calc(40% + " + scrollTop + "px)";
		// 	$('.hero-background-mountains').css("background-position-y", secondImgTop);

		// 	var thirdImgTop = "calc(40% - " + scrollTop + "px)";
		// 	$('.hero-background-trees').css("background-position-y", thirdImgTop);
		// });
});
$(document).ready(function(){
	$('.logo-img').on('click', function(){
		$('.hero-half-left').toggleClass('hero-half-left-active');
		$('.hero-half-right').toggleClass('hero-half-right-active');
	});
	$('#menu-main-menu .home').on('click', function(e){
		$('.homepage-content-wrapper').removeClass('active');
		$('.hero-half-left').removeClass('hero-half-left-active');
		$('.hero-half-right').removeClass('hero-half-right-active');
		$('.header').removeClass('header-active');
		e.preventDefault();
	});
	$('#menu-main-menu .about').on('click', function(e){
		$('.about-wrapper').toggleClass('active');
		$('.hero-half-left').toggleClass('hero-half-left-active');
		$('.hero-half-right').toggleClass('hero-half-right-active');
		$('.header').toggleClass('header-active');
		e.preventDefault();
	});
	$('#menu-main-menu .work').on('click', function(e){
		$('.previous-work-wrapper').toggleClass('active');
		$('.hero-half-left').toggleClass('hero-half-left-active');
		$('.hero-half-right').toggleClass('hero-half-right-active');
		$('.header').toggleClass('header-active');
		e.preventDefault();
	});
	$('#menu-main-menu .contact').on('click', function(e){
		$('.contact-wrapper').toggleClass('active');
		$('.hero-half-left').toggleClass('hero-half-left-active');
		$('.hero-half-right').toggleClass('hero-half-right-active');
		$('.header').toggleClass('header-active');
		e.preventDefault();
	});
})
	

})(jQuery, this);


