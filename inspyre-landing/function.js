jQuery(document).ready(function(){
	jQuery('.examples').slick({
		dots: false,
		infinite: true,
		speed: 500,
		fade: true,
		arrows: false,
		slide: 'div',
		cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 2000
	});

	function scrollY() {
		return window.pageYOffset || document.documentElement.scrollTop;
	}

	$(window).scroll(function () {

		if (scrollY() > 10) {
			$('header .page-title').addClass('blacken');
		}
		else {
			$('header .page-title').removeClass('blacken');
		}
	});

});