(function($){

	'use strict';
	/*------------------
		Preloder
	--------------------*/
	$(window).on('load', function() {
		$(".loader").fadeOut();
		$("#preloder").delay(400).fadeOut("slow");
	});


	
	class FitShop {
		constructor(){
			this.mainMenu();
			this.searchModal();
			this.inforSwitch();
			this.backgroundSet();
			this.backToTop();
			this.heroSlider();
			this.reviewSlider();
			this.classesSlider();
			this.classesOtherSlider();
			this.eventOtherSlider();
			this.trainerSlider();
			this.gallerySlider();
			this.popularSlider();
			this.progressBar();
			this.videoPopup();
			this.languageSelect();
			this.circleSelect();
		}
		mainMenu(){
			$(".main-menu").slicknav({
				appendTo: '.header-section',
				allowParentLinks: true,
				closedSymbol: '<i class="fa fa-angle-right"></i>',
				openedSymbol: '<i class="fa fa-angle-down"></i>'
			});
		}
		searchModal(){

			$('#search-switch').on('click', function() {
				$('.search-model').fadeIn(400);
			});

			$('.search-close-switch').on('click', function() {
				$('.search-model').fadeOut(400,function(){
					$('#search-input').val('');
				});
			});
		}
		inforSwitch(){
			$('#infor-switch').on('click', function() {
				$('.infor-model-warp').fadeIn(400);
				$('.infor-model-warp').addClass('active');	
			});
		
			$('.infor-close').on('click', function() {
				$('.infor-model-warp').removeClass('active');
				$('.infor-model-warp').fadeOut(400);
			});
		}
		backgroundSet(){
			$('.set-bg').each(function() {
				var bg = $(this).data('setbg');
				$(this).css('background-image', 'url(' + bg + ')');
			});
		}
		backToTop(){
			$(window).scroll(function() {
				if ($(this).scrollTop() >= 500) {
					$('.back-to-top').fadeIn();
					$('.back-to-top').css('display','flex');
				} else {
					$('.back-to-top').fadeOut();
				}
			});
		
			$(".back-to-top").click(function() {
				$("html, body").animate({scrollTop: 0}, 1000);
			});
		}
		heroSlider(){
			$('.hero-slider').owlCarousel({
				loop: true,
				nav: false,
				dots: true,
				mouseDrag: false,
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				items: 1,
				autoplay: true,
				smartSpeed: 1000,
			});
		}
		reviewSlider(){
			$('.review-slider').owlCarousel({
				loop: true,
				nav: false,
				dots: true,
				items: 1,
				autoplay: true
			});
		}
		classesSlider(){
			$('.classes-slider').owlCarousel({
				loop: true,
				nav: false,
				dots: true,
				margin: 30,
				autoplay: true,
				responsive : {
					0 : {
						items: 1
					},
					768 : {
						items: 2
					},
					1170 : {
						items: 3,
					}
				},
			});
		}
		classesOtherSlider(){
			$('.classes-other-slider').owlCarousel({
				loop: true,
				nav: true,
				dots: false,
				margin: 0,
				navText:['<i class="material-icons">keyboard_arrow_left</i>','<i class="material-icons">keyboard_arrow_right</i>'],
				autoplay: true,
				responsive : {
					0 : {
						items: 1
					},
					768 : {
						items: 2
					},
				},
			});
		}
		eventOtherSlider(){
			$('.event-other-slider').owlCarousel({
				loop: true,
				nav: true,
				dots: false,
				margin: 0,
				navText:['<i class="material-icons">keyboard_arrow_left</i>','<i class="material-icons">keyboard_arrow_right</i>'],
				autoplay: true,
				responsive : {
					0 : {
						items: 1
					},
					768 : {
						items: 2
					},
				},
			});
		}
		trainerSlider(){
			$('.trainer-slider').owlCarousel({
				loop: true,
				nav: true,
				dots: false,
				navText:[' ',' '],
				autoplay: true,
				responsive : {
					0 : {
						items: 1
					},
					768 : {
						items: 1
					},
					992 : {
						items: 2,
					}
				},
			});
		}
		gallerySlider(){
			$('.gallery-slider').owlCarousel({
				loop: true,
				nav: false,
				dots: false,
				items: 6,
				responsive : {
					0 : {
						items: 2
					},
					475 : {
						items: 3
					},
					768 : {
						items: 4,
					},
					992 : {
						items: 6,
					}
				},
			});
		}
		popularSlider(){
			$('.popular-classes-widget').owlCarousel({
				loop: true,
				nav: false,
				dots: true,
				items: 1,
			});
		}
		progressBar(){
			$('.progress-bar-style').each(function() {
				var progress = $(this).data("progress");
				var bgcolor = $(this).data("bgcolor");
				var prog_width = progress + '%';
				if (progress <= 100) {
					$(this).append('<div class="bar-inner" style="width:' + prog_width + '; background: '+ bgcolor +';"><span>' + prog_width + '</span></div>');
				}
				else {
					$(this).append('<div class="bar-inner" style="width:100%; background: '+ bgcolor +';"><span>100%</span></div>');
				}
			});
		}
		videoPopup(){
			$('.video-popup').magnificPopup({
				type: 'iframe'
			});
		}
		languageSelect(){
			$('#language').niceSelect();
		}
		circleSelect(){
			$('.circle-select').niceSelect();
		}
		eventDatePicker(){
			$( ".event-date" ).datepicker();
		}
	}
	

	const initiateProgram = ()=>{
		new FitShop;
	}
	
	$(document).ready( initiateProgram );
	
})(jQuery);