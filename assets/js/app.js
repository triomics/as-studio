/*

#1. Parallax effect for frontpage
#2. Copyrights and language
#3. Scrollbar init
#4. Vacancy page logic
#5. Contact page logic
*/

jQuery(document).ready(function($) {
/*
#1. Parallax effect for frontpage
*/

	$('#front-1').parallax();
	$('#front-2').parallax();

/*
#2. Copyrights and language
*/
	var copyrightEl = $('#copyright'),
		languageEl = $('#language');

	languageEl.on('click', function() {
		copyrightEl.removeClass('active');
		closeOpen(this);
	})

	copyrightEl.on('click', function() {
		languageEl.removeClass('active');
		closeOpen(this);
	})

	function closeOpen(elem) {
		if ( $(elem).hasClass('active') ) {
			$(elem).removeClass('active');
			setTimeout( function() {
				$(elem).parents('.footer').css('z-index', "99");
			}, 500);
		} else {
			$(elem).addClass('active');
			$(elem).parents('.footer').css('z-index', "500");
		}
	}

/*
#3. Scrollbar init
*/
	$('#giveScroll').mCustomScrollbar();
/*
#4. Vacancy page logic
*/

	var btnVacancy = $('.vacancy-section .btn'),
		screenStep = $('.screen-step');

	btnVacancy.each(function(index, el) {
		$(this).on('click', function() {
			var num = $(this).data('goto'),
				selector = "#screen-" + num;
			if (num != undefined) {
				screenStep.removeClass('active');
				$(selector).addClass('active');
			}
		})	
	});

/*
#5. Contact page logic
*/

	var btnContact = $('.contact-section .btn'),
		formElStep = $('.contact-section .form-el');

	btnContact.each(function(index, el) {
		$(this).on('click', function(e) {
			var numData = $(this).data('formstep'),
				selectorData = "#form-el-" + numData;
			if ( numData != "send" ) {
				e.preventDefault();
				if ( numData != undefined ) {
					formElStep.removeClass('active');
					$(selectorData).addClass('active');
				}
				if ( numData == "1" ){
					$('#contact-success').removeClass('active');
				}
			}	else {
				e.preventDefault();
				$('#contact-success').addClass('active');
				$('input, textfield').val('');
			}
		})
	});
});