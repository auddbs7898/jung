$(function () {
	var playing = false;
	var winW;
	var winH;
	var $sectionWrap = $(".sectionWrap");
	var $section = $(".section");
	var sectionActive = 0;
	var footHeight;
	if($section.width() <= 720) {
		$('body').addClass('mo')
	}else if($section.width() > 720 && $section.width() <= 1100 ) {
		// topBannInit()
		$('body').removeClass('mo')
		$('body').addClass('tablet');
	}else if($section.width() > 1100 ) {
		// topBannInit()
		$('body').removeClass('mo')
		$('body').removeClass('tablet');
	};

	// $(window).load(function() {
	// 	topBannInit()
	// });

	// function topBannInit() {
	// 	var h = $('.headerWrap .header').height();
	// 	$('.mainVisual').css({paddingTop:h})
	// }
	if( $(".headBannerArea").length ) {
		$('.mainVisual').addClass('topBann');

		$('.headBannerArea .responsive').slick({
			dots: true,
			autoplay: true,
			autoplaySpeed: 5000
		});

		$(window).load(function() {
			$('.headBannerArea .responsive .slick-dots').wrap("<div class='slickDotsWrap'></div>").append("<div class='player'><button type='button'>멈춤</button></div>")
		});

		$(document).on('click', '.headBannerArea .slickDotsWrap .player button', function(event) {
			event.preventDefault();
			if ($(this).parent().is('.stop')) {
				$(this).parent().removeClass('stop');
				$('.headBannerArea .responsive').slick('slickPlay');
				$('.headBannerArea .slickDotsWrap .player button').text('재생');
			} else {
				$(this).parent().addClass('stop');
				$('.headBannerArea .responsive').slick('slickPause');
				$('.headBannerArea .slickDotsWrap .player button').text('멈춤');
			}
		});

		var topBannGutter = 0;
		if( $("body").hasClass('tablet') ) {
			topBannGutter = 257;
		} else {
			topBannGutter = 307;
		}


		$('.headBannerArea .topButton button').on('click', function(event) {
			event.preventDefault();
			if( $(this).hasClass('close') ) {
				$(this).removeClass('close');
				$('.mainVisual').addClass('topBann');
				$('.headBannBx').show()
				$(this).text('닫기');
			} else {
				$(this).addClass('close')
				$(this).text('열기');
				$('.mainVisual').removeClass('topBann');
				$('.headBannBx').hide();
			}
			
		});

	}



	//최초 세팅
	resize(true);
	init();
	gnb();
	//윈도우 리사이즈
	var resizeTiming;
	$(window).resize(function () {
		if($section.width() <= 720) {
			$('body').addClass('mo')
		}else if($section.width() > 720 && $section.width() <= 1100 ) {
			// topBannInit()
			$('body').removeClass('mo')
			$('body').addClass('tablet');
		}else if($section.width() > 1100 ) {
			// topBannInit()
			$('body').removeClass('mo')
			$('body').removeClass('tablet');
		};
		//clearTimeout(resizeTiming);
		//resizeTiming = setTimeout(function () {
							//	resize();
		//}, 10);
		resize();
	});


	$('.mainVisual .responsive').slick({
		dots: true,
		autoplay: true,
		autoplaySpeed: 5000
	});

	$(window).load(function() {
		$('.mainVisual .responsive .slick-dots').wrap("<div class='slickDotsWrap'></div>").append("<div class='player'><button type='button'>멈춤</button></div>")
	});

	$(document).on('click', '.mainVisual .slickDotsWrap .player button', function(event) {
		event.preventDefault();
		if ($(this).parent().is('.stop')) {
			$(this).parent().removeClass('stop');
			$('.mainVisual .responsive').slick('slickPlay');
			$('.mainVisual .slickDotsWrap .player button').text('재생');
		} else {
			$(this).parent().addClass('stop');
			$('.mainVisual .responsive').slick('slickPause');
			$('.mainVisual .slickDotsWrap .player button').text('멈춤');
		}
	});

	function init() {
		var sectionMany = $section.length - 1;
		$(document).mousewheel(function (event, delta) {
			if ( !$('body').is('.mo') && !$('body').is('.tablet')) {
				if (!playing && !$("body").hasClass("dim")) {
					playing = true;
					if (delta == -1) {
						if (sectionActive < sectionMany) {
							sectionActive = sectionActive + 1;
						} else {
							setTimeout(function () {
								playing = false;
							}, 100)
							return;
						}
					}
					if (delta == 1) {
						if (sectionActive == 0) {
							setTimeout(function () {
								playing = false;
							}, 100)
							return;
						} else {
							sectionActive = sectionActive - 1;
						}
					}
					$(".btn_event_close").click();
					sectionAnimating(sectionActive, 700);
				}
			}
		});
		$(".mainStep ul li a").click(function (e) {
			e.preventDefault();
			var idx = $(this).closest("li").index();
			sectionAnimating(idx, 700);
			var focusItem = setTimeout(function () {
				$('.section').eq(idx).focus()
			}, 750);
		})
		
		$(".btn_main_down").click(function (e) {
			e.preventDefault();
			if (sectionActive < sectionMany) {
				sectionAnimating(sectionActive + 1, 700);
			}
		})
		$(".btn_main_up").click(function (e) {
			e.preventDefault();
			if (sectionActive != 0) {
				sectionAnimating(sectionActive - 1, 700);
			}
		})
		$(".btn_main_top").click(function (e) {
			e.preventDefault();
			sectionAnimating(0, 700);
		})
		$(".btnAllmenu").click(function (e) {
			if ( !$('body').is('.mo')){
				sectionAnimating(0, 700);
			}
		})

		sectionAnimating(0, 0);
	}
	//섹션 움직일시 모션 제어
	function sectionAnimating(active, speed) {
		//휠모션시 이벤트 닫기
		//공통 모션
		sectionActive = active;
		$(".section").eq(active).focusin(function(){
			sectionActive = $(this).index();
		})
		if (sectionActive != 2) {
			$(".mainWrap").attr("class", "mainWrap section" + (sectionActive));
		}
		$(".sectionWrap").attr("class", "sectionWrap section" + (sectionActive));
		$(".mainStep a").blur();
		$section.css("z-index", 9);
		$section.eq(active).css("z-index", 10).addClass("active");
		var top = -winH * active;
		if (sectionActive < 4) {
		}else {
			top = -((winH * (active - 1)) + footHeight);
		}
		$(".sectionWrap").stop().animate({ top: top }, {
			duration: speed,
			easing: "easeInOutCubic",
			complete: function () {
				playing = false;
				$(".section").filter(function (index) {
					return index != active;
				}).removeClass("active");
				if (sectionActive == 2) {
					$(".mainWrap").attr("class", "mainWrap section" + (sectionActive));
				}
				if (!$("html").hasClass("init")) {
					$("html").addClass("init");
					resize(true);
				} else {
					resize();
				}
				if (sectionActive == 0) {
					$(".mainStep").addClass('step01');
				} else {
					$(".mainStep").removeClass('step01');
				}
				if (sectionActive < 4) {
					$(".mainStep li").removeClass("on").eq(active).addClass("on");
				}
			}
		});
		if (sectionActive == 0) {
			if(!$("body").is('.tablet') && !$("body").is('.mo')) {
				$(".topMenuWrap").stop().slideDown({
					duration: 500,
					easing: "easeInOutCubic"
				});
				$(".mainStep").show().stop().animate({ left: "50%", opacity: 1 }, {
					duration: 1000,
					easing: "easeInOutCubic"
				});
			}
			 
			
			
		} else {
			if(!$("body").is('.tablet') && !$("body").is('.mo')) {
				$(".topMenuWrap").stop().slideUp({
					duration: 500,
					easing: "easeInOutCubic"
				});
				$(".mainStep").show().stop().animate({ left: "50%", opacity: 1 }, {
					duration: 1000,
					easing: "easeInOutCubic"
				});
			}
		}
	}

	$(".section").on({
		focusin: function (e) {
			e.preventDefault();
			var idx = $(this).index();
			sectionAnimating(idx, 0);
		}
	})

	//리사이즈
	function resize(first) {
		if ( !$('body').is('.mo') && !$('body').is('.tablet')) {
			winH = $(window).height();
			if (winH <= 680) {
				winH = 680;
			}

			if (winH <= 790) {
				
				if (sectionActive != 0) {
					$(".header").stop().animate({ top: -108 }, {
						duration: 500,
						easing: "easeInOutCubic"
					});
				} else {
					$(".header").stop().animate({ top: 0 }, {
						duration: 500,
						easing: "easeInOutCubic"
					});
				}
			} else {
				
				if (sectionActive != 0) {
					$(".mainStep").addClass('step01');
					$(".header").stop().animate({ top: 0 }, {
						duration: 500,
						easing: "easeInOutCubic"
					});
				}
			}
			var many = $section.length;
			var top = -winH * sectionActive;
			footHeight = $('.footerArea').height();
			if (sectionActive == 4) {
				top = -((winH * (sectionActive - 1)) + footHeight);
				$(".mainStep li").removeClass("on");

			}
			$(".sectionWrap").css({ top: top });
			if ($(".topEventWrap").css("display") == "block") {
				$(".mainWrap").css({ height: $(window).height() - 127, "top": 127 });
				$(".section").css({ height: $(window).height() - 127 });
			} else {
				$(".section, .mainWrap").css({ height: winH });
			}
		}
		
	}
})


$(function() {
	$('.mainPrdSlider .responsive').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1100,
					settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 720,
					settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
		]
	});


	$('.step02SliderArea .responsive').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1100,
					settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 720,
					settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
		]
	});

	$(window).load(function() {
		sec03ListHeight();
	});

	$(window).resize(function(event) {
		sec03ListHeight()
	});

	function sec03ListHeight() {
		var listItem = $(".step02SliderArea .slidesItem[data-slick-index='0']");
		$(".step02SliderArea .slidesItem[data-slick-index='3'] .itemInner").css({height : listItem.height()})
	}


	$('.step03SliderArea .responsive').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
				breakpoint: 1100,
					settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 720,
					settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}
		]
	});
	$('.mainPrdArea .slidesItem > a').hover(function() {
		$(this).find('.img img').attr('src', $(this).find('.img img').attr('src').replace('.png', '_on.png'));
	}, function() {
		$(this).find('.img img').attr('src', $(this).find('.img img').attr('src').replace('_on.png', '.png'));
	});
});