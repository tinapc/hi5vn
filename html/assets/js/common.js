$(document).ready(function(){

	//Show/Hide List Choose Places
	$('.drop-down-list-places').click(function(){
		$('#list-choose-places').slideToggle();
		$('#list-choose-places').toggleClass('expand');
	});

	// Fixed top main nav
	$(window).scroll(function(event) {
		if($(this).scrollTop() > 300) {
			$('#main-nav').addClass('navbar-fixed-top');
		} else {
			$('#main-nav').removeClass('navbar-fixed-top');
		}
	});

});
