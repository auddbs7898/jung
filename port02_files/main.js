
function layerPopupOpen(e){
	var scroll = $(document).scrollTop();
	$('body').attr("data-scroll",scroll);
	$('html,body').scrollTop(0);

	var pop = $(e),
		backBg = '<div id="backBg"></div>';
	
	$("#ui_wrap").append(backBg);
	$("#backBg").stop().clearQueue().animate({'opacity': '0.7'}, 400, 'easeInOutCubic');

	pop.css("display","block");
	pop.stop().clearQueue().animate({'opacity': '1'}, 400, 'easeInOutCubic');
}

function layerPopupClose(e){
	var scroll = $('body').attr("data-scroll");
	$('html,body').scrollTop(scroll);
	$('body').removeAttr("data-scroll");
	
	var pop = $(e);

	$("#backBg").stop().clearQueue().animate({'opacity': '0'}, 400, 'easeInOutCubic', function(){ $("#backBg").remove() });
	pop.stop().clearQueue().animate({'opacity': '0'}, 400, 'easeInOutCubic', function(){
		pop.removeAttr("style");
	});
}

$(window).load(function(){
    //IE 8이하 체크
    if (jQuery.support.leadingWhitespace == false){
        $("body,html").addClass("ie8 ie_old");
    }
    //IE9 체크
    if(navigator.userAgent.indexOf('9.0') == -1) {   
    }else{
        $("body,html").addClass("ie9 ie_old");
    }
});

function mainSlide() {
    $(".slide_wrap").slick({
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        infinite: true,
        speed: 800,
        easing: 'easeInOutCubic',
        autoplaySpeed: 5000,
        arrows:true
    });
}

function familySite() {
	var family = $(".family_site");

	family.find("button").click(function() {
		if ($(this).hasClass("open") == true)
		{
			$(this).removeClass("open");
			family.find("ul").css("display","block");
		} else{
			$(this).addClass("open");
			family.find("ul").css("display","none");
		}
	});
}

function evtScroll() {
    var evtBtn = $(".main_wrap"),
        scrollBtn = evtBtn.find(".scrollbtn a");
    scrollBtn.click(function(event){            
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
    });
}

function selectFnOrg(){
	var select = $('.select');

	if( !$('.select').length ) return;

	select.each(function(i){
		if( $(this).find( "select option:selected" ).length ){
			select.eq(i).find('label').text( select.eq(i).find('select option:selected').text() );
		} else {
			select.eq(i).find('label').text( select.eq(i).find('select option').eq(0).text() );		
		}
		
		$(this).find('select').change(function(){
			var select_name = $(this).children("option:selected").text();

			$(this).siblings("label").text(select_name);
		});	    
	});
}

function selectUpdate(i){ 
	$(i).parent().find('label').text( $(i).find('option').eq(0).text() );
	$(i).find('option').eq(0).attr("selected", "selected");
}

function selectReload(i , k){ 
	setTimeout(function(){
		$(i).find('option').each(function(n){
		   if( $(this).val() == k ) {
			   $(i).parent().find('label').text( $(i).find('option').eq(n).text() );
			   $(i).find('option').eq(n).attr("selected", "selected");
		   }
		});
	}, 100);
}

function specOpen(e){
    if( !$(e).parent().hasClass('open') ){
		$('html,body').animate({scrollTop:$(e).offset().top}, 400);
        $(e).parent().addClass('open').next('dd').slideDown();    
    } else {
        $(e).parent().removeClass('open').next('dd').slideUp();
    }
}

$(function(){
	mainSlide();
	familySite();
	evtScroll();
	selectFnOrg();
});