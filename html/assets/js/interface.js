$(document).ready(function() {
	$('.input-group-addon').click(function(){
		window.location.href ='location.html';
	});

	$('.tip textarea').focus(function(event) {
		$('#ml-login').modal('show');
	});

});


var interface = {};

interface.myFunction = function(msg) {
	alert(msg);
};