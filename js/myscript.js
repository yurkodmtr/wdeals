"use strict";

var myScript = function(){


	$(window).load(function(){

	});

	$(document).ready(function(){
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
	});
}

myScript();