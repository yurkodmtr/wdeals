"use strict";

var myScript = function(){

	var headerSticky = function(){
		if ( $('.index_page .header').length < 1 ) {
			return false;
		}
		if ( $(window).scrollTop() > 0 ) {
			$('.index_page .header').addClass('sticky');
		} else {
			$('.index_page .header').removeClass('sticky');
		}
	}

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
		$('.index_page .header .mobile_menu__mid ul li a').click(function(){
			$('body').css('overflow','visible');
			$('.mobile_menu_toggle').removeClass('act');
			$('.mobile_menu').fadeOut();
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
			if ( $(this).parent().hasClass('act') ) {
				$(this).parent().removeClass('act');
				$(this).parent().parent().addClass('disabled');
			} else {
				$(this).parent().addClass('act');
				$(this).parent().parent().removeClass('disabled');
			}
		});
	} 	

	var pageStatHandler = function(){
		$('.pages .page_stat .item .title span').click(function(){
			if ( $(this).parent().parent().hasClass('act') ) {
				$(this).parent().parent().removeClass('act');
				$(this).parent().next().hide();
			} else {
				$(this).parent().parent().addClass('act');
				$(this).parent().next().show();
			}
		});
		$('.page_stat ._item_1 .descr ul li span').click(function(){			
			if ( $(this).parent().parent().parent().parent().parent().parent().hasClass('disabled') ) {
				return false;
			}
			if ( !$(this).parent().hasClass('act') ) {							
				var index = $(this).parent().index()+1;				
				$(this).parent().addClass('act').siblings().removeClass('act');	
				$('.page_stat ._item_1 .descr .descr_tabs__content_'+index).addClass('act').siblings().removeClass('act');		
			}
		});
		$('.page_stat ._item_2 .descr ul li span').click(function(){
			if ( $(this).parent().parent().parent().parent().parent().parent().hasClass('disabled') ) {
				return false;
			}
			if ( !$(this).parent().hasClass('act') ) {				
				var index = $(this).parent().index()+1;				
				$(this).parent().addClass('act').siblings().removeClass('act');	
				$('.page_stat ._item_2 .descr .descr_tabs__content_'+index).addClass('act').siblings().removeClass('act');		
			}
		});
	}

	var popupHandler = function(){
		$('._pop_open').click(function(){
			var name = $(this).attr('data-name');
			$('.pop.'+name).fadeIn();
			$('body').css({
				'position' : 'fixed',
				'overflow' : 'hidden', 
			});
		});
		$('.pop__close, ._pop_close').click(function(){
			$('.pop').fadeOut();
			$('body').css({
				'position' : 'static',
				'overflow' : 'visible', 
			});
		});
	}

	var smoothScroll = function () {
	    $('a[href*="#"]:not([href="#"])').click(function () {
	        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
	            var target = $(this.hash);
	            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

	            var offsetTop = target.offset().top;
				if ( $(window).outerWidth() <= 1300 ) {
					offsetTop -= 30;
				}
	            if (target.length) {
	                $('html, body').animate({
	                    scrollTop: offsetTop
	                }, 1000);
	                return false;
	            }
	        }
	    });
	}

	$(document).ready(function(){
		smoothScroll();
		popupHandler();
		pageStatHandler();
		settingsOne();
		menuToggle();
		pageBillToggleItems();
		headerSticky();

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
		$('.slider__page_settings_2').owlCarousel({
			loop:true,
			items:1,
			margin:0,
			nav:true
		});

	});

	$(window).load(function(){

	});

	$(window).scroll(function(){
		headerSticky();
	});
}

myScript();