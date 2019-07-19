(function($) {
	"use strict"; // Start of use strict

	$('#tabUno').on('click', function(event) {
		event.preventDefault();
		$(this).addClass('active');
		$('#lealtad-tab').addClass('acti');
		$('#tabDos,#tabTres,#tabCuatro').removeClass('active');
		$('#identimovil-tab,#identinet-tab,#mantenimiento-tab').removeClass('acti');
	});

	$('#tabDos').on('click', function(event) {
		event.preventDefault();
		$(this).addClass('active');
		$('#identimovil-tab').addClass('acti');
		$('#tabUno,#tabTres,#tabCuatro').removeClass('active');
		$('#lealtad-tab,#identinet-tab,#mantenimiento-tab').removeClass('acti');
	});

	$('#tabTres').on('click', function(event) {
		event.preventDefault();
		$(this).addClass('active');
		$('#identinet-tab').addClass('acti');
		$('#tabDos,#tabUno,#tabCuatro').removeClass('active');
		$('#identimovil-tab,#lealtad-tab,#mantenimiento-tab').removeClass('acti');
	});

	$('#tabCuatro').on('click', function(event) {
		event.preventDefault();
		$(this).addClass('active');
		$('#mantenimiento-tab').addClass('acti');
		$('#tabDos,#tabTres,#tabUno').removeClass('active');
		$('#identimovil-tab,#identinet-tab,#lealtad-tab').removeClass('acti');
	});

	$(".scroll").click(function(event) {
		event.preventDefault();
		$('html,body').animate({
			scrollTop: $(this.hash).offset().top
		}, 1500);
	});

})(jQuery); // End of use strict