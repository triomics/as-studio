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
#10. form validation init
#11. countdown
#12. Mobile logic for burger
#13. Moving footer items to sidebar
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
	var copyrightEl = $('.footer #copyright'),
		languageEl = $('.footer #language');

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
	$('#giveScroll').mCustomScrollbar( {
		scrollbarPosition: 'inside'
	});
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
				if ( num == '4' ) {
					$('#soc-block').css('z-index', '-1');
				} 

				if ( $(this).hasClass('close-btn') ) {
					setTimeout( function() {
						$('#soc-block').css('z-index', '999');
					}, 300);
				}

				if ( $(this).hasClass('secondary-btn') ) {
					$('#screen-2 .back-btn, #screen-3 .back-btn, #screen-6 .back-btn').css('opacity', '1');
				}
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
			var numData = $(this).attr('data-formstep'),
				selectorData = "#form-el-" + numData;

			if ( numData != "send" ) {
				if ( numData != undefined ) {
					e.preventDefault();
					formElStep.removeClass('active');
					if ( $(this).hasClass('back-btn') ) {
						if ( numData <= "1" ) {
							console.log('false');
							$('#set-step').attr('data-formstep', numData);
							$("#form-el-" + (numData)).addClass('active');
							$('.back-btn').css('opacity', '0');
						} else if ( numData == "2") {
							$('.back-btn').css('opacity', '0');
							$('#set-step').attr('data-formstep', numData - 1);
							$("#form-el-" + (numData - 1 )).addClass('active');
						} else {
							$('#set-step').attr('data-formstep', numData - 1);
							$("#form-el-" + (numData - 1 )).addClass('active');
						}
						console.log("#form-el-" + (numData - 1 ));
					} else {
						$(selectorData).addClass('active');
						$('.back-btn').css('opacity', '1');
						$('#set-step').attr('data-formstep', numData);
						$('#soc-block').css('z-index', '999');
					}
					console.log('1');
				} else {
					if ( !btnContact.hasClass('soc-btn') ) {
						formElStep.removeClass('active');
						$("#form-el-" + $('#set-step').data('formstep')).addClass('active');
						$('#set-step').attr('data-formstep', $('#set-step').data('formstep')); 
						console.log(2)
					}
				}
				if ( numData == "1" ){
					e.preventDefault();
					$('#contact-success').removeClass('active');
					$('.back-btn').css('opacity', '0');
					$('#soc-block').css('z-index', '999');
					console.log('3 b');
				}

				if ( numData == "sendit" ){
					e.preventDefault();
					formElStep.removeClass('active');
					$('#contact-success').addClass('active');
					$('input, textfield').val('');
					$('#soc-block').css('z-index', '-1');
					console.log('4');
				}
			}	if ( numData == 'send' ) {
				e.preventDefault();
				$('#contact-success').addClass('active');
				$('input, textfield').val('');
				$('#soc-block').css('z-index', '-1');
				console.log('5');
			}
		})
	});
/*
#6. Magic for archive-portfolio page
*/
	$(".portfolio-archive .carousel-inner .item:last-child").addClass("active");

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
		console.log(device.mobile());

	if ( device.mobile() ) {
		socBlock.click( function() {
			event.stopPropagation();
			$('body').addClass('darker');
			$(this).addClass('move');
		});
		$(window).click(function() {
			$('body').removeClass('darker');
			socBlock.removeClass('move');
		});
	} else {
		/*socBlock.hover( function() {
			$('body').addClass('darker');
		}, function() {
			$('body').removeClass('darker');
		})*/
	}

	socItem.each(function() {
		$(this).hover( function() {
			$('body').addClass('darker');
			if ($(window).width() > '900') {
				$( '.img-soc.' + $(this).data('hovershow') ).addClass('active');
			}
		}, function() {
			$('.img-soc').removeClass('active');
			$('body').removeClass('darker');
		})
	})

/*
#10 form validation init
*/
/*	$.validate({
		lang : 'ru'
	});*/

/*#11 countdown*/

	   $('#time-wrapper>.row').countdown('2016/10/10', function(event) {
	  var $this = $(this).html(event.strftime(''
	    + '<div class="col-md-3 col-xs-3"><div class="count count-days">%D</div><div class="name">Дней</div></div>'
	    + '<div class="col-md-1 col-xs-1"><div class="divider"><div class="count">:</div></span></div></div>'
	    + '<div class="col-md-3 col-xs-3"><div class="count count-hours">%H</div><div class="name">Часов</div></div>'
	    + '<div class="col-md-1 col-xs-1"><div class="divider"><div class="count">:</div></span></div></div>'
	    + '<div class="col-md-3 col-xs-3"><div class="count count-minutes">%M</div><div class="name">Минут</div></div>'
	    + '<div class="col-md-1 col-xs-1"><div class="divider"><div class="count">:</div></span></div></div>'
	    + '<div class="col-md-3 col-xs-3"><div class="count count-seconds">%S</div><div class="name">Секунд</div></div>'
	  ));
	}).on('update.countdown', function() {
		/*$('.count-seconds').css('transform', 'rotateX(-90deg)');
    	setTimeout(function() {
    		$('.count-seconds').css('transform', 'rotateX(0deg)');
    	}, 300);
    	setTimeout(function() {
    		$('.count-seconds').css('transform', 'rotateX(90deg)');
    	}, 600);*/

    	
    	setTimeout(function() {
    		$('.divider').css('opacity', 0);
    	}, 300);
    	setTimeout(function() {
    		$('.divider').css('opacity', 1);
    	}, 600);
  });

/*
#12. Mobile logic for burger 
*/
var mobileMenu = $('#mobileMenu');

mobileMenu.on('click', function() {
	$(this).toggleClass('open');
	$('.social-icon-btn .soc-btn').toggleClass('mobile-menu-open');
	$('.social-icon-btn .soc-btn').parent('#soc-block').toggleClass('hide-soc');
})

/*
#13. Moving footer items to sidebar
*/

if ( $(window).width() < '900' ) {
	$('#language').appendTo(".sidebar-widget.side-content");
	$('#copyright').appendTo(".sidebar-widget.side-content");
}

});

