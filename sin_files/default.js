;(function($) {
	var on = $.fn.on, debounce;
	$.fn.on = function () {
		var args = Array.apply(null, arguments);
		var first = args[0];
		var last = args[args.length - 1];
		var isObj = typeof first === 'object';
		if (!isObj && isNaN(last) || (last === 1 && args.pop())) return on.apply(this, args);
		if (isObj) {
			for (var event in first) {
				this.on(event, last, first[event], args[1]);
			}
			return this;
		}
		var delay = args.pop();
		var fn = args.pop();
		args.push(function () {
			var self = this, params = arguments;
			clearTimeout(debounce);
			debounce = setTimeout(function () {
				fn.apply(self, params);
			}, delay);
		});
		return on.apply(this, args);
	};
}(this.jQuery || this.Zepto));


jQuery.fn.center = function(parent) {
	if (parent) {
		parent = this.parent();
	} else {
		parent = window;
	}
	this.css({
		"position": "absolute",
		"top": ((($(parent).height() - this.outerHeight()) / 2) + $(parent).scrollTop() + "px"),
		"left": ((($(parent).width() - this.outerWidth()) / 2) + $(parent).scrollLeft() + "px")
	});
	return this;
}
function isMobile() {
	try { document.createEvent("TouchEvent"); return true; }
	catch (e) { return false; }
}



var UserAgent = navigator.userAgent;

