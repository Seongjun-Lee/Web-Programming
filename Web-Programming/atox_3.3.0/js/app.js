jQuery(document).ready(function($) {

	// SLIDER
	//---------------------------

	if ($('.flexslider').length > 0)
	{
		$('.flexslider').flexslider({
			animation: 'fade',
			pauseOnHover: true,
			prevText: '',
			nextText: '',
			controlsContainer: $('#teaser-controls')
		});
	}


	// FEATURED CARS
	//---------------------------

	$('.f-cars__item').hover(function() {
		$('.f-cars__item__info', this).stop(true, true).fadeIn('fast');
	}, function() {
		$('.f-cars__item__info', this).stop(true, true).fadeOut('fast');
	});


	// NAVBAR TOGGLE
	//---------------------------

	$('.nav-toggle').click(function(e)
	{
		e.preventDefault();
	});


	// UTILITIES
	// --------------------------

	// inventory menu dropdown
	$('.m_login .dropdown-menu, .m_login .dropdown-menu input, .m_login .dropdown-menu label, .m_login .dropdown-menu a').click(function(e)
	{
		e.stopPropagation();
	});
});