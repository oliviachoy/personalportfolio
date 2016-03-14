$(function(){

	console.log("It's working");


	$('#menu-item-13 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#about").offset().top
		}, 1000);
	});

	$('#menu-item-14 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#skills").offset().top
		}, 1000);
	});

	$('#menu-item-70 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#portfolio").offset().top
		},1000);
	});

	$('#menu-item-12 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#contact").offset().top
		}, 2000);
	});


	var stickyNavTop = $('.navContainer').offset().top;
	 console.log('hello')
	var stickyNav = function(){
	var scrollTop = $(window).scrollTop();
	      
	if (scrollTop > stickyNavTop) { 
	    $('.navContainer').addClass('sticky').fadeIn('slow');
	    $('.menu').addClass('navDown').fadeIn();
	    $('.menu-item').addClass('navPadding');
	    $('.logo').addClass('logo2');
	} else {
	    $('.navContainer, .logo').removeClass('sticky');
	    $('.menu').removeClass('navDown'); 
	    $('.logo').removeClass('logo2');
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
	    stickyNav();
	});
	
	$(".rotate").textrotator({
        animation: "dissolve",
        separator: ",",
   		speed: 2000
    });

	window.sr = ScrollReveal({ reset: true});
	sr.reveal('.aboutImage', { duration: 1500, scale: 0.5});
	sr.reveal('.icons', { duration: 1500, scale: 0.3});
	sr.reveal('.contactCaption', {duration: 1000});
	
});


