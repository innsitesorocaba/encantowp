function formErrorMessages() {
	var messageAlerts = window.location;
	messageAlerts = messageAlerts.search;
	messageAlerts = messageAlerts.replace('?', '');

	var messages = {
		errorForm: {
			"message": "Olá, houve um erro ao enviar seu e-mail, poderia vericar por favor os campos?"
		},
		successForm: {
			"message": "Seu e-mail foi enviado com sucesso"
		}
	};

	if (messageAlerts) {
		if (messageAlerts == 'errorform') {
			$('#messages').addClass('showMessage');
			$('#messages').addClass('error');
			$('#messages').html(messages.errorForm.message);
		} else {
			$('#messages').addClass('showMessage');
			$('#messages').addClass('success');
			$('#messages').html(messages.successForm.message);
		}
		
	}
}

function mobileMenu() {
	$('#mobile-toggle').click(function() {
		state = $('.mobile-menu').attr('id');

		if (state == 'true') {
			$('.mobile-menu').attr('id', false);
			$('.mobile-menu').removeClass('animated slideInLeft');
			$('.mobile-menu').addClass('animated slideOutLeft');
		} else {
			$('.mobile-menu').attr('id', true);
			$('.mobile-menu').removeClass('animated slideOutLeft');
			$('.mobile-menu').addClass('animated slideInLeft');
		}

		
	});
}

$(document).ready(function() {
	$('#banner').bxSlider({
		slideMargin: 0,
		infiniteLoop: true,
		auto: true,
		pause: 3200
	});

	var offset = $('#startFixedHere').offset().top;
	var $myHeader = $('header');
	$(window).on('scroll', function() {
		if ($(window).scrollTop() >= offset) {
			$($myHeader).addClass('fixed');
		} else {
			$($myHeader).removeClass('fixed');
		}
	});

	$("#telefone-input").mask("(99) 9999-99999");

	formErrorMessages();

	mobileMenu();


});