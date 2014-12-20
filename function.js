$(document).ready(function(){


	$('.service-wrap').slick({
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: true,
	});

	$('.menu .close').click(function(){
		$('.menu').slideUp();
	});

	$('header nav ul li').click(function(){
		$('.menu').slideToggle();
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
	}
});