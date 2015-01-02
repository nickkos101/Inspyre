$(document).ready(function(){


	$('.service-wrap').slick({
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		backDelay: 1000,
		arrows: true,
	});

	$('.menu .close').click(function(){
		$('.menu').slideUp();
	});

	$('header nav ul li:first-of-type').click(function(){
		$('.menu').slideToggle();
	});

	$('.video .overlay h3 span').typed({
		strings: ["Design", "Photography", "Business", "Technology", "Programming"],
		typeSpeed: 0,
		loop: true
	});

	$('.image-wrap').hover(function(){
		$(this).find('.overlay').fadeToggle();
	},function(){
		$(this).find('.overlay').fadeToggle();
	});

	// Header Replacement

	if ($('.pg-title').length) {
		$('.logo').text($('.pg-title').text());
	}
	if ($('.slogan').length) {
		$('header h2').html($('.slogan').html());
	}
	if ($('.bg-data').length) {
		var imageUrl = $('.bg-data').attr('src');
		$('.skyline').css('background-image', 'url(' + imageUrl + ')');
		$('header .bottom-content p').css('background-image', 'url(' + imageUrl + ')');
		$('header .bottom').fadeIn();
	}
	if ($('.repeat-bg').length) {
		$('header').css('background-size', 'auto')
	}
});