if (UserAgent.match(/iPhone|iPod|iPod2|ipad|ipad2|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null) {
	isMobileWebKit = true;
} else {
	isMobileWebKit = false;
}

function over_img(img, n) {

	var hover = "_" + n;
	if (img.hasClass("on") == false && img.find("img").length > 0) {
		menuimg = img.find("img");

		if (menuimg.attr("src").indexOf(".jpg") > 0) {
			menuimg_type = ".jpg";
		} else if (menuimg.attr("src").indexOf(".gif") > 0) {
			menuimg_type = ".gif";
		} else if (menuimg.attr("src").indexOf(".png") > 0) {
			menuimg_type = ".png";
		}


		menuimg_src = menuimg.attr("src").split("_off")[0];
		menuimg_src = menuimg_src.split("_on")[0];
		menuimg_src = menuimg_src.split("_select")[0];
		menuimg.attr("src", menuimg_src + hover + menuimg_type);
	}
}

function gnb(dep1, dep2, dep3, dep4) {
	var $gnbWrap = $('.gnbWrap'),
		$gnbWrapBg = $('.gnbWrapBg'),
		$gnb = $('#gnb'),
		$gnbLi = $gnb.find(' > li'),
		$gnb2Dep = $gnbLi.find('.dep2Wrap'),
		$gnb2DepLi = $gnb2Dep.find('.dep2 > ul > li'),
		$gnb3DepLi = $gnb2DepLi.find('.dep3 > li'),
		$gnb4DepLi = $gnb3DepLi.find('.dep4 > li'),
		resetTime = null,
		dep1Text,
		dep2Text;

	dep1 = $("#gnb > li." + dep1).index() + 1;
	dep2 = $("#gnb > li .dep2 > ul >li." + dep2).index() + 1;

	if( dep1 ) {
		dep1Text = $gnbLi.eq(dep1 - 1).find('>a').text();
		dep2Text = $gnbLi.eq(dep1 - 1).find($gnb2DepLi).eq(dep2 - 1).text();
		document.title = dep2Text + " | " + dep1Text + " | 신일산업주식회사";
	} else {
		document.title = '신일산업주식회사';
	}

	removeActive();
	$gnbLi.on({
		"mouseenter focusin": function () {
			clearTimeout(resetTime);
			$gnbWrapBg.addClass("active");
			//$gnb2Dep.hide();
			$gnbLi.removeClass('on');
			$(this).addClass('on');
			var gnbHeight = $(this).find($gnb2Dep).outerHeight() + 70;
			// $gnbWrapBg.stop().animate({ height: gnbHeight }, {
			// 	duration: 300,
			// 	easing: "easeInOutCubic"
			// });
			$(".btnSearchClose").click();
		}
	});
	$gnb.on({
		"mouseenter focusin": function () {
			clearTimeout(resetTime);
			$gnbWrapBg.addClass("active");
		},
		"mouseleave focusout": function () {
			resetTime = setTimeout(function () {
				removeActive();
			}, 300)
		}
	});
	$gnb2Dep.find("li").on({
		"mouseenter focusin": function () {
			clearTimeout(resetTime);
		}
	});

	var gnbWrapH;

	if( $('body').is('.mo') ) {
		gnbWrapH = 80;
	} else {
		gnbWrapH = 100;
	}


	//common removeActive
	function removeActive() {
		$gnbWrapBg.removeClass("active");
		//$gnb2Dep.hide();
		// $gnbWrapBg.stop().animate({ height: gnbWrapH }, {
		// 	duration: 300,
		// 	easing: "easeInOutCubic"
		// });
		$gnbLi.removeClass('on');
		$gnb2DepLi.removeClass('on');
		$gnb3DepLi.removeClass('on');
		//$gnbLi.eq(dep1 - 1).addClass('on');
		$gnbLi.eq(dep1 - 1).find($gnb2DepLi).eq(dep2 - 1).addClass('on');
		$gnbLi.eq(dep1 - 1).find($gnb2DepLi).eq(dep2 - 1).find($gnb3DepLi).eq(dep3 - 1).addClass('on');
	}

	if ($(".locationWrap").length > 0 && dep1) {
		var $allmenu = $('.allmenu'),
			$allmenuLi = $allmenu.find(' > li'),
			$allmenu2Dep = $allmenuLi.find('.dep2Wrap'),
			$allmenu2DepLi = $allmenu2Dep.find('.dep2 > ul > li'),
			$allmenu3DepLi = $allmenu2DepLi.find('> ul > li'),
			$allmenu4DepLi = $allmenu3DepLi.find('> ul > li');

		$(".locationLink.dep1 > a").text($allmenuLi.eq(dep1 - 1).find(">a").text());
		$(".locationLink.dep1 .selectMenu li").eq(dep1 - 1).addClass("on");

		$allmenuLi.eq(dep1 - 1).addClass("on");
		$allmenuLi.eq(dep1 - 1).find('>a').addClass("active");
		$allmenuLi.eq(dep1 - 1).find($allmenu2DepLi).eq(dep2 - 1).addClass("on");
		$allmenuLi.eq(dep1 - 1).find($allmenu2DepLi).eq(dep2 - 1).find($allmenu3DepLi).eq(dep3 - 1).addClass("on");
		$allmenuLi.eq(dep1 - 1).find($allmenu2DepLi).eq(dep2 - 1).find($allmenu3DepLi).eq(dep3 - 1).find($allmenu4DepLi).eq(dep4 - 1).addClass("on");

		if (dep2) {
			var dep2Item = $allmenuLi.eq(dep1 - 1).find(".dep2 ul").clone();
			dep2Item.find(".dep3").remove();
			$(".location").append('<li class="locationLink dep2"><a href="#" class="active">' + $allmenuLi.eq(dep1 - 1).find($allmenu2DepLi).eq(dep2 - 1).find(">a").text() + '</a><ul class="selectMenu">' + dep2Item.html() + '</ul>');

		}
		if (dep3) {
			var dep3Item = $allmenuLi.eq(dep1 - 1).find($allmenu2DepLi).eq(dep2 - 1).find(".dep3").clone();
			dep3Item.find(".dep4").remove();
			$(".location").append('<li class="locationLink dep3"><a href="#" class="active">' + $allmenuLi.eq(dep1 - 1).find($allmenu2DepLi).eq(dep2 - 1).find($allmenu3DepLi).eq(dep3 - 1).find(">a").text() + '</a><ul class="selectMenu">' + dep3Item.html() + '</ul>');
		}
		if (dep4) {
			var dep4Item = $allmenuLi.eq(dep1 - 1).find($allmenu2DepLi).eq(dep2 - 1).find($allmenu3DepLi).eq(dep3 - 1).find(".dep4").clone();
			$(".location").append('<li class="locationLink dep4"><a href="#" class="active">' + $allmenuLi.eq(dep1 - 1).find($allmenu2DepLi).eq(dep2 - 1).find($allmenu3DepLi).eq(dep3 - 1).find($allmenu4DepLi).eq(dep4 - 1).find(">a").text() + '</a><ul class="selectMenu">' + dep4Item.html() + '</ul>');
		}
		$(".locationLink li").removeClass("on sub")
		$(".location > li:last-child").addClass("on")
	}
	$(".locationLink .active").click(function (e) {
		e.preventDefault();
		if (!$(this).closest(".locationLink").find(".selectMenu").hasClass("open")) {
			$(".locationLink").find(".selectMenu").removeClass("open");
			$(this).closest(".locationLink").find(".selectMenu").addClass("open");
		} else {
			$(".locationLink").find(".selectMenu").removeClass("open");
		}
	})
	//검색메뉴
	$(".btnSearchOpen").click(function (e) {
		e.preventDefault();
		if (!$(this).hasClass("open")) {
			$(this).addClass("open");
			$(".totalSearchWrap").slideDown({
				duration: 300,
				easing: "easeInOutCubic"
			})
		} else {
			$(this).removeClass("open");
			$(".totalSearchWrap").slideUp({
				duration: 300,
				easing: "easeInOutCubic"
			})
		}
	})
	$(".btnSearchClose").click(function (e) {
		e.preventDefault();
		$(".btnSearchOpen").removeClass("open");
		$(".totalSearchWrap").slideUp({
			duration: 300,
			easing: "easeInOutCubic"
		})
	})
}
$(function () {

	
	// Fixes anchor focus in Chrome/Safari/IE by setting the tabindex of the
	// target container to -1 on page load
	if (window.location.hash) {
		$(window.location.hash).attr("tabindex", -1).focus();
	}
	$(".skip_navigation a").focus(function () {
		$(".skip_navigation a").removeClass("on");
		$(this).addClass("on");
	})
	$(".skip_navigation a").blur(function () {
		$(".skip_navigation a").removeClass("on");
	})
	/* 롤오버 이미지 */
	$(".rollOver").each(function () {
		$(this).bind("foucs mouseenter", function () {
			over_img($(this), "on");
		});
		$(this).bind("blur mouseleave", function () {
			over_img($(this), "off");
		})
	});
	//서브페이지 메뉴 스코롤 이벤트
	//
	var footerHeight;
	footerHeight = $('#footer').height();
	if ($(".subContentWrap").length > 0) {
		$(window).scroll(function () {
			footerHeight = $('#footer').height();
			var top = $(window).scrollTop()
			var target = 107;
			// if (top > target) {
			// 	$(".locationWrap").addClass("fixed");
			// } else {
			// 	$(".locationWrap").removeClass("fixed");
			// }

			if ($(document).height() - footerHeight < (top + $(window).height())) {
				$(".btn_contentTop").addClass("ab");
				$(".btn_contentTop").css({bottom: footerHeight + 50})
			} else {
				$(".btn_contentTop").removeClass("ab");
				$(".btn_contentTop").css({bottom: ""})
			}
		})
		$(".btn_contentTop").click(function (e) {
			$("body, html").stop().animate({ scrollTop: 0 }, {
				duration: 200,
				easing: "easeInOutCubic"
			});
		})
	}

	$(".tabDisplay .tabArea a").click(function (e) {
		e.preventDefault();
		var idx = $(this).parent().index();
		$(this).closest(".tabArea").find("li").removeClass("on").eq(idx).addClass("on");
		$(this).closest(".tabArea").find("li a span").remove();
		$(this).closest(".tabArea").find("li").eq(idx).find("a").append("<span class='hide_txt'>현재페이지</span>");
		$(this).closest(".tabDisplay").find(".tabContent").hide().eq(idx).show();
	})
	
	if (isMobile()) {
		$("body").addClass("isTablet");
	}

})
// LayerPopup 열기
var popupTarget;
function layerPop(n, target, type) {
	if (n == "open") {

		if (type) {
			$("." + target).css("z-index", "40");
			$("body").append("<div class='dim_bg " + target + "' style='z-index:39;display:block'></div>")
		} else {
			$(".popupWrap").hide();
			$(".dim_bg").show();
		}
		$(".popupWrap." + target).show();
		$("body").addClass("dim");
		$("." + target).attr("tabindex", -1).focus();
	} else {
		if (type) {
			$("." + target).hide();
			$(".dim_bg." + target).remove();
		} else {
			$(".popupWrap").hide();
			$(".dim_bg").hide();
		}
		$("body").removeClass("dim");
	}
}



$(function() {
	var docHeight = $(document).height();
	var footHeight = $("#footer").height();
	var windowWidth = $(window).width();
	var gnbTop;
	$('.mobileNav').find('.btnMnav').on('click', function(event) {
		event.preventDefault();
		
	});

	function resetMoGnb() {
		$('.mobileGnbWrap').stop().animate({right:'-88%'}, 200, function() {
			$('.header').removeClass('mobile');
			$('body').removeClass('open');
			$('.mobileGnbWrap').find('.allmenu > li > a').removeClass('active');
			$('.mobileGnbWrap').find('.allmenu > li > .dep2Wrap').slideUp();
			$('.mobileGnbWrap').find('.allmenu > li.on > a').addClass('active');
			$('.mobileGnbWrap').find('.allmenu > li.on > .dep2Wrap').show();
		});
		$('#wrap .lyDim').remove();
	}

	$(document).on('click touchstart', '.btnMobleGnbClose, .lyDim', function(event) {
		event.preventDefault();
		resetMoGnb();
	});


	$('.btnAllmenu').on('click', function(event) {
		event.preventDefault();
		if( $('.header ').is('.mobile') ) {
			resetMoGnb();

			return false;
		}
		if ( $('body').is('.mo') ) {
			gnbTop = $('.header').height();
			footHeight = $("#footer").height();
			// $( 'html, body' ).stop().animate( { scrollTop : 0 } ) 
			$('.header').addClass('mobile');
			$('body').addClass('open');
			$('.mobileGnbWrap').stop().animate({right:'0'}, 300);
			$('#wrap').append("<div class='lyDim'></div>");
			$('.lyDim').fadeIn()
			// $(".mobileGnbWrap").height(docHeight + gnbTop + footHeight + 100);
		} else {
			layerPop('open','popup_allmenu');
		}
	});

	$('.popup_allmenu .btnClose').on('click', function(event) {
		event.preventDefault();
		layerPop('close','popup_allmenu');
	});

	$('.mobileGnbWrap').find('.allmenu > li > a').on('click', function(event) {
		event.preventDefault();
		if( $(this).hasClass('active')) {
			$(this).removeClass('active');
			$('.mobileGnbWrap').find('.allmenu > li > .dep2Wrap').slideUp()
		} else {
			$('.mobileGnbWrap').find('.allmenu > li > a').removeClass('active')
			$(this).addClass('active');
			$('.mobileGnbWrap').find('.allmenu > li > .dep2Wrap').slideUp()
			$(this).parent('li').find('.dep2Wrap').slideDown();
		}
		
	});


	$(window).on({
		resize: function (e) { 
			 if ($(window).width() != windowWidth) {
				windowWidth = $(window).width();
				listenWidth();
			 }
		},
		load : function(e) {
			listenWidth();
		}
	},10);

	function listenWidth() {
		if( !$('body').is('.mainBody') ) {
			if(windowWidth <= 720) {
				mobileVer()
				$('body').addClass('mo')
			}else if(windowWidth > 720 ) {
				pcVer()
				$('body').removeClass('mo')
			}
		}
		
		function mobileVer() {
			if ( $('.header').is('.mobile') )
				docHeight = $(document).height();
				// $(".mobileGnbWrap").height(docHeight);
				// $('#wrap').find('.lyDim').height(docHeight);
			}
		function pcVer() {
			if ($('.header').is('.mobile')) {
				resetMoGnb();
			}

			if ( $('body').is('.dim') ) {
				layerPop('close','popup_allmenu');
			}
		}
	}

	/*familysite*/
	$('.familysite > strong > a').on('click', function (e) {
		e.preventDefault();
		if (!$(this).hasClass("open")) {
			$(this).addClass("open");
			$(this).closest(".familysite").find("ul").slideDown(300);
		} else {
			$(this).removeClass("open");
			$(this).closest(".familysite").find("ul").slideUp(300);
		}
	});


	// faq
	$('.faq-wrap dt a').click(function () {
		var faqListContainer = $(this).parent().parent();
		var currentContent = $(this).parent().next('dd');
		if ( 'block' == $(this).parent().next('dd').css('display') ) {
			currentContent.slideUp(280);
			$(this).attr('title','답변 열기');
			$('.faq-wrap dt').removeClass('active');
		} else {
			faqListContainer.find('dd').slideUp(280);
			currentContent.stop().slideDown(280);
			$('.faq-wrap dt a').attr('title','답변 열기');
			$(this).attr('title','답변 닫기');
			$('.faq-wrap dt').removeClass('active');
			$(this).parent('dt').addClass('active');
		}
	});


	// if ( $('.networkList').length ) {
	// 	$('.networkList').find('>ul>li:first').addClass('on').find('.mapWrap').slideDown()
	// 	$('.networkList').find('>ul>li:first').find('.btnMap').addClass('chk');
	// }

	$('.networkList').find('.btnMap').on('click', function(event) {
		event.preventDefault();
		if ( !$(this).is('.chk') ) {
			$('.networkList').find('.btnMap').removeClass('chk');
			$(this).addClass('chk');
			$('.networkList').find('>ul>li').removeClass('on').find('.mapWrap').slideUp();
			$(this).parents('li').addClass('on').find('.mapWrap').slideDown();
		} else {
			$('.networkList').find('.btnMap').removeClass('chk');
			$('.networkList').find('>ul>li').removeClass('on').find('.mapWrap').slideUp();
		}
	});

	var certificateListsBigImg;
	var certificateListsImgAlt;
	$('.certificateLists').find('a').attr('title', '확대보기');
	$('.certificateLists').find('a').on('click', function(event) {
		event.preventDefault();
		certificateListsBigImg = $(this).attr('data-target');
		certificateListsImgAlt = $(this).find('.txWrap .text').text()
		$('.certificateLists').find('a').removeClass('click');
		$(this).addClass('click');
		$('.certificateLyWrap').show()
		$(".certificateLyWrap .certificateLyArea .imgArea img").attr('src', certificateListsBigImg).attr('alt', certificateListsImgAlt).load(function() {
			$(".certificateLyWrap .certificateLyArea").center(false);
		$('.certificateLyWrap .imgArea').focus()
		});
		
	});


	$('.certificateLyWrap .lyClose').find('a').on('click', function(event) {
		event.preventDefault();
		$('.certificateLyWrap').hide();
		$('.certificateLists').find('a.click').focus();
	});

	$('.certificateLyWrap .lyClose').find('a').on('keydown', function(e) {
		var keyCode = e.keyCode || e.which; 
		if (keyCode == 9) { 
		e.preventDefault(); 
			$('.certificateLyWrap').hide();
			$('.certificateLists').find('a.click').focus();
		} 
	});
		
	// 제품상세 썸네일
	$('.js-product-thumb-main').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: false,
		asNavFor: '.js-product-thumb-sub',
		accessibility:false
	});
	$('.js-product-thumb-sub').slick({
		slidesToShow: thum_list_langth - 2,
		slidesToScroll: 1,
		asNavFor: '.js-product-thumb-main',
		dots: false,
		focusOnSelect: true,
		accessibility:false
	});
	var thum_list_langth = $('.js-product-thumb-main .det-big-box').length;

	$(window).load(function() {
		var prdListHeight;
		if( $('.prdListArea.bigType').find('li') .length > 1) {
			$(window).resize(function(event) {
				listHeightSet()
			});

			listHeightSet()
			function listHeightSet() {
				if(windowWidth > 719) {
					prdListHeight = $('.prdListArea.bigType').find('li.big').next('li').height();
					$('.prdListArea.bigType').find('li.big a').css({height: (prdListHeight * 2) - 1})
				} else {
					$('.prdListArea.bigType').find('li.big a').css({height: "auto"})
				}
			}
		}
	});

	
});

