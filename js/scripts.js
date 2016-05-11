var app = {};

// Start of code for smooth scroll
app.sScroll = function(){
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

	$('#menu-item-136 a').on('click', function (){
		$('html, body').animate ({
			scrollTop: $("#services").offset().top
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
}; // end of code fo smooth scroll

// start of code for sticky top nav
app.stickyNavTop = $('.navContainer').offset().top;
app.stickyNav = function(){
	app.scrollTop = $(window).scrollTop();      
	if (app.scrollTop > app.stickyNavTop) { 
		$('.navContainer').addClass('sticky');
		$('.menu').addClass('navDown');
		$('.menu-item').addClass('navPadding');
		$('.logo').addClass('logo2');
	} else {
		$('.navContainer, .logo').removeClass('sticky');
		$('.menu').removeClass('navDown'); 
		$('.logo').removeClass('logo2');
		}
	};
	 
	$(window).scroll(function() {
	    app.stickyNav();
	});
// end of code for sticky top nav

// start of code for rotating logo
app.spin = function(){
	var scrollPercentRounded = 0;
	$(window).scroll(function() {
	  var scrollTop = $(window).scrollTop();
	  var docHeight = $(document).height();
	  var winHeight = $(window).height();
	  var scrollPercent = (scrollTop) / (docHeight - winHeight);
	   scrollPercentRounded = Math.round(scrollPercent*360);
	  $('.logo').css({ transform: 'rotate(' + scrollPercentRounded + 'deg)' });
	});

	$('.logo').on('click', function(){
		$('.navContainer').toggleClass('hamburgerMenu');
		$('.logo').toggleClass('logoMenu');
		$('.menu li').toggleClass('hamMenu');
		console.log("clicked")
	});
}; // end of code for rotating logo

// start of code for scroll reveal 
app.reveal = function(){
	window.sr = ScrollReveal({ reset: false});
		sr.reveal('.icons', { duration: 1500, scale: 0.3});
		sr.reveal('.serviceCaption', {duration:1500, scale: 0.7});
		sr.reveal('.portImage', {duration:1500, scale: 0.7});
		sr.reveal('.contactCaption', {duration: 1000});	
}; // end of code for scroll reveal 


app.init = function(){
	app.sScroll();
	app.spin();
	app.reveal();
};

$(function(){
	app.init();
	$(".rotate").textrotator({
        animation: "dissolve",
        separator: ",",
   		speed: 2000
    });
});