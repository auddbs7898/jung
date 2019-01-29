<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7]>      <html class="no-js ie6" lang="ko"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7" lang="ko"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8" lang="ko"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ko"> <!--<![endif]-->
<html>
<head>
<meta charset="utf-8">
<title>서울여성공예센터 더 아리움</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="format-detection" content="telephone=no">
<meta name="ROBOTS" content="all">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta property="og:title" content="서울여성공예센터 더아리움" />
	<meta property="og:type" content="website">
	<meta property="og:description" content="공예와 창업, 지역과 문화를 혁신하는 서울여성공예센터 더 아리움" />
	<meta property="og:url" content="https://brand.seoulcraftcenter.kr/" />
	<meta property="og:image" content="https://seoulcraftcenter.kr/img/logo_wide.svg" />
    <meta name="google-site-verification" content="nFsANOUOykcZLDhYv1DksgfqnYLshz7JEVnQQ8PWrAk" />
<link rel="shortcut icon" href="https://seoulcraftcenter.kr/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="https://seoulcraftcenter.kr/img/favicon.ico" type="image/x-icon">
<link href="http://brand.seoulcraftcenter.kr/css/brand.css" rel="stylesheet" type="text/css">
<script src="https://seoulcraftcenter.kr/wp-content/themes/x/js/jquery-2.1.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><!--제이쿼리 플러그인:움직임을 적용하기위해 가져온 ul제이쿼리 위치는 CDN보다 아래있어야함-->
<script>
$(document).ready(function(){
$(".gnb-goto-category").click(function(e) {
        $(this).toggleClass("active");
		$(".gnb-navbar.type-categorymenu").toggleClass("active");
		$('body').toggleClass('ovy');
    });
        $('#mainlisttrigger').click(function(){
        
            $.ajax({
               type: "GET"
               ,dataType: "xml"
			   <?php if($main){ ?>
               ,url: "xml/introduce/brand.xml"
			   <?php }else{ ?>
			   ,url: "../xml/introduce/brand.xml"
			   <? } ?>
               ,success: function(xml){
				    
					var brandCategory = $(".gnb-navbar__body").html();
                    var xmlData = $(xml).find("info");
					var bxmlData = $(xml).find("brandList").find("brand");
					<?php if($main){ ?>
				    var brandliTag = $(".format-itemcard-list").html(); 
					var imgsrc = xmlData.find("센터이미지경로").text();
                    var listLength = xmlData.length;
					<? } ?>
					var blistLength = bxmlData.length;
					<?php if($main){ ?>
                   // if (listLength) {
                        var contentStr = "";
						
                    //   
                            contentStr += "<div class='cr_infomation'><pre>"+ xmlData.find("센터인사말").html() +"</pre></div>"
										  +"<p><em>"+ xmlData.find("센터연락처").text() +" </em>"
                                          +"<em>"+ xmlData.find("센터팩스").text() +"</em></p>"
                                          +"<p>"+ xmlData.find("센터이메일").html() +"</p>"
										  +"<address class='font12'>"+ xmlData.find("센터우편번호").html() +" ) <br>"
										  + xmlData.find("센터주소").html() +"</address>";
							
							$("#footer_contact, #mfooter_contact").prepend(contentStr);	
							$(".introBanner").attr("src", imgsrc);	
							var brandliTags = "";
							<? } ?>
							var brandCategorys="";
							for(var i =0 ; i <blistLength; i++){
								<?php if($main){ ?>
								brandliTags+=brandliTag;
								<? } ?>
								brandCategorys+=brandCategory;
								}
								<?php if($main){ ?>
								$(".format-itemcard-list").html(brandliTags);
								<? } ?>
								$(".gnb-navbar__body").html(brandCategorys);
								
								
							 $(bxmlData).each(function(index, e){	
							  var brNum = $(".gnb-navbar__body .gnb-navbar__menu:eq("+index+") a");
							  	
		                        brNum.attr("href","<?php if($main){ ?>page/<? } ?>brand.html?b_id="+$(this).find('폴더').text());
								
							
								brNum.find("span").html($(this).find('브랜드명').text());	 
							 <?php if($main){ ?>
							var liNum =$(".format-itemcard-list__item").eq(index);
							var liNumimg =liNum.find(".img-bannercard");
						    var liNumTitle = liNum.find(".bannercard__visual__summary__title .bannercard__visual__summary__row"); 
							var liNumsubTitle = liNum.find(".bannercard__visual__summary__subtitle  .bannercard__visual__summary__row"); 
							var liNumHref = liNum.find(".bannercard__link");
							 	liNumimg.attr({
									  "alt":$(this).find('브랜드명').text(),
									  "src":"page/"+$(this).find('폴더').text()+"/work/img_"+$(this).find('대표이미지번호').text()+".jpg"});
							
							 
								 liNumTitle.eq(0).html($(this).find('브랜드명').text() + " " +$(this).find('영문명').text());
								 liNumTitle.eq(1).html("[ "+$(this).find('호실').text() + " ]  " +$(this).find('연락처').text());
							    liNumHref.attr("href","page/brand.html?b_id="+$(this).find('폴더').text());
								liNumsubTitle.eq(0).html("<em>분류</em> "+$(this).find('분류').text() + " / " +"<em>소재</em> "+$(this).find('소재').text() );
								liNumsubTitle.eq(1).html("사이트주소 "+$(this).find('사이트주소').text()  );
								<? } ?>
                             });
                        
						
                    }
              //  }
             }); 
      
        });
		
    });
</script>
<!--[if lt IE 9]>
		<script type="text/javascript" src="/js/respond.min.js"></script>
<![endif]-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129239050-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129239050-1');
</script>
</head>
<body class="page--home os--chrome">
<input type="hidden" id="mainlisttrigger"><!--input의 type이 hidden인애는 조심해야한다-->
<div id="wrapper">
       <div id="gnb">
            <div class="gnb">
                <h1 class="gnb-logo">            
                    <a href="http://brand.seoulcraftcenter.kr" title="홈 바로가기" class="link_area" >
                        <img class="img_logo" alt="한국여성공예센터" src="https://seoulcraftcenter.kr/img/logo.svg">
                    </a>
                </h1> 
                <div class="gnb-goto-category">
		<a class="format-link" href="javascript:;">
			<span class="format-link__text">더아리움브랜드</span>
			<!--<i class="format-link__icon icon sp-common ico_arrow1_bk_right"><span class="for-a11y">닫기</span></i>-->
		</a>
	</div> 
    <div class="gnb-navbar type-categorymenu" id="category-menu" >
		<h2 class="gnb-navbar__header">
			<span class="for-a11y">카테고리 전체메뉴</span>
		</h2>
		<ul class="gnb-navbar__body">
					
					<li class="gnb-navbar__menu ">
						<a href="브랜드링크" class="format-link" >
							<span class="format-link__text">브랜드명</span>
						</a>
					</li>
		</ul>
	</div>             
                <div class="gnb-ad">
     <div id="footer_contact" >

<!--<em class="fax">팩스 02 6442 1155</em>
<em class="email">info@seoulcraftcenter.kr</em>
<address class="font12">우편번호 01849 )<br>서울시 노원구 동일로 174길 27</address>-->
<em class="font12">©서울여성공예센터 더아리움</em>
</div>

                </div>
            </div>
       </div>   
       <div id="container">
       <div id="contents">    