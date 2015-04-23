$(document).ready(function() {
	$('.input-group-addon').click(function(){
		var id_place = $('#find_place').val();
		window.location.href = BASE_URL + 'location/' + id_place;
	});

	$('.tip textarea').focus(function(event) {
		$('#ml-login').modal('show');
	});

});


var interface = {};

interface.myFunction = function(msg) {
	alert(msg);
};