/*
#0. Preloader Logic
#1. Parallax effect for frontpage
#2. Copyrights and language
#3. Scrollbar init
#4. Vacancy page logic
#5. Contact page logic
#6. Magic for archive-portfolio page
#7.	Custom selectbox
#8. Animation for buttons
#9. soc
#10 form validation init
*/

jQuery(document).ready(function($) {
/*
#0. Preloader logic 
*/

/*
#1. Parallax effect for frontpage
*/

	$('#front-1').parallax();
	$('#front-2').parallax();
	$('#front-3').parallax();

/*
#2. Copyrights and language
*/
	var copyrightEl = $('#copyright'),
		languageEl = $('#language');

	languageEl.on('click', function() {
		copyrightEl.removeClass('active');
		$('.arow-container').removeClass('active');
		closeOpen(this);
	})

	copyrightEl.on('click', function() {
		languageEl.removeClass('active');
		$('.arow-container').removeClass('active');
		closeOpen(this);
	})

	function closeOpen(elem) {
		if ( $(elem).hasClass('active') ) {
			$(elem).removeClass('active');
			$(elem).find('.arow-container').removeClass('active');
			setTimeout( function() {
				$(elem).parents('.footer').css('z-index', "99");
			}, 500);
		} else {
			$(elem).addClass('active');
			$(elem).find('.arow-container').addClass('active');
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

	var btnContact = $('.btn'),
		formElStep = $('.contact-section .form-el');

	btnContact.each(function(index, el) {
		$(this).on('click', function(e) {
			var numData = $(this).data('formstep'),
				selectorData = "#form-el-" + numData;
			if ( numData != "send" ) {
				if ( numData != undefined ) {
					e.preventDefault();
					formElStep.removeClass('active');
					$(selectorData).addClass('active');
				}
				if ( numData == "1" ){
					e.preventDefault();
					$('#contact-success').removeClass('active');
				}
				if ( numData == "sendit" ){
					e.preventDefault();
					formElStep.removeClass('active');
					$('#contact-success').addClass('active');
					$('input, textfield').val('');
				}
			}	if ( numData == 'send' ) {
				e.preventDefault();
				$('#contact-success').addClass('active');
				$('input, textfield').val('');
			}
		})
	});
/*
#6. Magic for archive-portfolio page
*/
	$(".portfolio-archive .carousel-inner .item:first").addClass("active");

/*
#7	Custom selectbox
*/
	$(".custom-select").each(function() {
	  var classes = $(this).attr("class"),
	      id      = $(this).attr("id"),
	      name    = $(this).attr("name");
	  var template =  '<div class="' + classes + '">';
	      template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
	      template += '<div class="custom-options">';
	      $(this).find("option").each(function() {
	        template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
	      });
	  template += '</div></div>';
	  
	  $(this).wrap('<div class="custom-select-wrapper"></div>');
	  $(this).hide();
	  $(this).after(template);
	});
	$(".custom-option:first-of-type").hover(function() {
	  $(this).parents(".custom-options").addClass("option-hover");
	}, function() {
	  $(this).parents(".custom-options").removeClass("option-hover");
	});
	$(".custom-select-trigger").on("click", function() {
	  $('html').one('click',function() {
	    $(".custom-select").removeClass("opened");
	  });
	  $(this).parents(".custom-select").toggleClass("opened");
	  event.stopPropagation();
	});
	$(".custom-option").on("click", function() {
	  $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
	  $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
	  $(this).addClass("selection");
	  $(this).parents(".custom-select").removeClass("opened");
	  $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
	});

/*
#8 Animation for buttons
*/
	$('.rnd-container').each( function() {
	    $(this).on('click', function() {
	      $(this).toggleClass('active');
	    })
	  })

/*
#9 soc
*/

	var socBlock = $('#soc-block'),
		socItem = $('.soc-icons .links-hover');

	socBlock.on('hover', function() {
		
	})

	socItem.each(function() {
		$(this).hover( function() {
			$('body').addClass('darker');
			$('.img-soc.'+ $(this).data('hovershow')).addClass('active');
		}, function() {
			$('.img-soc').removeClass('active');
			$('body').removeClass('darker');
		})
	})

/*
#10 form validation init
*/
	$.validate({
		lang : 'ru'
	});


});