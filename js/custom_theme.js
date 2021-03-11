jQuery( document ).ready(function( $ ) {
	// Slick Slider - Home Page
	$('.sliderHome').slick({
		autoplay: true,
		autoplaySpeed: 2400,
		infinite: true,
		dots: true,
		slidesToShow: 1,
		touchMove: true,
		slidesToScroll: 1,
		element: 'div',
		adaptiveHeight: true,
		responsive: [
			{
			breakpoint: 640,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: false
				}
			}
		]
	});
});
