jQuery(function($){
    var UserAgent = navigator.userAgent;
    if(UserAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i) != null || UserAgent.match(/LG|SAMSUNG|Samsung/) != null) {
        //mobile
    }else{
        //pc
        var content2 = $('.con-box').height()+370;
        $('.sub-content2').css('height',content2);
        $('.left-snb').css('height',content2);

        // console.log(content2);

        $(window).scroll(function(){
            var height = $(document).scrollTop(); // 스크롤 되는 높이
            var sub_visual_height = $('.sub-top').height() + 123; // 헤더포함 상단 높이

            if(height > sub_visual_height){
                $('.left-snb').addClass('act');
                $('.con-box').addClass('act');
            }
            else
            {
                $('.left-snb').removeClass('act');
                $('.con-box').removeClass('act');
            }
        });
    }

    $('.ready').click(function(e){
        e.preventDefault();
        alert('준비중입니다');
    });

    $(".lpop").magnificPopup({
        mainClass: 'mfp-fade',
        showCloseBtn : true
    });

    $('#open-button').on("click",function(){
        if($(this).attr('class')=='act'){
            $(this).removeClass('act');
            $(".header-wrap").removeClass("act");
        }
        else
        {
            $(this).addClass('act');
            $(".header-wrap").addClass("act");
        }
    });

    function navi_close(){
        $("#open-button").removeClass("act");
        $(".roof").animate({
            opacity: 1
        }, 100,function(){
            $(".roof").fadeOut(300);
        });
        $(".menu-wrap").removeClass("act");
    }

    $(".header-wrap .menu li a span").each(function(){
        if($(".sub_key").html() == $(this).html())
        {
            $(this).parents('li').addClass('act');
        }
    });
});
