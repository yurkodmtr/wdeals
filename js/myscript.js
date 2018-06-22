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

	var pageBillToggleItems = function(){
		$('.pages .page_bill .phone_content .item .title').click(function(){
			if ( $(this).hasClass('act') ) {
				$(this).removeClass('act').next().slideUp();
			} else {
				$(this).addClass('act').next().slideDown();				
			}
		});
	}

	var settingsOne = function(){
		$('.pages .page_settings_1 .item .switcher b').click(function(){
			console.log(1);
			if ( $(this).parent().hasClass('act') ) {
				$(this).parent().removeClass('act');
				$(this).parent().parent().addClass('disabled');
			} else {
				$(this).parent().addClass('act');
				$(this).parent().parent().removeClass('disabled');
			}
		});
	} 


	

	$(document).ready(function(){
		settingsOne();
		menuToggle();
		pageBillToggleItems();

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