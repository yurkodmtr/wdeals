"use strict";

var myScript = function(){

	var menuToggle = function(){
		$('.mobile_menu_toggle').click(function(){
			if ( $(this).hasClass('act') ) {
				$('body').css('overflow','visible');
				$(this).removeClass('act');
				$('.mobile_menu').fadeOut();

			} else {
				$('body').css('overflow','hidden');
				$(this).addClass('act');
				$('.mobile_menu').fadeIn();
				
			}
		});
	}


	

	$(document).ready(function(){
		menuToggle();

		$('.slider_site__carousel').owlCarousel({
			loop:true,
			items:1,
			margin:0,
			nav:true
		});
		$('.slider_result').owlCarousel({
			loop:true,
			items:1,
			margin:0,
			nav:true
		});
		$('.slider_plans').owlCarousel({
			loop:true,
			items:1,
			margin:0,
			nav:true
		});
	});

	$(window).load(function(){

	});
}

myScript();