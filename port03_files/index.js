jQuery(function($){
    new WOW().init();

    var UserAgent = navigator.userAgent;
    if(UserAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null) {
        //mobile
    }else{
        //pc
        $('.sec2 .img1').hover(function(){
            $(this).animate({top: '68px'}, 200);
        }, function(){
            $(this).animate({top: '83px'}, 200);
        });

        $('.sec2_img1').hover(function(){
            $(this).animate({bottom: '-15px'}, 200);
        }, function(){
            $(this).animate({bottom: '-34px'}, 200);
        });

        $('.sec2_img2').hover(function(){
            $(this).animate({bottom: '15px'}, 200);
        }, function(){
            $(this).animate({bottom: '0px'}, 200);
        });

        $('.sec3 .img5').hover(function(){
            $(this).animate({top: '70px'}, 200);
        }, function(){
            $(this).animate({top: '90px'}, 200);
        });

        $('.sec4 .img').hover(function(){
            $(this).animate({top: '50px'}, 200);
        }, function(){
            $(this).animate({top: '70px'}, 200);
        });

        $('.sec6 .img').hover(function(){
            $(this).animate({top: '40px'}, 200);
        }, function(){
            $(this).animate({top: '60px'}, 200);
        });
    }

    $(".pop").magnificPopup({
        mainClass: 'mfp-fade',
        showCloseBtn : true
    });
    $(".pop").trigger("click");


    $(".close_bar").click(function(){
        $.magnificPopup.close();
    });


});
