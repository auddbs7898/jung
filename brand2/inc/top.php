<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7]>      <html class="no-js ie6" lang="ko"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie7" lang="ko"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8" lang="ko"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ko"> <!--<![endif]-->
<html>
<head>
<meta charset="utf-8">
<title>2018년 서울여성공예센터 </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta property="og:title" content="서울여성공예센터 더아리움" />
<meta property="og:type" content="website">
<meta property="og:description" content="공예와 창업, 지역과 문화를 혁신하는 서울여성공예센터 더 아리움" />
<meta property="og:url" content="https://brand.seoulcraftcenter.kr/" />
<meta property="og:image" content="https://seoulcraftcenter.kr/img/logo_wide.svg" />
<link rel="shortcut icon" href="https://seoulcraftcenter.kr/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="https://seoulcraftcenter.kr/img/favicon.ico" type="image/x-icon">
<link href="/css/common.css" rel="stylesheet"  />
<link href="/css/brand.css" rel="stylesheet">

<script src="https://seoulcraftcenter.kr/wp-content/themes/x/js/jquery-2.1.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--[if lt IE 9]>
		<script type="text/javascript" src="/js/respond.min.js"></script>
<![endif]-->
<style>
@charset "utf-8";

/* web font */


/* reset */
html, body{width:100%;height: auto;}
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,textarea,p,blockquote,th,td,input,select,button,caption{margin:0;padding:0}
fieldset,img{border:0 none}
dl,ul,ol,menu,li{list-style:none}
blockquote, q{quotes: none}
blockquote:before, blockquote:after,q:before, q:after{content:'';content:none}
input,select,textarea,button{border-radius:0;vertical-align:middle}
input::-ms-clear{display:none}
input[type="image"], input[type="submit"] {-webkit-appearance: none;border-radius:0}
a{text-decoration:none;cursor:pointer}
a:hover{text-decoration:none}
table{border-collapse:collapse}
iframe{overflow:hidden;margin:0;padding:0;border:0}
button{border:0 none;background-color:transparent;cursor:pointer}
address, caption, cite, code, dfn, em, strong, textarea, var{font-style:normal; font-weight:normal}
body,th,td,input,select,textarea,button{font-size:14px;line-height:1; font-family: 'Noto Sans Korean', 'Malgun Gothic', Arial, Helvetica, serif , sans-serif ; color: #222;  font-weight:400}

/*ie8이하로는 웹폰트불가로 자간적용 */
.lt-ie9{letter-spacing: -0.5px}
.lt-ie9 .font-arial{letter-spacing: 0px}

/*arial fonts important! */
.font-arial,
.format-price .format-price__value /* 가격 */
{font-family:arial !important}


/* custom modify width g9 slider plugin css  */
.slick-slider{position: relative;display: block;box-sizing: border-box;-webkit-user-select: none;   -moz-user-select: none; -ms-user-select: none;  user-select: none;-webkit-touch-callout: none;-khtml-user-select: none;-ms-touch-action: pan-y; touch-action: pan-y;-webkit-tap-highlight-color: transparent;}
.slick-list{position: relative;display: block;overflow: hidden;margin: 0;padding: 0;}
.slick-list:focus{outline: none;}
.slick-list.dragging{cursor: pointer;cursor: pointer;}
.slick-slider .slick-track,
.slick-slider .slick-list{-webkit-transform: translate(0, 0);   -moz-transform: translate(0, 0); -ms-transform: translate(0, 0);  -o-transform: translate(0, 0, 0);  transform: translate(0, 0);}
.slick-track{position: relative;top: 0;left: 0;display: block; /*margin-left: auto;margin-right: auto;*/ }
.slick-track:before,
.slick-track:after{display: table;content: '';}
.slick-track:after{clear: both;}
.slick-loading .slick-track{visibility: hidden;}
.slick-slide{display: none;float: left;height: 100%;min-height: 1px;}
.slick-initialized .slick-slide{display: inline-block;}
.slick-loading .slick-slide{visibility: hidden;}
.slick-vertical .slick-slide{display: block;height: auto;border: 1px solid transparent;}
.slick-arrow.slick-hidden {display: none;}
.slick-arrow.slick-disabled{opacity: 0.4}
/*
.slick-arrow{ width: 38px;height: 38px; background: url(//pics.g9.co.kr/pc/cloud/common/sp_etc.png) no-repeat;background-size: 200px auto;display: inline-block;vertical-align: middle; text-indent:-5000em; }
.slick-arrow.slick-prev{ background-position: 0 -102px; border-right: 1px solid #cccccc;}
.slick-arrow.slick-next{ background-position: -42px -102px;}
*/

/** ---------------------------------
* COMMON
* ------------------------------------*/
.for-a11y{position: absolute;width: 1px;height: 1px;margin: -1px;padding: 0;border: 0;clip: rect(0 0 0 0);overflow: hidden;text-indent: -5000em;}
.dimmed{opacity:0 ; background:#000; position:fixed;top:0;left:0;width:100%;height:100%;z-index: 300;}
.ellipsis{overflow: hidden; text-overflow: ellipsis;white-space: nowrap;word-wrap: normal !important;  }
.comp--keyword-txt{color:#00b8ff}
/* skipnavi */
#skipnavi {position:absolute; top:0; left:0;width:100%}
#skipnavi li a{position:absolute; left:0;top:-100px; z-index:1020; display:block; padding:9px 0; width:100%; background:#00B8FF;font-size:0;line-height:0;color:#fff;text-align:center;text-decoration:none}
#skipnavi li a:active, #skipnavi li a:focus{top:0; font-size:13px; font-weight:bold; line-height:1.5;opacity:.7}

/* layout */
#wrapper {width: 100%; min-width:1327px}
#container {width: auto;padding-left: 257px;}
#contents {width: auto;min-height: 500px; padding-bottom:160px }
#header{width: auto;height: 90px;padding-left: 142px;}
#gnb{position:fixed;width: auto;height: 100%;z-index: 100;top: 0;left: 0;}
#footer{width: auto;padding-left: 142px;}
#floating{position: fixed;bottom: 30px;right: 30px;z-index: 100;overflow: hidden;}

/** ---------------------------------
* ICON
* ------------------------------------*/
.icon.sp-common{background:url(//pics.g9.co.kr/pc/cloud/common/sp_common.png) no-repeat;background-size: 100px auto;display: inline-block;vertical-align: middle;font-size: 0;}
.icon.sp-common.ico_cart{width:28px; height:28px; background-position:0 -30px}
.icon.sp-common.ico_mypage{width:28px; height:28px; background-position:-32px -30px}
.icon.sp-common.ico_gnb_heart{width:28px; height:28px; background-position:-64px -30px}
.icon.sp-common.ico_search{width:20px; height:20px; background-position:0 0}
.icon.sp-common.ico_noti_off{width:36px; height:20px; background-position:0 -130px}
.icon.sp-common.ico_noti_on{width:31px; height:20px; background-position:-40px -130px}
.icon.sp-common.btn_close{width:14px; height:14px; background-position:-24px 0}
.icon.sp-common.ico_search_keyword_close_black{width:8px; height:8px; background-position: -40px 0}
.icon.sp-common.ico_arrow1_bk_right{width:7px; height:7px; background-position: -50px  -10px}
.icon.sp-common.ico_arrow1_blue_right, .icon.sp-common.ico_arrow1_bk_right.active{width:7px; height:7px; background-position: -60px -10px}
.icon.sp-common.ico_arrow2_bk_right{width:7px; height:7px; background-position: -50px  0px}
.icon.sp-common.ico_arrow2_gray_right{width:7px; height:7px; background-position: -60px 0px}
.icon.sp-common.ico_btn_fluting_top{width:59px; height:59px; background-position: 0px -70px }
.icon.sp-common.ico_popup_close_blue{width:16px; height:16px; background-position: -70px -70px }
.icon.sp-common.ico_plus{width:12px; height:12px; background-position: -70px -90px }

.icon.sp-itemcard{background:url(//pics.g9.co.kr/pc/cloud/common/sp_itemcard.png) no-repeat;background-size: 120px auto;display: inline-block;vertical-align: middle;font-size: 0;}
.icon.sp-itemcard.ico_heart_s{width:20px; height:18px; background-position:0 0px}
.icon.sp-itemcard.ico_heart_sw{width:20px; height:18px; background-position:-60px -24px}
.icon.sp-itemcard.ico_heart_n{width:20px; height:18px; background-position:-24px 0px}
.icon.sp-itemcard.ico_heart_small_s{width:18px; height:16px; background-position:-48px 0}
.icon.sp-itemcard.ico_heart_small_n{width:18px; height:16px; background-position:-70px 0}
.icon.sp-itemcard.ico_relationplus{width:19px; height:19px; background-position: -90px 0}
.icon.sp-itemcard.ico_tag{width:17px; height:14px; background-position:0 -24px}
.icon.sp-itemcard.ico_tag_blue{width:19px; height:15px; background-position:-24px -24px}
.icon.sp-itemcard.arrow2_bk_right{width:7px; height:7px; background-position:-50px -24px}

.icon.sp-etc{background:url(//pics.g9.co.kr/pc/cloud/common/sp_etc.png) no-repeat;background-size: 200px auto;display: inline-block;vertical-align: middle;font-size: 0;}
.icon.sp-etc.btn_popup_close{width:38px; height:38px; background-position:0 0px}
.icon.sp-etc.ico_search_keyword_close_gray2{width:9px; height:9px; background-position:-40px 0px}
.icon.sp-etc.ico_mouseover_close{width:18px; height:18px; background-position:-40px -10px}
.icon.sp-etc.ico_ad_info{width:12px; height:12px; background-position:-170px 0}
.icon.sp-etc.badge_ad_info_popup{width:72px; height:27px; background-position:-64px 0px}
.icon.sp-etc.ico_ad{width:14px; height:14px; background-position:-40px -30px}
.icon.sp-etc.btn_plusbox{width:16px; height:16px; background-position:-60px -30px}
.icon.sp-etc.btn_close{width:16px; height:16px; background-position:-80px -30px}
.icon.sp-etc.ico_check_active{width:11px; height:9px; background-position:-100px -30px}
.icon.sp-etc.btn_banner_arrow_right{width:38px; height:38px; background-position:0px -60px}
.icon.sp-etc.btn_banner_arrow_left{width:38px; height:38px; background-position:-42px -60px}
.icon.sp-etc.btn_banner_play{width:38px; height:38px; background-position:-122px -60px}
.icon.sp-etc.btn_banner_stop{width:38px; height:38px; background-position:-82px -60px}
.icon.sp-etc.btn_banner_arrow_left_line{width:38px; height:38px; background-position:0 -102px}
.icon.sp-etc.btn_banner_arrow_right_line{width:38px; height:38px; background-position:-42px -102px}
.icon.sp-etc.badge_new{width:24px; height:24px; background-position:-140px 0}
.icon.sp-etc.btn_more{width:100px; height:40px; background-position:-84px -102px}
.icon.sp-etc.badge_best{width:33px; height:12px; background-position:-118px -30px}
.icon.sp-etc.icon_logo_gmkt{width:77px; height:20px; background-position:0 -150px}
.icon.sp-etc.icon_logo_g9{width:32px; height:23px; background-position:-80px -150px}
.icon.sp-etc.ico_checkbox_off{width:16px; height:16px; background-position:-160px -30px}
.icon.sp-etc.ico_checkbox_on{width:16px; height:16px; background-position:-180px -30px}
.icon.sp-etc.tab_s_arrow{width:8px; height:4px; background-position:-100px -50px}

.icon.sp-arrow{background:url(//pics.g9.co.kr/pc/cloud/common/sp_arrow.png) no-repeat;background-size: 200px auto;display: inline-block;vertical-align: middle;font-size: 0;}
.icon.sp-arrow.ico_arrow_1_bk_up{width:8px; height:8px; background-position:0px 0px}
.icon.sp-arrow.ico_arrow_1_bk_down{width:8px; height:8px; background-position:-12px 0px}
.icon.sp-arrow.ico_arrow_1_gray_down{width:8px; height:8px; background-position:-24px 0px}
.icon.sp-arrow.ico_arrow_1_bk_right{width:6px; height:6px; background-position:0px -10px}
.icon.sp-arrow.ico_arrow_1_blue_right{width:6px; height:6px; background-position:-12px -10px}
.icon.sp-arrow.ico_arrow7_bk_left{width:9px; height:16px; background-position:0 -20px}
.icon.sp-arrow.ico_arrow7_bk_right{width:9px; height:16px; background-position:-12px -20px}
.icon.sp-arrow.ico_arrow8_bk_left{width:10px; height:10px; background-position:0 -40px}
.icon.sp-arrow.ico_arrow8_bk_right{width:10px; height:10px; background-position:-12px -40px}
.icon.sp-arrow.ico_arrow8_gray_left{width:10px; height:10px; background-position:-24px -40px}
.icon.sp-arrow.ico_arrow8_gray_right{width:10px; height:10px; background-position:-37px -40px}
.icon.sp-arrow.arrow_2_bk_right{width:7px; height:7px; background-position:-12px -52px}
.icon.sp-arrow.ico_arrow6_gray2_left{width:6px; height:6px; background-position:0 -60px}
.icon.sp-arrow.ico_arrow6_gray2_right{width:6px; height:6px; background-position:-12px -60px}
.icon.sp-arrow.ico_arrow6_gray1_left{width:6px; height:6px; background-position:-24px -60px}
.icon.sp-arrow.ico_arrow6_gray1_right{width:6px; height:6px; background-position:-36px -60px}
.icon.sp-arrow.ico_arrow_4_bk_left{width:13px; height:24px; background-position:0 -70px}
.icon.sp-arrow.ico_arrow_4_bk_right{width:13px; height:24px; background-position:-16px -70px}
.icon.sp-arrow.ico_arrow_4_gray_left{width:13px; height:24px; background-position:-31px -70px}
.icon.sp-arrow.ico_arrow_4_gray_right{width:13px; height:24px; background-position:-47px -70px}
.icon.sp-arrow.ico_bk_long_arrow_right{width:42px; height:10px; background-position:-50px -40px}
.icon.sp-arrow.ico_bk_long_arrow2_right{width:22px; height:7px; background-position:-50px -52px}



/** ---------------------------------
* AD INFO
* ------------------------------------*/
.ui-ad-info{position:relative;width:100%;height:0;font-size:0;line-height:0;z-index:10}
.ui-ad-info button, .ui-ad-info .icon{display:block}
.ui-ad-info .ui-ad-info__wrap{position:absolute;top:10px;right:10px}
.ui-ad-info .ui-ad-info__more{padding:5px}
.ui-ad-info .ui-ad-info__layer{display:none;position:absolute;top:27px;right:0;height:27px}
.ui-ad-info.active .ui-ad-info__layer{display:block}
.ui-ad-info .ui-ad-info__layer .ui-ad-info__close{position:relative;top:-21px;left:51px;width:20px;height:20px}

/** ---------------------------------
* DESIGN CHECKBOX
* ------------------------------------*/
.comp--ui-checkbox{display:inline-block;vertical-align:middle}
.comp--ui-checkbox label{position:relative;display:inline-block;white-space:nowrap}
.comp--ui-checkbox label>input{position:absolute;top:0;left:0;width:100%;height:100%;opacity:0}
.comp--ui-checkbox label>input:checked+.icon{background-position:-180px -30px}
.comp--ui-checkbox label .icon{margin:-3px 5px 0 0}
.lt-ie9 .comp--ui-checkbox label>input{margin:-3px 5px 0 0;position:static;top:inherit;left:inherit;width:16px;height:16px;opacity:1}
.lt-ie9 .comp--ui-checkbox label .icon{display:none;}

/** ---------------------------------
* TALKBOX TAB MENU
* USE : page--benefit , page-favorite
* ------------------------------------*/
.comp--talkbox-tab{margin:60px auto 10px;text-align:center}
.comp--talkbox-tab ul{display:inline-block;overflow:hidden;padding-left:1px}
.comp--talkbox-tab li{float:left;width:240px;margin-left:-1px}
.comp--talkbox-tab li .talkbox-menu_link{display:block;width:100%;height:38px;font-size:14px;color:#222;text-align:center;line-height:35px;background-color:#fff;border:1px solid #F2F2F2;box-sizing:border-box}
.comp--talkbox-tab li .talkbox-menu_link span{color:#808080}
.comp--talkbox-tab li .talkbox-menu_link.active{position:relative;background-color:#00B8FF;border:1px solid #00B8FF;color:#fff;z-index:20}
.comp--talkbox-tab li .talkbox-menu_link.active span{color:#fff}
.comp--talkbox-tab li .icon.sp-etc.tab_s_arrow{display:block;margin:0 auto;background-position:100px 50px}
.comp--talkbox-tab li .active + .icon.sp-etc.tab_s_arrow{background-position:-100px -50px}


/** ---------------------------------
* BADGE
* ------------------------------------*/
.badge {background:url(//pics.g9.co.kr/pc/cloud/common/sp_badge.png) no-repeat;background-size:230px auto;height:18px;display: inline-block;font-size:0;       vertical-align: middle; }
.badge.badge-text{background: #fff;border: 1px solid #00b8ff;width: auto; font-weight: 400;height: 16px;font-size: 11px;padding: 0px 6px;line-height: 16px;color: #00b8ff; letter-spacing:-0.5px}
.badge.img_coupon_badge_10_per {width:50px;  background-position : 0 0}
.badge.img_coupon_badge_5per {width:44px;  background-position : 0 -30px}
.badge.img_cashback_badge_15per {width:59px;  background-position : 0 -60px}
.badge.img_coupon_badge_kb1man {width:67px;  background-position : 0 -90px}
.badge.img_coupon_badge_kb7per {width:57px;  background-position : 0 -120px}
.badge.img_buy_badge {width:67px;  background-position : 0 -150px}
.badge.img_coupon_badge_first {width:38px;  background-position : -100px 0px}
.badge.img_coupon_badge_comeback {width:28px;  background-position : -100px -30px}
.badge.img_coupon_badge_first_comeback {width:63px;  background-position : -100px -60px}
.badge.img_coupon_badge_kb {width:61px;  background-position : -100px -90px}
.badge.img_coupon_badge_shin {width:67px;  background-position : -100px -120px}
.badge.img_coupon_badge_hyun {width:67px;  background-position : -100px -150px}
.badge.img_coupon_badge_lotte {width:67px;  background-position : -100px -180px}
.badge.img_coupon_badge_samsung {width:67px;  background-position : -100px -210px}
.badge.img_coupon_badge_app {width:40px;  background-position : -100px -240px}
.badge.img_coupon_badge_smilepay {width:76px;  background-position : -100px -270px}
.badge.img_coupon_badge_hidden {width:38px;  background-position : -100px -300px}
.badge.img_coupon_badge_secret {width:47px;  background-position : -100px -330px}
.badge.img_coupon_badge_overseas {width:47px;  background-position : -100px -360px}




/** ---------------------------------
* GNB
* ------------------------------------*/
.gnb{width: 220px;height: auto;padding: 90px 12px 200px 20px;}
.gnb-logo{display: block;position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: 100;}
.gnb-logo .link_area {display: inline-block;width: auto;margin-left: 10px;margin-top: 17px;padding: 10px;}
.gnb-logo .link_area .img_logo{display: block;width: 60px;height: 43px;}
.gnb-ad{position: absolute;bottom: 0;left: 0;z-index: 110;}
.gnb-ad .img-ad{display:block}
.gnb-goto-category{position: relative;z-index:110;margin-bottom: 36px;margin-top: 20px;}
.gnb-goto-category .format-link{display: block;padding: 3px 0 2px 4px;}
.gnb-goto-category .format-link .format-link__text{display: inline-block;font-size: 14px;line-height: 22px;color: #222;font-weight: bold;border-bottom: 1px solid #fff;}
.gnb-goto-category .format-link .format-link__icon{margin-left: 3px;margin-top: 9px;}
.gnb-goto-category.active .format-link .format-link__text, .gnb-goto-category .format-link:hover .format-link__text{ border-bottom: 1px solid #00b8ff; color:#00b8ff;}
.gnb-goto-category.active .format-link .format-link__icon, .gnb-goto-category .format-link:hover .format-link__icon{background-position: -60px -10px}
.gnb-navbar{position: relative;z-index: 110;}
.gnb-navbar__header{display: block;margin: 0;padding: 0;}
.gnb-navbar__body{display: block;margin: 0;padding: 0;}
.gnb-navbar__menu{display: block;list-style: none;margin-bottom: 4px;}
.gnb-navbar__menu .flashdeal-badge{display:inline-block;vertical-align:middle; background: url(//pics.g9.co.kr/pc/cloud/common/img-flashdeal-badge.png) no-repeat;background-size: 75px auto;background-position: 0 0;width: 52px; height: 19px; padding-left: 23px; padding-top: 2px;}
.gnb-navbar__menu .flashdeal-badge .hhmm{display: inline-block;font-size: 11px;font-weight: bold;color: #222;}
.gnb-navbar__menu .flashdeal-badge .ss{display: inline-block;font-size: 11px;font-weight: bold;color: #ff3c50;}
.gnb-navbar__menu .format-link{display: block;padding: 3px 0 2px 4px;}
.gnb-navbar__menu .format-link__text{display: inline-block;float: none;font-size: 14px;line-height: 22px;color: #222;font-weight: bold;border-bottom: 1px solid #fff;}
.gnb-navbar__menu.active .format-link__text,
.gnb-navbar__menu .format-link:focus .format-link__text,
.gnb-navbar__menu .format-link:hover .format-link__text{border-bottom: 1px solid #00b8ff; color:#00b8ff; }
.gnb-navbar.type-tabmenu{margin-bottom: 34px;}
.gnb-navbar.type-servicemenu .format-link__text{font-weight:normal;}
.gnb-navbar.type-categorymenu{display:none; position: fixed;top: 0;left: -143px;background: #fff;border-right: 1px solid rgba(0,0,0,0.06); height: 100%;padding: 0 20px;min-width: 124px;z-index: 90;}
.gnb-navbar.type-categorymenu .gnb-navbar__body{margin-top:112px; }
.gnb-navbar.type-categorymenu .gnb-navbar__menu{margin-bottom: 3px;}
.gnb-navbar.type-categorymenu .gnb-navbar__menu .format-link{display: inline-block;min-width: 110px;padding: 3px 0 3px 0;}
.gnb-navbar.type-categorymenu .gnb-navbar__menu .format-link__text{font-weight: normal;font-size: 13px;line-height: 21px;}
.gnb-navbar.type-categorymenu .gnb-navbar__menu .format-link:hover .format-link__text{color:#222; border-bottom: 1px solid #222;}
.gnb-navbar.type-categorymenu .gnb-navbar__menu .badge{margin-left:10px;}
.lt-ie9 .os--ie .gnb-logo{border-right:1px solid #f7f7f7;}
.lt-ie9 .os--ie .gnb-navbar.type-categorymenu{border-right:1px solid #f7f7f7;}
.lt-ie9 .os--ie .gnb-navbar__menu .flashdeal-badge{position: absolute;}
.lt-ie8 .os--ie .gnb-navbar__menu .flashdeal-badge .hhmm{vertical-align: top; margin-top: 2px }
.lt-ie8 .os--ie .gnb-navbar__menu .flashdeal-badge .ss{vertical-align: top; margin-top: 2px }
@media all and (max-height:840px){
 .gnb-ad{display:none}
}
/** ---------------------------------
* HEADER
* ------------------------------------*/
#header .header{position: fixed;top: 0;left: 0;z-index: 99;height: 90px;width: 100%;background: rgba(255,255,255,0.98);min-width: 950px;} /*vip.css 안에 header 클래스와 충돌되어 앞에 아이디부여함*/
.header .search{position: absolute;top: 0;left: 142px;height: 44px;padding: 23px 20px 23px 30px;}
.header .search--box{display: block;width: auto;}
.header .search--box .searchform .search-area{width: 336px;height: 32px;border: 2px solid #222;border-radius: 22px;background: #fff;position: relative;padding: 4px 50px 4px 20px;}
.header .search--box .searchform .search-area .input--searchbox{width: 100%;height: 32px;border: 0;line-height: 32px;}
.header .search--box .searchform .search-area .input--searchbox::placeholder{color:#808080; font-size:13px; font-weight:400}
.header .search--box .searchform .search-area .input--searchbox:-ms-input-placeholder{color:#808080}
.header .search--box.active .searchform .search-area{border-color:#00b8ff}
.header .search--box .searchform .search-area .btn--search{position: absolute;top: 4px;right: 15px;width: 32px;height: 32px;}
.header .search--autocomplete{display:none; position: absolute;width: 408px;border: 1px solid #ccc;margin-top: 10px;background: #fff;}
.header .search--autocomplete .autocomplete-list{width: 100%;}
.header .search--autocomplete .autocomplete-list .link{padding: 10px 19px;line-height: 22px;display: block;}
.header .search--autocomplete .autocomplete-list .link:hover{background: #fafafa}
.header .search--autocomplete .autocomplete-list li .keyword{color:#00b8ff}
.header .search--autocomplete .autocomplete-list li span{color:#808080}
.header .search--suggest{position: absolute;width: 408px;border: 1px solid #ccc;margin-top: 10px;background: #fff;display: none;}
.header .search--suggest .search--suggest__recentlysearch{width: auto;border-bottom: 1px solid #f2f2f2;padding: 20px;}
.header .search--suggest .search--suggest__recentlysearch h3{font-size: 13px;line-height: 21px;color: #222;width: auto;display: block ;margin-bottom: 20px;}
.header .search--suggest .search--suggest__recentlysearch .case-result{padding:0 ; text-align: left;}
.header .search--suggest .search--suggest__recentlysearch .case-result__none {text-align: center;padding-top: 40px;padding-bottom: 40px;}
.header .search--suggest .search--suggest__recentlysearch .case-result__none .text{font-size: 13px;color: #808080;}
.header .search--suggest .search--suggest__recentlysearch .btn-recentlysearch-reset{position: absolute;right: 20px;top: 20px;}
.header .search--suggest .search--suggest__recentlysearch .btn-recentlysearch-reset .btn-recentlysearch-reset__text{font-size: 12px;line-height: 21px;color: #808080;border-bottom: 1px solid #808080;}
.header .search--suggest .search--suggest__recentlysearch .format-round-list{width: 100%;overflow: auto;}
.header .search--suggest .search--suggest__recentlysearch .format-round-list__item{float: left;margin-right: 4px;border-radius: 13px;border: 1px solid #e5e5e5;position: relative;margin-bottom: 10px;}
.header .search--suggest .search--suggest__recentlysearch .format-round-list__link {display: inline-block;padding-left:  10px;padding: 3px 22px 3px 10px;}
.header .search--suggest .search--suggest__recentlysearch .format-round-list__link .format-round-list__link__text {display:inline-block;  font-size: 12px; line-height: 18px; color:#222; max-width:111px;}
.header .search--suggest .search--suggest__recentlysearch .format-round-list__del {position: absolute;right: 0;top: 0;padding: 8px 6px;display: inline-block;font-size: 0;}
.header .search--suggest .search--suggest__recentlysearch .format-round-list__del .icon{vertical-align:top}
.header .search--suggest .search--suggest__popularsearch{position:relative;overflow: auto;width: auto;padding: 20px;}
.header .search--suggest .search--suggest__popularsearch h3{font-size: 13px;line-height: 21px;color: #222;width: auto;display: block;margin-bottom: 20px;}
.header .search--suggest .search--suggest__popularsearch .time{position: absolute;right: 20px;top: 21px;font-size: 12px;line-height: 18px;color: #ccc;display: inline-block;}
.header .search--suggest .search--suggest__popularsearch .popularsearch-list{float: left;width: 50%;}
.header .search--suggest .search--suggest__popularsearch .popularsearch-list .ps-list{width: 100%;     margin-bottom: 4px;}
.header .search--suggest .search--suggest__popularsearch .popularsearch-list .link{display: inline-block;padding: 2px 15px 2px 4px;}
.header .search--suggest .search--suggest__popularsearch .popularsearch-list .num{display: inline-block;font-size: 13px;line-height: 21px;color: #ccc;width: 15px;}
.header .search--suggest .search--suggest__popularsearch .popularsearch-list .text{font-size: 13px;line-height: 21px;color: #222;display: inline-block;}
.header .search--suggest .search--suggest__close{display: block;margin-top: 10px;border-top: 1px solid #f2f2f2;height: 56px;position: relative;}
.header .search--suggest .search--suggest__close .btn-suggest-close{position: absolute;right: 8px;top: 8px;padding:  12px;}
.header .top-menu{height: 60px;padding: 12px 26px 18px 142px;}
.header .top-menu .util--menu{float: right;}
.header .top-menu .util--menu .menu {float: left;margin-left: 20px;display: inline-block;width: 60px;height: 60px;position: relative; }
.header .top-menu .util--menu .link{display: block;width: 100%;height: 100%;}
.header .top-menu .util--menu .menu.goto-cart .cnt{position: absolute;top: 10px;right: 8px;background: #ff3c50;color: #fff;border-radius: 18px;padding: 2px 7px 4px 7px;line-height: 16px;font-size: 12px;height: 14px;}
.header .top-menu .util--menu .menu.goto-cart .icon{position: absolute;top: 14px;left: 6px;}
.header .top-menu .util--menu .menu.goto-favorite .icon{position: absolute;top: 16px;left: 16px;}
.header .top-menu .util--menu .menu.goto-mypage .status{position: absolute;top: 10px;right: 4px;}
.header .top-menu .util--menu .menu.goto-mypage .icon.ico_mypage{position: absolute;top: 14px; left: 6px;}
.header .top-menu .util--menu .menu.goto-mypage .tooltip-layer{left: 8px;}
.header .top-menu .util--menu .menu.goto-mypage .tooltip-layer .tooltip-box:after,
.header .top-menu .util--menu .menu.goto-mypage .tooltip-layer .tooltip-box:before{left: 62%;}
.header .top-menu .util--menu .mypage-menu-box{display:block;width: auto;padding: 15px;}
.header .top-menu .util--menu .mypage-menu-box .mypage-menu{border-top: 1px solid #ebebeb;padding-top: 10px; }
.header .top-menu .util--menu .mypage-menu-box .mypage-menu--user{ padding-bottom: 10px;}
.header .top-menu .util--menu .mypage-menu-box .mypage-menu__list{margin-bottom: 3px;display: block;}
.header .top-menu .util--menu .mypage-menu-box .mypage-menu__link{display: block;position: relative;padding: 3px 6px;min-width: 100px;}
.header .top-menu .util--menu .mypage-menu-box .mypage-menu__link:hover  .mypage-menu__text{color:#000}
.header .top-menu .util--menu .mypage-menu-box .mypage-menu__text{font-size: 13px;line-height: 16px;color: #808080; vertical-align: middle;}
.header .top-menu .util--menu .mypage-menu-box .mypage-menu__text--point{font-size: 13px;line-height: 16px;color: #00b8ff; vertical-align: middle;}
.lt-ie9 .os--ie .header{background:#fff; border-bottom: 1px solid #f7f7f7}
.lt-ie9 .os--ie .header .top-menu .util--menu .menu.goto-mypage .tooltip-layer{left:-70px}

/*couponbox popup*/
#popup--my-couponbox .pop-contents{padding:0; width:460px; height:600px}
#popup--my-couponbox .pop-contents iframe{width:100%; height:100%;     background: #fff; }


 /** ---------------------------------
* FLOATING
* ------------------------------------*/
.floating{width: auto;overflow: auto;padding:0;margin:0;transform:translateX(60px);-ms-transform:translateX(60px); -webkit-transform:translateX(60px);  -webkit-transition: all 0.5s;-webkit-transition-timing-function:  cubic-bezier(.5,-0.02,0,.99) ;transition: all 0.5s;transition-timing-function:  cubic-bezier(.5,-0.02,0,.99) ;}
.floating.active{transform:translateX(0px);-webkit-transform:translateX(0px); -ms-transform:translateX(0px);}
.floating__topbtn{float: right;display: inline-block; margin-left:1px;}
.floating__topbtn .btn_gototop{display:block;width:59px; height:59px;}
.floating__recentlyitem{float: left;display: inline-block;background: #222;}
.floating__recentlyitem .recently-list{overflow: auto;padding: 9px 9px 9px 8px;}
.floating__recentlyitem .recently-list .recently-list__item{float: left;position: relative;display: inline-block;margin-left: 1px;}
.floating__recentlyitem .recently-list .recently-list__item:hover .recently-list__btn-del{display:block}
.floating__recentlyitem .recently-list .recently-list__more{float: left;position: relative;display: inline-block;margin-left: 1px;}
.floating__recentlyitem .recently-list .recently-list__btn-del{display:none;position: absolute;right: 0;top: 0;font-size: 10px;z-index: 3;}
.floating__recentlyitem .recently-list .recently-list__btn-vip{display: block;width: 41px;height: 41px;z-index: 2;}
.floating__recentlyitem .recently-list .recently-list__btn-more{display: block;width: 41px;height: 41px;z-index: 2;background: #fff;text-align: center;line-height: 39px;}
.floating__recentlyitem .recently-list .recently-list__img{width: 100%;height: 100%;}
.os--ie .floating__topbtn .btn_gototop .icon{position: relative }
.lt-ie8 .os--ie .floating{max-width: 497px; padding-right: 60px}
.lt-ie8 .os--ie .floating__topbtn{position: absolute;right: 0}
.lt-ie8 .os--ie .floating__recentlyitem .recently-list .recently-list__btn-more .icon.ico_plus{margin-top:14px;}


/** ---------------------------------
* FOOTER
* ------------------------------------*/
.footer{width: auto;padding: 30px 30px 46px 30px;border-top: 1px solid #222;}
.footer--menu{margin-bottom: 36px;float: left;width: 200px;}
.footer--menu .menu{margin-bottom: 13px;display: block;line-height: 4px;}
.footer--menu .menu .link_area {display: inline-block;padding: 1px 0;height: auto;min-width: 110px;}
.footer--menu .menu .link_area .text {display: inline-block;line-height: 22px;vertical-align: middle;font-size: 14px;color: #222;border-bottom:1px solid #fff;}
.footer--info {float: right;width: auto;}
.footer--info .section-helpcenter{min-width: 362px;margin-right: 80px;display: inline-block;vertical-align: top;}
.footer--info .section-helpcenter .motto{color: #222;font-size: 13px;line-height: 21px;text-decoration: underline;display: inline-block;}
.footer--info .section-helpcenter .tel{display: block;margin-top: 11px;font-size: 36px;margin-bottom: 77px;color: #222;font-weight: normal; }
.footer--info .section-helpcenter .link--strong{display: inline-block;    margin-right: 4px; margin-top:24px  }
.footer--info .section-helpcenter .link--strong .text{float: left;font-size: 12px;line-height: 18px;color: #222222}
.footer--info .section-helpcenter .link--strong .icon{float: left;margin-top: 6px;margin-left: 2px;}
.footer--info .section-companyinfo{display: inline-block;vertical-align: top;min-width: 362px;}
.footer--info .section-companyinfo .section-title{display: inline-block;font-weight:normal;font-size: 12px;line-height: 18px;color: #222;margin-bottom: 15px;}
.footer--info .section-companyinfo .companyinfo_company{display:block;margin-bottom: 30px;}
.footer--info .section-companyinfo .companyinfo_cs {margin-bottom:30px}
.footer--info .section-companyinfo .companyinfo_cs .desc-title{min-width:24px}
.footer--info .section-companyinfo .companyinfo_cs .link{display: inline-block;color: #222222;    margin-right: 4px;}
.footer--info .section-companyinfo .companyinfo_cs .link .section-title{float: left;}
.footer--info .section-companyinfo .companyinfo_cs .link .text{float: left;font-size: 12px;line-height: 18px; font-weight:normal}
.footer--info .section-companyinfo .companyinfo_cs .link .icon{float: left;margin-top: 6px;margin-left: 2px;}
.footer--info .section-companyinfo .companyinfo_auth .link{display: inline-block;color: #222222;    margin-right: 4px;}
.footer--info .section-companyinfo .companyinfo_auth .link .text{float: left;font-size: 12px;line-height: 18px; font-weight:normal}
.footer--info .section-companyinfo .companyinfo_auth .link .icon{float: left;margin-top: 6px;margin-left: 2px;}
.footer--info .desc .desc-title{float: left;display: inline-block; color: #808080;font-size: 12px;line-height: 18px;margin-right: 12px;min-width: 67px;margin-bottom: 6px;}
.footer--info .desc .desc-cont{display: block;color: #808080;font-size: 12px;line-height: 18px;margin-bottom: 6px;}
.footer--info .desc .desc-cont .link{display: inline-block;color: #808080;}
.footer--info .desc .desc-cont .link:hover {color:#000}
.footer--copyright {float: none;display: block;clear: both;width: 100%;padding-top: 35px;margin-top: 35px;border-top: 1px solid #f2f2f2;}
.footer--copyright .desc{font-size: 12px;line-height: 20px;color: #b2b2b2;}
.footer--copyright .desc .link--popup{color: #808080; font-weight:400}
.footer--copyright .copyright{margin-top: 18px;color: #b2b2b2;font-size: 12px;line-height: 20px;}
.lt-ie8 .os--ie .footer{height:513px;}
.lt-ie8 .os--ie .footer--info .section-helpcenter{float:left}
.lt-ie8 .os--ie .footer--info .section-companyinfo{float:left}

/** ---------------------------------
* POPUP
* ------------------------------------*/
/***********popup-layer************/
/*layout*/
/*  type-center-black : popup position is FULL + black close btn
/*  type-alert:  popup position is FULL + custom alert popup
*/
.popup-layer{  position: fixed;top: 0; left: 0; }
.popup-layer:after{content:""}
.popup-layer .pop-position{position: fixed; }
.popup-layer .pop-close{position: fixed;z-index: 600;}
.popup-layer .pop-contents{z-index: 90;width: auto;height: auto;min-width:200px;padding:38px 50px 0 50px;background: #fff;}

.popup-layer.type-center-black .pop-position{ top: 50%;left: 50%; transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%);  -ms-transform: translate(-50%, -50%);}
.popup-layer.type-center-black .pop-close{top: 0px;right: 0;width: 38px;height: 38px;z-index: 100;position:absolute;}
.popup-layer.type-center-black .pop-close .btn_popup_close {  }

.popup-layer.type-center-black.type-alert .pop-contents{padding:40px 200px 100px 50px;}
.popup-layer.type-center-black.type-alert .pop-position{ top: 50%;left: 50%; transform: translate(-50%, -50%); -webkit-transform: translate(-50%, -50%); -ms-transform: translate(-50%, -50%);}
.popup-layer.type-center-black.type-alert .pop-close{top: 100%;right: 50px;width: auto;height: 30px;z-index: 100;position:absolute;margin-top: -70px;background: #00b8ff;width: 120px;height: 30px;text-align: center;line-height: 30px;color: #fff; font-size:14px;}

/*popup  effect   */
.popup-layer  {display:none; opacity:0 ;  transition: all 0.4s; -webkit-transition: all 0.4s; transition-timing-function:  cubic-bezier(.71,.24,.05,.98) ;-webkit-transition-timing-function: cubic-bezier(.71,.24,.05,.98) ;}
.popup-layer.active{ display: block; z-index: 999;   opacity:1; }   /*galaxy note 2 bug -- solved :  z-index: -1; opacity:1;   */

/*tooltip_popup*/
.tooltip-layer{display:none;position: absolute;top: 100%;left: 50%;z-index: 50;width: auto;margin-top: 0;transform: translateX(-50%); -webkit-transform: translateX(-50%); -ms-transform: translateX(-50%);}
.tooltip-layer.active{display:block;}
.tooltip-layer .tooltip-box {position: relative;background: #fff;border: 1px solid #222;padding:0px;text-align: left;}
.tooltip-layer .tooltip-box:after,
.tooltip-layer .tooltip-box:before {bottom: 100%;left: 50%;border: solid transparent;content: " ";height: 0;width: 0;position: absolute;pointer-events: none;}
.tooltip-layer .tooltip-box:after {border-color: rgba(255, 255, 255, 0);border-bottom-color: #fff;     border-width: 6px;    margin-left: -6px;    transform: translateY(1px); -webkit-transform: translateY(1px); -ms-transform: translateY(1px); }
.tooltip-layer .tooltip-box:before {border-color: rgba(128, 128, 128, 0);border-bottom-color: #222;border-width: 6px;margin-left: -6px;}
.tooltip-dimmed{  background: transparent; position: fixed;top: 0;left: 0;width: 100%;height: 1000%;z-index: 30; }


/** ---------------------------------
* WINDOW POPUP
* ------------------------------------*/
.page--popup #wrapper{min-width:inherit}
.page--popup #container{padding:0}
.page--popup #contents{min-height:inherit;padding:0}
.page--popup .popup-layer{display:block;position:static;top:inherit;left:inherit;opacity:1;z-index:1;
 transform:none;-webkit-transform:none;transition:none;-webkit-transition:none;transition-timing-function:none;-webkit-transition-timing-function:none;
}
.page--popup #wrapper .popup-layer .pop-position{position:static;top:inherit;left:inherit;transform:none;-webkit-transform:none}
.page--popup #wrapper .popup-layer .pop-contents{padding-bottom:40px}
.page--popup .win-coupon_cont{}
.page--popup .coupon-layer .win-coupon_cont{width:510px;padding:22px 0 90px 0}
.page--popup .coupon-layer.popup-layer.type-center-black .pop-close.pop-submit{top:100%;right:50px;width:auto;height:30px;z-index:100;position:absolute;margin-top:-70px;background:#00b8ff;width:120px;height:30px;text-align:center;line-height:30px;color:#fff;font-size:14px}
.page--popup .coupon-layer .win-coupon_cont .win-coupon_cont__title{}
.page--popup .coupon-layer .win-coupon_cont .win-coupon_cont__title>strong{display:block;font-size:18px;line-height:22px;color:#222}
.page--popup .coupon-layer .win-coupon_cont .win-coupon_cont__title>span{display:block;margin-top:10px;font-size:13px;line-height:18px;color:#222;font-weight:normal}
.page--popup .coupon-layer .win-coupon_cont .win-coupon_cont__txtbox{margin-top:25px;max-height:174px;border-top:1px solid #e5e5e5;padding:20px 60px 20px 0;font-size:13px;line-height:22px;color:#808080;overflow-x:hidden;overflow-y:auto;box-sizing:border-box;}
.page--popup .download-layer .win-coupon_cont>strong{display:block;font-size:18px;line-height:22px;color:#222}
.page--popup .download-layer .win-coupon_cont>span{display:block;margin-top:10px;font-size:14px;line-height:18px;color:#808080;font-weight:normal}


/** ---------------------------------
* ITEMCARD
***soldout : $('.itemcard').addClass("soldout");
* ------------------------------------*/
/*itemcard > layout */
.itemcard{width:100%;background: #fff;}
.itemcard__img{width: 100%;position: relative;text-align:center;overflow: hidden;height: auto;}
.itemcard__img a:before{content: "";position: absolute;top: 0;left: 0;background: #000;display: block;z-index: 10;width: 100%;height: 100%;opacity: 0.04;}
.itemcard__img img{max-width: 100%;height: auto; display:block;     width: 100%; }
.itemcard__info{padding: 27px 20px 0 0;width: 100%;box-sizing: border-box;background: #fff;position: relative;}
.itemcard__info__major{width: 100%;height: auto;}
.itemcard__info__major .itemcard__link{display:block; overflow:hidden; }
.itemcard__info__major .itemcard__info__copyright{display: block;font-size: 15px;line-height: 23px;color: #222;font-weight: normal;}
.itemcard__info__major .itemcard__info__title{display: block;font-size: 15px;line-height: 23px;color: #222;}
.itemcard__info__major .itemcard__info__title.ellipsis{display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;word-wrap: break-word !important;max-height: 46px;white-space: normal;}
.itemcard__info__major .itemcard__info__price{display: block; margin-bottom: 5px; }
.itemcard__info__major .itemcard__info__price .format-price__value{display: inline;font-size: 20px;line-height: 22px;font-weight: bold;color: #222;}
.itemcard__info__major .itemcard__info__price .format-range{display: inline;font-size: 20px;line-height: 22px;font-weight: bold;color: #222;}
.itemcard__info__badge{width: auto;margin-top: 8px;margin-left: -2px;overflow: auto;margin-bottom: -2px;  }
.itemcard__info__action{width: 100%;overflow: visible; vertical-align:middle;height: auto;}
.itemcard__info__action .itemcard-action{display:block; overflow:auto;    margin-left: -10px; }
.itemcard__info__action .itemcard-action__list{float: left;margin-right: 10px;position: relative;padding-left: 10px;vertical-align:middle;line-height: 22px;     margin-top: 13px;}
.itemcard__info__action .itemcard-action__list .itemcard-action__button{line-height: 22px;vertical-align: top;display: inline-block;}
.itemcard__info__action .itemcard-action__list .itemcard-action__button .icon.sp-itemcard.ico_heart_n{vertical-align: top; margin-top: 3px;}
.itemcard__info__action .itemcard-action__list .itemcard-action__button.active .icon.sp-itemcard.ico_heart_n{background-position: 0 0px;}
.itemcard__info__action .itemcard-action__list .itemcard-action__button .icon.sp-itemcard.ico_relationplus{vertical-align: top; margin-top: 2px;}
.itemcard__info__action .itemcard-action__list .itemcard-action__desc{display: inline-block;line-height: 22px;}
.itemcard__info__action .itemcard-action__list .itemcard-action__text{font-size: 13px;line-height: 22px;color: #808080;font-weight: normal;}
.itemcard__info__action .itemcard-action__list:before{content:"";width: 1px;background: #f2f2f2;height: 10px;display: block;position: absolute;top: 50%;left: 0;transform: translateY(-50%);-webkit-transform: translateY(-50%);}
.itemcard__info__action .itemcard-action__list:first-child:before{display:none}
.os--ie .itemcard__info__action .itemcard-action__list.action-zzim .itemcard-action__button{margin-right: 4px; }
.os--ie .itemcard__info__action .itemcard-action__list.action-relativeitem .icon.ico_relationplus {margin-right: 4px;  }
.os--ie.lt-ie8 .itemcard__info__action .itemcard-action__list.action-relativeitem .itemcard-action__button{width:80px;  }


.itemcard__info__footer{margin-top: 17px;padding-top: 8px;overflow: auto;border-top: 1px solid #f2f2f2;}
.itemcard__info__footer .itemcard__info__footer__link{display:block;  }
.itemcard__info__footer .itemcard__info__footer__logo{max-height: 20px;vertical-align: middle;  max-width: 100px;margin-top: 1px }
.itemcard__info__footer .itemcard__info__footer__text{display: inline; width:auto; line-height: 21px;vertical-align: middle;font-size: 13px;color: #222; }
.itemcard__info__footer .itemcard__info__footer__icon.arrow2_bk_right{margin-top: 10px;vertical-align: top;  }
.itemcard__info__store{float: left;width: auto;vertical-align: middle;display: inline-block;line-height: 21px;margin-right: 18px;margin-top: 7px;}
.itemcard__info__promotion{float: left;vertical-align: middle;display: inline-block;line-height: 21px;margin-top: 7px;}
.itemcard__info__promotion .itemcard__info__footer__tag{margin-right:0px;}
.case-soldout .itemcard__img .itemcard__link:after{content: "";position: absolute;top: 0;left: 0;background:url(//pics.g9.co.kr/pc/cloud/common/ico-badge-soldout.png) center center  no-repeat;background-size: 124px auto; display: block;z-index: 11;width: 100%;height: 100%;}
.os--ie .itemcard__info__footer .itemcard__info__footer__text{line-height:20px;}
.os--ie .itemcard__info__footer .itemcard__info__footer__logo{margin-right: 4px}
.os--ie .itemcard__info__footer .itemcard__info__footer__icon.arrow2_bk_right{margin-top:8px ; margin-left:4px }
.os--ie .itemcard__info__promotion .itemcard__info__footer__tag{margin-right: 4px}
.lt-ie9 .os--ie .itemcard__img a:before{background:url(//pics.g9.co.kr/pc/cloud/common/ie_itemcard_img_dimmed.png) center center  repeat;}
.lt-ie8 .itemcard__info__footer{height: 230px; }
.lt-ie8 .itemcard__info__store{float:none }
.lt-ie8 .itemcard__info__promotion{float:none }

/*itemcard > TYPE-SMALL */
.type-small .itemcard__info{padding:22px 20px 0 0}
.type-small .itemcard__info__major .itemcard__info__price{margin-bottom: 7px;}
.type-small .itemcard__info__major .itemcard__info__price .format-price__value{font-size: 16px;line-height: 20px;}
.type-small .itemcard__info__major .itemcard__info__title{font-size: 13px;line-height: 21px;}
.type-small .itemcard__info__major .itemcard__info__copyright{display:none}
.type-small .itemcard__info__major .itemcard__info__title.ellipsis{display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;word-wrap: break-word !important;max-height: 42px;white-space: normal;}
.type-small .itemcard__info__action .itemcard-action__list .itemcard-action__text{font-size: 13px;line-height: 21px;}
.type-small .itemcard__info__action .itemcard-action__list.action-relativeitem{display:none}
.type-small .itemcard__info__action .itemcard-action__list .itemcard-action__button .icon.sp-itemcard.ico_heart_n{width:18px; height:16px; background-position: -70px 0;}
.type-small .itemcard__info__action .itemcard-action__list .itemcard-action__button.active .icon.sp-itemcard.ico_heart_n{background-position: -48px 0;}
.type-small .itemcard__info__promotion .format-link__text{font-size: 13px;line-height: 21px;}
.type-small .itemcard__info__promotion .itemcard__info__footer__tag{width: 17px; height: 14px;background-position: 0 -24px;}
.type-small .case-soldout  .itemcard__img .itemcard__link:after{background-size:112px auto !important; }

/*itemcard > bestcard--- 개발팀요청  */
.bestcard .itemcard__info__ranking{width: 26px;height: 26px;background: #222;text-align: center;margin-bottom: 8px;position: absolute;top: -26px;left: 0;}
.bestcard .itemcard__info__ranking_text{color: #fff;font-size: 11px;line-height: 26px;}
.comp--best .format-itemcard-list__item:nth-child(n+11) .itemcard__info__ranking{background-color:#808080}

/** ---------------------------------
* DESIGN SELETBOX
* ------------------------------------*/
.ui-selectbox{position:relative;height:32px;border:1px solid #ccc;z-index:15;background-color:#fff}
.ui-selectbox>button{position:relative;min-width:115px;height:32px;padding:0 32px 0 10px;text-align:left;color:#222}
.ui-selectbox>button .icon{position:absolute;top:11px;right:9px}
.ui-selectbox>button.active .icon{background-position:0 0}
.ui-selectbox ul{display:none;position:absolute;top:32px;left:-1px;width:100%;padding:5px 0;border:1px solid #b2b2b2;background-color:#fff}
.ui-selectbox ul li{}
.ui-selectbox ul li button{display:block;width:100%;padding:10px 12px;text-align:left;color:#808080}
.ui-selectbox ul li button:hover{background-color:#F0F0F0}
.ui-selectbox ul li button.selected{color:#00b8ff}


/*UIO BANNERCARD */
.insert_bannercard{width: 100%;}
.insert_bannercard .insert_bannercard__link{display:block }
.insert_bannercard__visual{position: relative;height: auto; }
.insert_bannercard__visual .insert_bannercard__visual__img{height: auto;width:100%;}
.insert_bannercard__visual .insert_bannercard__visual__img .img-bannercard{width:100%}
.insert_bannercard__visual .insert_bannercard__visual__summary{position: relative;width: 100%;margin-top: 28px;}
.insert_bannercard__visual .insert_bannercard__visual__summary .icon.ico_bk_long_arrow2_right{margin-top:15px}
.insert_bannercard__visual .insert_bannercard__visual__summary_bg{padding-right: 26px;display: block;overflow: auto;}
.insert_bannercard__visual .insert_bannercard__visual__summary .insert_bannercard__visual__summary__title{display: block;}
.insert_bannercard__visual .insert_bannercard__visual__summary .insert_bannercard__visual__summary__title b{display: block;}
.insert_bannercard__visual .insert_bannercard__visual__summary .insert_bannercard__visual__summary__title .insert_bannercard__visual__summary__row{background: #222;color: #fff; display: inline-block;width: auto;font-size: 16px;line-height: 28px;max-width: 100%;padding:  0 6px;margin-top: -1px; font-weight:400}
.insert_bannercard__visual .insert_bannercard__visual__summary .insert_bannercard__visual__summary__subtitle{font-size: 14px;line-height: 22px;color: #808080;padding-top: 4px;background:#fff;margin-top: 4px;letter-spacing: -0.5px;}
.insert_bannercard__visual .insert_bannercard__visual__summary .insert_bannercard__visual__summary__row{display: block;width: 100%;}



/** ---------------------------------
* LINE BANNER
* ------------------------------------*/
.linebanner{width:100%;}
.linebanner__link{width:100%; display:block;}
.linebanner__img{text-align:center}
.linebanner__img .img-banner{display:block; margin:0 auto}


/** ---------------------------------
* PAGING
* ------------------------------------*/
.format-paging-box{margin-top:70px;text-align:left;padding:30px 0;background-color:#fff}
.format-paging-box.paging-center{text-align:center}
.format-paging-box.paging-right{text-align:right}
.format-paging-box .format-paging__box .dot-number,
.format-paging-box .format-paging__prev,
.format-paging-box .format-paging__next,
.format-paging-box .format-paging__number{display:inline-block;vertical-align:middle;min-width:34px;height:34px;font-size:13px;color:#222;text-align:center;line-height:32px;padding:0 8px;border:1px solid #ccc;box-sizing:border-box}
.format-paging-box .format-paging__box .format-paging__number.active,
.format-paging-box .format-paging__box .format-paging__number:hover,
.format-paging-box .format-paging__box .format-paging__number:focus{border-color:#222;color:#fff;background-color:#222}
.format-paging-box .format-paging__box .disabled:hover,
.format-paging-box .format-paging__box .disabled:focus{border-color:inherit;color:inherit;background-color:inherit}
.format-paging-box .format-paging__box .dot-number{border-color:#f2f2f2;color:#ccc;line-height:24px;cursor:default}
.format-paging-box .format-paging__box .dot-number:hover,
.format-paging-box .format-paging__box .dot-number:focus{border:1px solid #f2f2f2;background-color:#fff;color:#ccc}
.format-paging-box .format-paging__box .format-paging__number.disabled{border-color:#f2f2f2;color:#ccc;cursor:default}
.format-paging-box>a{border-color:#ccc;line-height:29px}
.format-paging-box>a.disabled{border-color:#f2f2f2;cursor:default}
.format-paging-box>a.format-paging__prev .icon{background-position:0 -40px}
.format-paging-box>a.format-paging__next .icon{background-position:-12px -40px}
.format-paging-box>a.format-paging__prev.disabled .icon{background-position:-23px -40px}
.format-paging-box>a.format-paging__next.disabled .icon{background-position:-37px -40px}

/** ---------------------------------
* PAGE LOCATION (ITEMS LIST TYPE USE)
* ------------------------------------*/
.comp--location{height:auto;padding:24px 0 6px 30px;font-size:13px}
.comp--location>a{display:inline-block;vertical-align:middle;color:#222;padding:0 4px 10px}
.comp--location a:hover,
.comp--location a:focus,
.comp--location button:hover,
.comp--location button:focus{text-decoration:underline}
.comp--location .ico_arrow2_gray_right{margin-top:6px;vertical-align:top}
.comp--location .comp--location__select{position:relative;display:inline-block;vertical-align:middle;padding:0 4px 10px;z-index:30}
.comp--location .comp--location__select .comp--location__select__option button:first-child,
.comp--location .comp--location__select .comp--location__select__option a{display:inline-block;vertical-align:middle;margin-right:5px;font-size:13px;color:#222}
.comp--location .comp--location__select .comp--location__select__option button{display:inline-block;margin-top:1px;vertical-align:middle}
.comp--location .comp--location__select .comp--location__select__option button .ico_dropdown_down{display:inline-block;margin:-2px 0 0 0;vertical-align:middle;}
.comp--location .comp--location__select .comp--location__select__option.active button .ico_dropdown_down{background-position:-68px  0px}
.comp--location .comp--location__select .comp--location__select__option.active button:after{}
.comp--location .comp--location__select ul{display:none;position:absolute;top:25px;left:-4px;min-width:150px;max-height:280px;padding:8px 0;border:1px solid #222;background-color:#FFF;overflow-x:hidden;overflow-y:auto}
.comp--location .comp--location__select ul li button,
.comp--location .comp--location__select ul li a{display:block;padding:9px 10px;font-size:12px;color:#808080}
.comp--location .comp--location__select ul li button .icon,
.comp--location .comp--location__select ul li a .icon{display:none}
.comp--location .comp--location__select ul li button.selected,
.comp--location .comp--location__select ul li a.selected{position:relative;color:#00b8ff;font-weight:bold}
.comp--location .comp--location__select ul li button.selected:after,
.comp--location .comp--location__select ul li a.selected:after{content:'';position:absolute;top:8px;right:10px;
 background:url(//pics.g9.co.kr/pc/cloud/common/sp_etc.png) no-repeat;background-size: 200px auto;
 width:11px; height:9px; background-position:-100px -30px;
}
.comp--location .comp--location__select .comp--location__select__option.active+ul{display:block}


/** ---------------------------------
* BANNER SLIDER(1~2 VIEW)
* use : page--benefit, page--global, page--mall
* ------------------------------------*/
.comp--linebanner-slide{position:relative;margin-bottom:60px;padding:0 25px;overflow:hidden}
.comp--linebanner-slide, .comp--linebanner-slide .comp--linebanner__wrap, .comp--linebanner-slide .comp--linebanner__wrap ul{height:330px} /* script loading row height bug fixed */
.comp--linebanner-slide .comp--linebanner__wrap{}
.comp--linebanner-slide .comp--linebanner__wrap ul{overflow:hidden}
.comp--linebanner-slide .comp--linebanner__wrap ul li{float:left;padding:0 5px}
.comp--linebanner-slide .slide__btn-prev,
.comp--linebanner-slide .slide__btn-next{position:absolute;top:50%;margin-top:-19px}
.comp--linebanner-slide .slide__btn-prev{left:30px}
.comp--linebanner-slide .slide__btn-next{right:30px}
.comp--linebanner__card{position:relative;overflow:hidden}
.comp--linebanner__card .bnn-slide__title{position:absolute;left:67px;bottom:77px;max-width:380px}
.comp--linebanner__card .bnn-slide__title strong{display:block;font-size:32px;color:#222;line-height:46px;font-weight:200;letter-spacing:-1px;white-space:nowrap}
.comp--linebanner__card .bnn-slide__title span{display:block;margin-top:10px;font-size:13px;line-height:22px;color:#222;;white-space:nowrap;opacity:.6}
.comp--linebanner__card .bnn-slide__title .icon{margin-top:17px}
.comp--linebanner__card .bnn-slide__visual{display:block;padding-left:294px;height:330px;text-align:center;overflow:hidden;zoom:1}
.comp--linebanner__card .bnn-slide__visual img{display:inline-block;vertical-align:top;max-width:400px;max-height:330px}

@media all and (max-width:1600px){
 .comp--linebanner-slide .bnn-slide__visual{padding-left:502px}
 .comp--linebanner-slide .bnn-slide__title{left:201px}

}


/** ---------------------------------
* FORMAT
* ------------------------------------*/
/* format--link area type */
.format-link{display:inline-block;overflow: auto;}
.format-link__text{float:left; display:inline-block;}
.format-link__icon{float:left; display:inline-block;}
.format-link__logo{float:left; display:inline-block;}

/* format--badge-list area type */
.format-badge-group{display:block; width:100%; }
.format-badge-group__list{float:left; width:auto;  margin-left: 2px;margin-bottom: 2px; }
.format-badge-group__list img{display:inline-block;vertical-align:middle}
.lt-ie8 .os--ie .format-badge-group{width:auto; }
/* format--itemcard-list area type */

.lt-ie8 .os--ie .format-itemcard-list{width: auto;  margin-left: 0px; overflow:auto;     margin-bottom: 0px;}
.lt-ie8 .os--ie .format-itemcard-list__item{position:relative; float:left;width: 20%;padding-left: 0;box-sizing: border-box; margin-bottom:85px; }
.os--ie .format-itemcard-list{font-size:0}

.format-result {width:100%;}
.format-result__list {width:100%;   }
.format-result__more {width:100%;margin-top: 50px;text-align: center;}
.format-result__more__link {width: auto;text-align:center;}
.format-result__more__link--button{border: 1px solid #000;padding: 12px 30px;border-radius: 20px;font-size: 14px;color: #000;}
.format-result__more__link--button .icon.arrow_2_bk_right{margin-left:6px; vertical-align:top; margin-top:5px}

.corner {width: 100%;}
.corner .corner__header{width: 100%; }
.corner .corner__body{width: 100%;}
.corner .corner__footer{width:100%}




/** ---------------------------------
* COMPONENT
/*  type-default : dpi > 1600  == 5 colums(20%)   /  dpi ≤ 1600 == 4 colums(25%)
/*  type-small : dpi > 1600  == 8 colums(12.5%)  /  dpi ≤ 1600 == 6 colums(16.66%)
** ------------------------------------*/
/*comp--best */
.comp--best.type-default{padding:0 30px;}
.comp--best.type-default .format-itemcard-list__item{width:20%;}
.comp--best.type-small{padding:0 }
.comp--best.type-small .corner{position:relative}
.comp--best.type-small .corner__header{width:auto; padding:0  30px; }
.comp--best.type-small .corner__body{padding:0  30px 0 4px; box-sizing: border-box;}
.comp--best.type-small .corner__footer{position: absolute;top: 3px;right: 30px;display: inline-block;width: auto;}
.comp--best.type-small .corner__footer .corner__footer__link{font-size: 16px;line-height: 24px;color: #222;}
.comp--best.type-small .corner__footer .icon.ico_bk_long_arrow2_right{margin-left:2px;vertical-align: top;margin-top: 9px;}
.comp--best.type-small .format-itemcard-list__item{width:12.5%;}
.comp--best.type-small .format-itemcard-list.slider-carousel .format-itemcard-list__item{display:inline-block; padding-left:26px; box-sizing:border-box; }
.comp--best.type-small .format-itemcard-list.slider-carousel{padding-bottom: 78px;}
.comp--best.type-small .format-itemcard-list.slider-carousel .slick-arrow{position:absolute;bottom:0;background:url(//pics.g9.co.kr/pc/cloud/common/sp_etc.png) no-repeat;background-size: 200px auto;display:block;width:38px;height:38px;font-size: 0;}
.comp--best.type-small .format-itemcard-list.slider-carousel .slick-prev{left:26px;background-position:0 -102px}
.comp--best.type-small .format-itemcard-list.slider-carousel .slick-next{left:64px;background-position:-42px -102px;border-left:1px solid #ccc;box-sizing:content-box;}
.comp--best.type-small .format-itemcard-list.slider-carousel .slick-arrow.slick-disabled{opacity: 0.4}
.comp--best.type-small .format-itemcard-list.slider-carousel .slick-arrow.slick-disabled.slick-next{border-left: 1px solid #888}

@media all and (max-width:1600px){
 .comp--best.type-default .format-itemcard-list__item{width:25%}
 .comp--best.type-small .format-itemcard-list__item{width:16.66%}
}

/*comp--list */
.comp--list{padding:0  30px; }
.comp--list.type-default .format-itemcard-list__item{width:20%;}
.comp--list.type-small .format-itemcard-list__item{width:12.5%;}
.comp--list .itemcard__info__major .itemcard__info__copyright{display:none}
.comp--list .format-itemcard-list{display:table; width: auto; min-width:100%; margin-left: -26px; overflow:auto;     margin-bottom: -85px;}
.comp--list .format-itemcard-list__item{position:relative; float:left;width: 20%;padding-left: 26px;box-sizing: border-box; margin-bottom:85px;    float: none;vertical-align: top;display: inline-block;word-break: break-all; }
@media all and (max-width:1600px){
 .comp--list.type-default .format-itemcard-list__item{width:25%}
 .comp--list.type-small .format-itemcard-list__item{width:16.66%}
}


/*comp--recommend */
.comp--recommend{padding:0  30px; }
.comp--recommend.type-default .format-itemcard-list__item{width:334px !important}
.comp--recommend .itemcard__info__footer{display:none}
.comp--recommend .itemcard__info__major .itemcard__info__copyright{display:none}
.comp--recommend .itemcard__info__action .itemcard-action__list.action-relativeitem{display:none}
.comp--recommend .format-itemcard-list{display:table; width: auto; margin-left: -26px; overflow:auto;     margin-bottom: -85px;}
.comp--recommend .format-itemcard-list__item{position:relative; float:left;width: 20%;padding-left: 26px;box-sizing: border-box; margin-bottom:85px;    float: none;vertical-align: top;display: inline-block;word-break: break-all; }

@media all and (max-width:1600px){
 .comp--recommend.type-default .format-itemcard-list__item{width:334px !important}
 .comp--recommend.type-small .format-itemcard-list__item{width:16.66%}
}


/*comp--hotdeal */
.comp--hotdeal{padding: 0 30px;overflow: visible;}
.comp--hotdeal .corner{position:relative}
.comp--hotdeal .corner__header{margin-bottom: 34px;}
.comp--hotdeal .corner .corner__header .corner__header__title{font-size:42px;line-height: 52px;color:#222;font-weight: 200;display: inline-block;}
.comp--hotdeal .corner .corner__header .corner__header__title .icon.badge_new{margin-left: -10px;margin-top: -2px;vertical-align: top;}
.comp--hotdeal .corner__footer{position: absolute;top: 14px;right: 0;display: inline-block;width: auto;}
.comp--hotdeal .corner__footer .corner__footer__link{font-size: 16px;line-height: 24px;color: #222;}
.comp--hotdeal .corner__footer .icon.ico_bk_long_arrow2_right{margin-left:2px;vertical-align: top;margin-top: 9px;}


.comp--hotdeal.type-default  .format-itemcard-list__item{width:20%;}
.comp--hotdeal.type-small .format-itemcard-list__item{width:12.5%;}
.comp--hotdeal .format-itemcard-list{display:table; width: auto; min-width:100%;  margin-left: -26px; overflow:auto;     margin-bottom: -85px;}
.comp--hotdeal .format-itemcard-list__item{position:relative; float:left;width: 20%;padding-left: 26px;box-sizing: border-box; margin-bottom:85px;    float: none;vertical-align: top;display: inline-block;word-break: break-all; }
.comp--hotdeal .flashdeal-badge{background: url(//pics.g9.co.kr/pc/cloud/common/img-flashdeal.png) no-repeat;background-size: 74px auto;background-position: 0 0;width: 74px;height: 74px;position: absolute;top: -15px;right: -15px;z-index: 10;text-align: center;z-index: 20;}
.comp--hotdeal .flashdeal-badge .hhmm{display: inline-block;font-size: 12px;font-weight: bold;color: #222;margin-top: 32px;}
.comp--hotdeal .flashdeal-badge .ss{display: inline-block;font-size: 12px;font-weight: bold;color: #ff3c50;margin-top: 32px;}
.comp--hotdeal .itemcard__info__promotion .itemcard__info__footer__tag{width: 19px; height: 15px; background-position: -24px -24px;}
.comp--hotdeal .itemcard__info__footer{padding-top:0;border-top: 0;}
.comp--hotdeal .itemcard__info__store{margin-top: 0;float: none;margin-top: 0;margin-bottom: 27px;width: 100%;margin-right: 0;}
.comp--hotdeal .itemcard__info__promotion{float: none;width: 100%;margin-top: 0;border-top: 1px solid #f2f2f2;padding-top: 15px;padding-bottom: 15px;}
@media all and (max-width:1600px){
 .comp--hotdeal.type-default  .format-itemcard-list__item{width:25% !important}
 .comp--hotdeal.type-small  .format-itemcard-list .format-itemcard-list__item{width:16.66%  !important}

}



/* itemcard > CPC */
.comp--cpc .format-itemcard-list{display:table; width: auto;min-width:100%; margin-left: -26px; overflow:auto;     margin-bottom: -85px;}
.comp--cpc .format-itemcard-list__item{position:relative; float:left;width: 20%;padding-left: 26px;box-sizing: border-box; margin-bottom:85px;    float: none;vertical-align: top;display: inline-block;word-break: break-all; }
.comp--cpc.type-round .format-itemcard-list__item{width:12.5%}
.comp--cpc.type-round .itemcard__img{border-radius:50%}
.comp--cpc.type-round .itemcard__info{padding-top:24px}
.comp--cpc.type-round .itemcard__info__major .itemcard__info__price .format-price__value{font-size:16px}
.comp--cpc.type-round .itemcard__info__major .itemcard__info__title{font-size:13px}
.comp--cpc.type-round .itemcard__info__major .itemcard__info__title.ellipsis{display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;word-wrap: break-word !important;max-height: 46px;white-space: normal;}
.comp--cpc.type-brandlist{}
.comp--cpc.type-brandlist .format-itemcard-list__item{width:25%;margin-bottom:70px}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__img{}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__img .itemcard__noimage{display:block;position:relative}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__img img+.itemcard__noimage{display:none}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__img .itemcard__noimage .itemcard__img__noimage{}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__img .itemcard__noimage .itemcard__img__logo{position:absolute;top:0;left:0;width:100%;height:100%;text-align:center}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__img .itemcard__noimage .itemcard__img__logo:after{content: "";display:inline-block;vertical-align:middle;width:1px;height:100%}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__img .itemcard__noimage .itemcard__img__logo img{display:inline-block;vertical-align:middle;width:auto;max-height:32px;}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__info .itemcard__info__footer{margin-top:0;padding-top:0;border-top:0}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__info .itemcard__info__footer .itemcard__info__store{float:none;display:block;margin:0}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__info .itemcard__info__footer .itemcard__info__store .itemcard__info__footer__logo{display:block}
.comp--cpc.type-brandlist .format-itemcard-list__item .itemcard__info .itemcard__info__footer .itemcard__info__thumb{display:none}
.comp--cpc.type-benefit .format-itemcard-list__item{width:25%;margin-bottom:26px}
.comp--cpc.type-benefit .format-itemcard-list__item .benefitcard-item{display:block;position:relative}
.comp--cpc.type-benefit .format-itemcard-list__item .benefitcard-item .benefitcard-item__title{position:absolute;top:0;left:15px;height:100%}
.comp--cpc.type-benefit .format-itemcard-list__item .benefitcard-item .benefitcard-item__title .benefitcard-item__title__pos{display:inline-block;vertical-align:middle;width:180px}
.comp--cpc.type-benefit .format-itemcard-list__item .benefitcard-item .benefitcard-item__title .benefitcard-item__title__pos>strong{display:block;font-size:16px;line-height:24px;color:#fff;font-weight:400}
.comp--cpc.type-benefit .format-itemcard-list__item .benefitcard-item .benefitcard-item__title .benefitcard-item__title__pos>span{display:block;font-size:12px;line-height:18px;font-weight:200;color:#fff;opacity:.5}
.comp--cpc.type-benefit .format-itemcard-list__item .benefitcard-item .benefitcard-item__title .benefitcard-item__title__dummy{display:inline-block;vertical-align:middle;width:1px;height:100%}
.comp--cpc.type-benefit .format-itemcard-list__item .benefitcard-item .benefitcard-item__card{display:block}
.comp--cpc.type-benefit .format-itemcard-list__item .benefitcard-item .benefitcard-item__card img{width:100%}
.comp--cpc.type-banner .format-benefit__list{padding:0 30px}
.comp--cpc.type-banner .format-itemcard-list__item{width:25%;margin-bottom:70px}
.comp--cpc.type-banner .format-itemcard-list__item .itemcard__img{}
.comp--cpc.type-banner .format-itemcard-list__item .itemcard__info{padding:18px 0 0 0;height:150px}
.comp--cpc.type-banner .format-itemcard-list__item .itemcard__info .itemcard__info__summary{}
.comp--cpc.type-banner .format-itemcard-list__item .itemcard__info .itemcard__info__summary .itemcard__info__summary__row{display:block;font-weight:400}
.comp--cpc.type-banner .format-itemcard-list__item .itemcard__info .itemcard__info__summary .itemcard__info__summary__title{display:block;font-size:18px;color:#222;line-height:27px;white-space:nowrap}
.comp--cpc.type-banner .format-itemcard-list__item .itemcard__info .itemcard__info__summary .itemcard__info__summary__title.ellipsis{display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;word-wrap: break-word !important;max-height: 55px;white-space: normal;}
.comp--cpc.type-banner .format-itemcard-list__item .itemcard__info .itemcard__info__summary .itemcard__info__summary__subtitle{display:block;margin-top:4px;font-size:13px;line-height:21px;color:#808080;font-weight:200}
.comp--cpc.type-banner .format-itemcard-list__item .itemcard__info .itemcard__info__summary .itemcard__info__summary__subtitle.ellipsis{display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;word-wrap: break-word !important;max-height: 42px;white-space: normal;}
.comp--cpc.type-banner .format-itemcard-list__item .itemcard__info .itemcard__info__badge{}
@media all and (max-width:1600px){
 .comp--cpc.type-round .format-itemcard-list__item{width:16.66%}
 .comp--cpc.type-webzine .format-itemcard-list__item,
 .comp--cpc.type-brandlist .format-itemcard-list__item,
 .comp--cpc.type-benefit .format-itemcard-list__item,
 .comp--cpc.type-banner .format-itemcard-list__item{width:33.3%}
 .comp--cpc.type-banner .format-itemcard-list__item:nth-child(n+4){display:none}
}


/*popup__related-items = popup__related-items*/
.popup__related-items{}
.popup__related-items .related-items__title{font-weight: 400;font-size: 13px;line-height: 21px;padding: 22px 0 16px;border-bottom: 1px solid #000;}
.popup__related-items .related-items__title .cnt{color: #00c6ff;font-size: 13px;margin-left: 4px;font-weight: normal;}
.popup__related-items .related-items__cont{width: auto;}
.popup__related-items .format-itemcard-list{width: 760px;overflow-y: visible;}
.popup__related-items .format-itemcard-list .slick-list{overflow-y: visible;}
.popup__related-items .format-itemcard-list__item{width:20%;display: inline-block;float: left;vertical-align: top;margin-bottom: 40px;}
.popup__related-items .format-itemcard-list__item .itemcard__info__badge{display:none}
.popup__related-items .format-itemcard-list__item .itemcard__info__footer{display:none}
.popup__related-items .itemcard__info{padding-top:6px;padding-right: 40px;}
.popup__related-items .itemcard__info__major .itemcard__info__copyright{display:none}
.popup__related-items .itemcard__info__major .itemcard__info__title{display:none}
.popup__related-items .itemcard__info__action .itemcard-action__list{display:none}
.popup__related-items .itemcard__info__action .itemcard-action__list.action-zzim{display:block;padding: 0;margin: 0;position:  absolute;top: 10px;right: 15px;}
.popup__related-items .itemcard__info__action .itemcard-action__list.action-zzim .itemcard-action__desc{display:none}
.popup__related-items .itemcard__info__major .itemcard__info__price .format-price__value{font-size: 14px;line-height: 21px;}
.popup__related-items .format-itemcard-list .slick-arrow{position: absolute;top: -40px;padding: 3px 7px;}
.popup__related-items .format-itemcard-list .slick-arrow.slick-disabled{opacity:0.4}
.popup__related-items .format-itemcard-list .slick-arrow.slick-prev {right: 43px;}
.popup__related-items .format-itemcard-list .slick-arrow.slick-next:before{content:"";background: #f2f2f2;width: 1px;height: 18px;display: block;left: -12px;position: absolute;top: 2px;}
.popup__related-items .format-itemcard-list .slick-arrow.slick-next{right: 0;}
.popup__related-items .case-soldout .itemcard__img .itemcard__link:after {display:none }




/** ---------------------------------
* LP/SRP ICON
* ------------------------------------*/
.icon.sp-lpsrp{background:url(//pics.g9.co.kr/pc/cloud/lpsrp/sp_lpsrp.png) no-repeat;background-size: 200px auto;display: inline-block;vertical-align: middle;font-size: 0;}
.icon.sp-lpsrp.ico_plus{width:12px; height:12px; background-position:-40px 0px}
.icon.sp-lpsrp.ico_minus{width:12px; height:12px; background-position:-54px 0px}
.icon.sp-lpsrp.ico_viewmode1_on{width:22px; height:22px; background-position:-0px 0px}
.icon.sp-lpsrp.ico_viewmode1_off{width:22px; height:22px; background-position:-0px -50px}
.icon.sp-lpsrp.ico_viewmode2_on{width:22px; height:22px; background-position:0px -26px}
.icon.sp-lpsrp.ico_viewmode2_off{width:22px; height:22px; background-position:0px -74px}
.icon.sp-lpsrp.ico_dropdown_up{width:16px; height:16px; background-position:-68px  0px}
.icon.sp-lpsrp.ico_dropdown_up{width:16px; height:16px; background-position:-68px  0px}
.icon.sp-lpsrp.ico_dropdown_down{width:16px; height:16px; background-position:-86px  0px}
.icon.sp-lpsrp.ico_search2{width:16px; height:16px; background-position:-40px  -20px}
.icon.sp-lpsrp.btn_detail_search_n{width:81px; height:26px; background-position:-110px  0px}
.icon.sp-lpsrp.btn_detail_search_a{width:81px; height:26px; background-position:-110px  -30px}
.icon.sp-lpsrp.ico_category_depth2{width:12px; height:7px; background-position:-60px  -20px}
.icon.sp-lpsrp.ico_category_depth3{width:12px; height:7px; background-position:-80px  -20px}
.icon.sp-lpsrp.ico_arrow2_blue_right{width:4px; height:7px; background-position:-60px  -30px}

/** ---------------------------------
* LIST CONTENTS
* ------------------------------------*
/* SORTING LIST */
.sorting-header{position:relative;padding:18px 0;min-height:34px}
.sorting-header{}
.sorting-header .sorting-header__count{float:left;margin-top:6px;font-size:14px;color:#222;line-height:22px}
.sorting-header .sorting-header__count>span{color:#808080}
.comp--recommend .sorting-header .sorting-header__count>span{color:#00b8ff}
.sorting-header .sorting-header__option{float:right}
.sorting-header .sorting-header__option label,
.sorting-header .sorting-header__option .cate-detail__search,
.sorting-header .sorting-header__option .ui-selectbox{display:inline-block;vertical-align:middle}
.sorting-header .sorting-header__option label{position:relative;padding:5px;margin-right:3px}
.sorting-header .sorting-header__option label+label{margin-right:10px}
.sorting-header .sorting-header__option label>input{position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;cursor:pointer}
.lt-ie9 .sorting-header .sorting-header__option label>input{position:static;width:20px;height:20px;margin:0 -5px 0 10px;opacity:1}
.sorting-header .sorting-header__option label>input:focus+.icon{outline:-webkit-focus-ring-color auto 5px}
.sorting-header .sorting-header__option label>input:checked+.icon{}
.sorting-header .sorting-header__option label>input:checked+.ico_viewmode1_on{background-position:-0px -50px}
.sorting-header .sorting-header__option label>input:checked+.ico_viewmode2_on{background-position:0px -74px}
.lt-ie9 .sorting-header .sorting-header__option label>input:checked+.icon{text-indent:0}
.sorting-header .sorting-header__option .ui-selectbox{margin-right:6px}
.sorting-header .sorting-header__option .cate-detail__search{border:1px solid #ccc}
.sorting-header .sorting-header__option .cate-detail__search input[type=text]{width:222px;height:32px;line-height:30px;color:#808080;text-indent:10px;border:0;vertical-align:top}
.sorting-header .sorting-header__option .cate-detail__search button{width:32px;height:32px;vertical-align:top}
.comp--lp-recommend-slide .sorting-header{padding:30px 15px 18px}
/* NONE SEARCH */
.search-none-content{padding:166px 0 201px;text-align:center}
.search-none-content .search-result{width:600px;margin:0 auto;padding-bottom:34px;border-bottom:1px solid #e5e5e5}
.search-none-content .search-result .search-result__title{font-size:24px;color:#222;font-weight:normal}
.search-none-content .search-result .search-result__title strong{color:#00b8ff}
.search-none-content .search-result .search-result_text{padding-top:10px;font-size:13px;color:#999}
.search-none-content .recommend-keyword{padding-top:35px}
.search-none-content .recommend-keyword .recommend-keyword__title{font-size:14px;color:#222}
.search-none-content .recommend-keyword .recommend-keyword__list{width:300px;margin:25px auto 0;text-align:center;}
.search-none-content .recommend-keyword .recommend-keyword__list li{display:inline-block;margin-bottom:6px;}
.search-none-content .recommend-keyword .recommend-keyword__list li a{display:block;height:24px;padding:0 10px;line-height:22px;border:1px solid #ccc;font-size:12px;color:#999;background-color:#FFF;border-radius:13px;box-sizing:border-box}
.search-none-content .recommend-keyword .recommend-keyword__list li a.active{border-color:#222;color:#222}
.no-listing{padding:130px 0;text-align:center}
.no-listing .no-listing__cont{text-align:center}
.no-listing .no-listing__cont .no-listing__cont__title{display:block;font-size:20px;line-height:29px;color:#222;font-weight:400}
.no-listing .no-listing__cont .no-listing__cont__txt{display:block;margin-top:8px;font-size:14px;line-height:22px;color:#999}
.no-listing .no-listing__link{display:inline-block;margin:20px auto 0;min-width:75px;height:41px;padding:0 32px;line-height:41px;font-size:13px;color:#fff;text-align:center;background-color:#222;border-radius:22px}

/** ---------------------------------
* LP/SRP CATEGORY FINDING AREA
* ------------------------------------*/
/* CATEGORY BASIC */
.format-category{margin:8px 30px 0;background-color:#FFF;overflow:hidden;zoom:1}
.format-category .cate-finding-wrap{margin-top:-1px;background-color:#FFF}
.format-category .cate-finding{position:relative;border-top:1px solid #e5e5e5;}
.format-category .type-category{border-bottom:2px solid #222;z-index:10}
.page--srp .format-category{border-top:2px solid #222;}
.page--srp .format-category .type-category{border-bottom:0}
.format-category .cate-finding__tit{position:absolute;top:17px;left:0;font-size:13px;color:#808080;font-weight:normal;line-height:21px}
.format-category .cate-finding__box{min-height:42px;height:42px;margin-left:142px;padding-top:14px;line-height:21px;overflow:hidden}
.format-category .type-category .cate-finding__box{height:auto;overflow:visible}
.format-category .cate-finding__box .cate-finding__more .cate-finding__sort{margin:20px 0 5px 12px}
.format-category .cate-finding__box .cate-finding__more .cate-finding__sort label{position:relative;font-size:13px;line-height:21px;color:#999;font-weight:bold;padding:0 8px}
.format-category .cate-finding__box .cate-finding__more .cate-finding__sort label input{position:absolute;top:0;left:0;width:100%;height:100%;opacity:0}
.lt-ie9 .format-category .cate-finding__box .cate-finding__more .cate-finding__sort label input{position:static;width:18px;height:18px;margin:0 -5px 0 10px;opacity:1}
.format-category .cate-finding__box .cate-finding__more .cate-finding__sort label input:focus+span{outline:-webkit-focus-ring-color auto 5px}
.format-category .cate-finding__box .cate-finding__more .cate-finding__sort label input:checked+span{color:#222}
.format-category .cate-finding__box .cate-finding__more .cate-finding__sort label:before{content:'';position:absolute;top:1px;left:-1px;display:block;height:12px;width:1px;background-color:#e5e5e5}
.format-category .cate-finding__box .cate-finding__more .cate-finding__sort label:first-child:before{display:none}
.format-category .cate-finding__box ul{display:block;text-align:left;margin:0 0 0 -32px;padding:0 30px 0 17px}
.format-category .cate-expend .cate-finding__box .cate-finding__list{height:42px;overflow:hidden;zoom:1}
.format-category .cate-finding__box ul:after{display:block;clear:both;content:''}
.format-category .cate-finding__box ul>li{float:left;height:56px;margin:-14px 0 0 23px;line-height:26px;font-size:13px;color:#222;}
.format-category .cate-finding__box ul>li>a,
.format-category .cate-finding__box ul>li>label{position:relative;display:inline-block;margin-top:14px;vertical-align:top;cursor:pointer}
.lt-ie9 .format-category .cate-finding__box ul>li>label>input{position:static;width:16px;height:16px;margin:0 -5px 0 10px;opacity:1}
.format-category .cate-finding__box ul>li>label>input{position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;cursor:pointer}
.format-category .cate-finding__box ul>li>label>span{display:inline-block;height:26px;padding:0 10px;font-size:13px;color:#b2b2b2}
.format-category .cate-finding__box ul>li>label>input:focus+span{outline:-webkit-focus-ring-color auto 5px}
.format-category .cate-finding__box ul>li>a,
.format-category .cate-finding__box ul>li>label>span>strong{display:inline-block;vertical-align:top;max-width:110px;color:#222;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal !important}
.format-category .cate-finding__box ul>li>label>input[type=checkbox]:checked+span{color:#fff;background-color:#00B8FF;border-radius:13px}
.format-category .cate-finding__box ul>li>label>input[type=checkbox]:checked+span>strong{color:#fff}
.format-category .cate-finding__box ul>li>a{display:inline-block;height:26px;padding:0 10px;font-size:13px;color:#222}
.format-category .cate-finding__box ul>li>a+.badge{margin-left:-2px}
.format-category .cate-finding__box ul>li>.selected span{display:inline-block;width:100%;line-height:16px;color:#00B8FF;border-bottom:1px solid #00B8FF}
.format-category .cate-finding__box ul>li.oth-menu>a{color:#00B8FF}
.format-category .cate-finding__box ul>li>a .icon{margin:-2px 0 0 5px}
.format-category .cate-finding__box ul>li.oth-menu.oth-last{position:relative}
.format-category .cate-finding__box ul>li.oth-menu.oth-last:after{content:'';position:absolute;top:21px;right:-16px;width:1px;height:12px;background-color:#e5e5e5}
.format-category .cate-finding__box ul>li.oth-menu.oth-last+li{margin-left:32px}
.format-category .cate-finding__box ul>li .badge{vertical-align:top;margin-top:18px;background-color:transparent}
.lt-ie9 .format-category .cate-finding__box ul>li .badge{margin-top:20px}
.format-category .cate-finding__box .cate-finding__more{display:none;margin-top:0;border-top:1px solid #e5e5e5;background-color:#fcfcfc;max-height:245px;overflow-x:hidden;overflow-y:auto}
.format-category .cate-expend .cate-finding__box .cate-finding__more{display:block}
.format-category .cate-finding__box .cate-finding__more ul{padding:25px 20px 5px}
.format-category .cate-finding__box .cate-finding__more ul li{width:16.66%;margin-top:-20px;margin-left:0;white-space:nowrap;word-wrap:normal !important}
.format-category .cate-finding__box .cate-finding__more ul li label{margin-left:23px}
.format-category .cate-finding__box .cate-finding__more ul li label:focus{border:1px solid red}
.format-category .cate-finding__box .cate-finding__basic{}
.format-category .cate-expend .cate-finding__box{height:auto;overflow:auto}
.format-category .cate-finding__box ul.cate-finding__basic>li>label>input:checked+span{background-color:#FFF;color:#00B8FF;font-weight:bold;border-radius:0}
.format-category .cate-finding__box ul.cate-finding__basic>li>label>span strong{margin-top:5px;line-height:16px}
.format-category .cate-finding__box ul.cate-finding__basic>li>label>input:checked+span strong{margin-top:5px;border-bottom:1px solid #00B8FF;color:#00B8FF}
.format-category .type-keyword .cate-finding__box{padding-top:0;height:56px;min-height:56px}
.format-category ul.cate-finding__word{position:relative;display:inline-block !important;padding-right:60px !important;margin-left:10px;overflow:hidden}
.format-category .cate-finding__box ul.cate-finding__word{margin-left:-10px;}
.format-category ul.cate-finding__word:after{display:block;clear:both;content:''}
.format-category ul.cate-finding__word>li{display:inline-block;vertical-align:top;margin-left:12px;margin-top:0}
.format-category ul.cate-finding__word>li button{display:inline-block;margin-top:16px;vertical-align:top;font-size:13px;line-height:24px;color:#00B8FF}
.format-category ul.cate-finding__word>li button .icon{margin:-2px 0 0 4px}
.format-category ul.cate-finding__word>li .btn-reset{position:absolute;right:10px;top:0;display:inline-block;vertical-align:top;margin-top:16px;font-size:11px;color:#222;line-height:24px;padding:0 7px;text-decoration:underline}
.format-category .btn-expend{position:absolute;padding:10px;top:10px;right:0}
.format-category .cate-expend .btn-expend .icon.sp-lpsrp.ico_plus{background-position:-54px 0px}
.format-category .cate-detail{position:relative;display:none;/* min-width:1128px; */height:44px;background-color:#FFF}
.format-category .cate-detail:after{display:block;clear:both;content:''}
.format-category .cate-detail .cate-detail__word{float:left;margin-top:6px}
.format-category .cate-detail .cate-detail__word .cate-detail__open{display:inline-block;vertical-align:middle}
.format-category.cate-open > .cate-finding.type-category{}
/* .format-category.cate-open .cate-detail .cate-detail__word .cate-detail__open .icon{background-position:-110px  0px} */
.format-category .cate-detail .cate-detail__word .cate-finding__word{display:inline-block;vertical-align:middle}
.format-category .cate-detail .cate-detail__search{position:absolute;top:6px;right:30px;width:258px;border:1px solid #ccc;height:32px}
.format-category .cate-detail .cate-detail__search input[type=text]{display:inline-block;vertical-align:middle;width:221px;height:100%;border:0;text-indent:10px}
.format-category .cate-detail .cate-detail__search button{display:inline-block;vertical-align:middle;width:32px;height:32px}
/* CATEGORY FIXED */
.format-category.cate-open .cate-finding-wrap,
.format-category .fixed{display:block;position:fixed;top:90px;left:143px;right:0;padding:0 30px;z-index:30}
.format-category .fixed .cate-detail__word{position:relative;float:none;padding:0 280px 0 85px;height:34px;overflow:hidden;zoom:1}
.format-category .fixed ul.cate-finding__word>li{height:34px}
.format-category.cate-open ul.cate-finding__word>li button,
.format-category .fixed ul.cate-finding__word>li button{margin-top:4px}

.format-category .fixed .cate-detail__word .cate-detail__open{position:absolute;left:0;top:3px}
.format-category.cate-open .cate-detail .cate-detail__search{top:10px;right:0}
.format-category.cate-open{margin:0}
.format-category.cate-open .fixed{position:relative;top:0;left:0;right:0;padding:0;z-index:0}
.format-category.cate-open .cate-detail{display:block;border-top:1px solid #E5E5E5;height:44px;padding-top:12px}
.format-category.cate-open .cate-detail .cate-detail__word{margin-top:0}
.format-category.cate-open .type-keyword{display:none}

/* CATEGORY HOVER */
.cate-finding__select .cate-select li>label:hover>input[type=checkbox]:checked+span:after,
.format-category .cate-finding__box ul>li>label:hover>input[type=checkbox]:checked+span:after{content:'';position:absolute;top:-7px;right:-8px;font-size:14px;width:18px;height:18px;text-align:center;line-height:18px;border-radius:9px;
 background:url(//pics.g9.co.kr/pc/cloud/common/sp_etc.png) no-repeat;background-size:200px auto;background-position:-40px -10px;
}
/* SRP CATEGORY FINDING */
.format-category .cate-finding__select{margin-left:142px;line-height:21px}
.cate-finding__select .cate-select{position:relative}
.cate-finding__select ul{margin-top:14px}
.cate-finding__select ul:after{display:block;clear:both;content:''}
.cate-finding__select .cate-select li{float:left;height:56px;margin:-14px 0 0 0;padding-left:8px;line-height:26px;font-size:13px;color:#222;}
.cate-finding__select .cate-select li:after{content:'';display:inline-block;width:1px;height:16px;vertical-align:top;margin:18px 4px 0 7px;background-color:#f2f2f2}
.cate-finding__select .cate-select li:last-child:after{display:none}
.cate-finding__select .cate-select li>label{position:relative;display:inline-block;margin-top:14px;vertical-align:top;cursor:pointer}
.cate-finding__select .cate-select li>label>input{position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;cursor:pointer}
.lt-ie9 .cate-finding__select .cate-select li>label>input{position:static;width:16px;height:16px;margin:0 -5px 0 10px;opacity:1}
.cate-finding__select .cate-select li>label>span{display:inline-block;height:26px;padding:0 10px;font-size:13px;color:#b2b2b2}
.cate-finding__select .cate-select li>label>input:focus+span{outline:-webkit-focus-ring-color auto 5px}
.cate-finding__select .cate-select li>label>span>strong{display:inline-block;vertical-align:top;max-width:100px;color:#222;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal !important}
.cate-finding__select .cate-select li>label>input[type=checkbox]:checked+span{color:#fff;background-color:#00B8FF;border-radius:13px}
.cate-finding__select .cate-select li>label>input[type=checkbox]:checked+span>strong{color:#fff}
.cate-finding__select .cate-select li .cate-more{position:relative;top:13px;width:24px;height:24px;margin-left:-6px;outline:0;overflow:visible}
.cate-finding__select .cate-select li .badge{vertical-align:top;margin-top:18px;background-color:transparent}
.lt-ie9 .cate-finding__select .cate-select li .badge{margin-top:20px}
.cate-finding__select .cate-select li .badge + .cate-more {margin-left:0}
.cate-finding__select .cate-select li .cate-more .icon{margin-top:-1px}
.cate-finding__select .cate-select li.active > .cate-more{z-index:25}
.cate-finding__select .cate-select li.active > .cate-more .icon{background-position:0 0}
.cate-finding__select .cate-select li .cate-more:focus .icon{outline:-webkit-focus-ring-color auto 5px}
.cate-finding__select .cate-select li.active > .cate-more .icon span{display:block;position:absolute;bottom:-18px;bottom:-17px\9;left:6px;width:14px;height:7px;cursor:default;
 background:url(//pics.g9.co.kr/pc/cloud/lpsrp/sp_lpsrp.png) no-repeat;background-size: 200px auto;
 background-position:-60px -20px;
}
.cate-finding__select .cate-select li li.active > .cate-more .icon span{background-position:-80px -20px}
.cate-finding__select .cate-select li .cate-depth{position:absolute;top:41px;left:0;display:none}
.cate-finding__select .cate-select li .cate-depth ul{position:relative}
.cate-finding__select .cate-select li.active > .cate-depth{display:block;background-color:#FCFCFC;border-top:1px solid #E5E5E5;border-bottom:1px solid #E5E5E5;z-index:20;box-sizing:border-box}
.cate-finding__select .cate-select li.active > .cate-depth li .cate-depth{background-color:#F5F5F5}


/*메인리스트*/
@charset "utf-8";

/** ---------------------------------
* HOME LAYOUT
* ------------------------------------*/
.page--home .comp--home-banner {margin-bottom:90px;}
.page--home .comp--home-contents {margin-bottom:130px;}
.page--home .comp--best {margin-bottom:80px;}
.page--home .comp--linebanner{margin-bottom:80px;}

/** ---------------------------------
* HOME ICON
* ------------------------------------*/
.icon.sp-home{background:url(//pics.g9.co.kr/pc/cloud/home/sp_home.png) no-repeat;background-size: 122px auto;display: inline-block;vertical-align: middle;font-size: 0;}
.icon.sp-home.btn_hotdeal_more{width:122px; height:40px; background-position:0 0}
.icon.sp-home.btn_banner_play{width:40px; height:40px; background-position:0 -50px}
.icon.sp-home.btn_banner_stop{width:40px; height:40px; background-position:-50px -50px}
.icon.sp-home.btn_banner_arrow{width:116px; height:40px; background:url(//pics.g9.co.kr/pc/cloud/home/btn-banner-arrow.png) no-repeat left center;}


/** ---------------------------------
* HOME MAIN ANIMAITION BANNER
* ------------------------------------*/
/* comp--home-banner > banner uio */
.home-banner-item{height: 360px;width: 100%;position: relative;overflow: hidden;text-align: center;}
.home-banner-item .home-banner-item__link{display:block;}
.home-banner-item .home-banner-item__img{height: 360px;width: 100%;padding: 0 200px;margin-left: -100px;}
.home-banner-item .home-banner-item__img .img-banner{margin-left:400px;width: 1000px;height: 360px;display: inline-block;}
.home-banner-item .home-banner-item__text{position: absolute;bottom: 75px;left: 66px;text-align: left;}
.home-banner-item .home-banner-item__text--title{font-size: 40px;line-height: 52px;color: #222;letter-spacing: -0.8px;font-weight: 200;margin-bottom: 10px;text-align: left;}
.home-banner-item .home-banner-item__text--row{display: block;}
.home-banner-item .home-banner-item__text--subtitle{font-size: 14px;line-height: 22px;color: #222;font-weight: 400;margin-bottom: 17px;text-align: left;}

/*comp--home-banner */
.comp--home-banner{width:100%;margin-bottom: 90px;}
.comp--home-banner .home-banner-wrap{position: relative;}
.comp--home-banner .home-banner-wrap__swipe{height: 360px;}
.comp--home-banner .home-banner-wrap__swipe__ul{overflow: visible;height: 360px;position: relative;}
.comp--home-banner .home-banner-wrap__swipe__li{position: absolute;top: 0;left: 0;height: 360px;width: 100%;}
.comp--home-banner .home-banner-wrap__swipe .home-banner-item .home-banner-item__text{opacity:0}
.comp--home-banner .home-banner-wrap__swipe .home-banner-item .home-banner-item__img{opacity:0; transform:translateX(-100px);-webkit-transform:translateX(-100px);-ms-transform:translateX(-100px);}
.comp--home-banner .home-banner-wrap__control{position: absolute;bottom: -10px;left: 30px; z-index: 20;  height: 40px; width: 155px;   background:url(//pics.g9.co.kr/pc/cloud/home/btn-banner-arrow.png) no-repeat left center; }
.comp--home-banner .home-banner-wrap__control .btn_banner_arrow_right,
.comp--home-banner .home-banner-wrap__control .btn_banner_arrow_left{ background:none }
.comp--home-banner .home-banner-wrap__control .swiper-button-prev{float: left;}
.comp--home-banner .home-banner-wrap__control .swiper-button-next{float: left;margin-right: 1px;}
.comp--home-banner .home-banner-wrap__control .swiper-button-autoplay{float: left;position: absolute;top: 0;right: 0;}
.comp--home-banner .home-banner-wrap__control .swiper-button-autoplay .icon{ background:url(//pics.g9.co.kr/pc/cloud/home/sp_home.png) no-repeat left center; background-size: 122px auto;width:40px; height:40px; background-position:0 -50px }
.comp--home-banner .home-banner-wrap__control .swiper-button-stop{display:none; position: absolute;top: 0;right: 0;}
.comp--home-banner .home-banner-wrap__control .swiper-button-stop .icon{ background:url(//pics.g9.co.kr/pc/cloud/home/sp_home.png) no-repeat left center; background-size: 122px auto;width:40px; height:40px; background-position:-50px -50px }
.comp--home-banner .home-banner-wrap__control .swiper-button-pagination{float: left;width: 38px;height: 38px;text-align: center;line-height: 38px;color: #222;font-family: arial;}
.comp--home-banner .home-banner-wrap__control .swiper-button-pagination .now{color: #222;font-size: 12px;line-height: 14px;font-weight: normal;margin-right: 3px;}
.comp--home-banner .home-banner-wrap__control .swiper-button-pagination .length{font-size: 12px;line-height: 14px;color: #222;opacity: 0.5;margin-left: 3px;}
.os--ie .comp--home-banner .home-banner-wrap__control .swiper-button-autoplay .icon{position: relative}
.os--ie .comp--home-banner .home-banner-wrap__control .swiper-button-stop  .icon{position: relative}
/* comp--home-banner >  custom swiper activation */
.home-banner-wrap__swipe .home-banner-wrap__swipe__li .home-banner-item__img {transition: all 0.4s;transition-timing-function: cubic-bezier(0, 0.14, 0.34, 1);-webkit-transition: all 0.4s;-webkit-transition-timing-function:cubic-bezier(0, 0.14, 0.34, 1);-ms-transition: all 0.4s;}
.home-banner-wrap__swipe.direction-right .home-banner-wrap__swipe__li .home-banner-item__img {transform:translateX(100px);-webkit-transform:translateX(100px);-ms-transform:translateX(100px);}
.home-banner-wrap__swipe.direction-left .home-banner-wrap__swipe__li .home-banner-item__img {transform:translateX(-100px);-webkit-transform:translateX(-100px);-ms-transform:translateX(-100px);}
.home-banner-wrap__swipe .home-banner-wrap__swipe__li.active  .home-banner-item__img{opacity:1;transform:translateX(0px); -webkit-transform:translateX(0px); -ms-transform:translateX(0px);}
.home-banner-wrap__swipe .home-banner-wrap__swipe__li.active{z-index:10}
.home-banner-wrap__swipe .home-banner-wrap__swipe__li.active .home-banner-item .home-banner-item__text{opacity:1}


/** ---------------------------------
* HOME CONTETNS BANNER
* ------------------------------------*/
/*UIO BANNERCARD */
.bannercard{width: 100%;}
.bannercard__link{display:block;}
.bannercard__visual{position: relative;height: auto; }
.bannercard__visual .bannercard__visual__img{height: auto;width:100%;}
.bannercard__visual .bannercard__visual__img .img-bannercard{width:100%}
.bannercard__visual .bannercard__visual__summary{position: relative; width: 100%;margin-top: -40px;z-index: 10; height:120px; }
.bannercard__visual .bannercard__visual__summary_bg{padding-right: 20px;display: block;overflow: auto;}
.bannercard__visual .bannercard__visual__summary .bannercard__visual__summary__title{font-size: 18px;color: #222;line-height: 27px;padding-top: 18px;display: block;background: #fff;}
.bannercard__visual .bannercard__visual__summary .bannercard__visual__summary__subtitle{font-size: 13px;line-height: 21px;color: #808080;padding-top: 4px; background:#fff}
.bannercard__visual .bannercard__visual__summary .bannercard__visual__summary__row{display: block;width: 100%;}
.bannercard__body{width: 100%;overflow: auto;height: 330px;     margin-top: 30px; }
.bannercard__body .bannercard-item-group{width: 100%;}
.bannercard__body .bannercard-item-group .bannercard-item-group__list{width: 100%;overflow: auto;}
.bannercard__body .bannercard-item-group .bannercard-item-group__item{width: 100%;margin-bottom: 10px;display: block;}
.bannercard__body .bannercard-item-group .bannercard-itemcard{position: relative;width: 100%;min-height: 100px;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__img{position: absolute;top: 0;left: 0;width: 100px;height: 100px;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__img img{max-width:100%}
.bannercard__body .bannercard-item-group .bannercard-itemcard__img .bannercard-itemcard__link:before{content: "";position: absolute;top: 0;left: 0;background: #000;display: block;z-index: 10;width: 100%;height: 100%;opacity: 0.04;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__info{width: auto;height: auto;padding-top: 5px;padding-left: 120px;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__link{display:block;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__major{width: 100%;height: auto;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__major .bannercard-itemcard__info__price{font-size: 16px;color: #222;line-height: 17px;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__major .bannercard-itemcard__link{display:block; overflow:hidden;    padding-right: 50px; }
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__major .bannercard-itemcard__info__copyright{display: none;font-size: 15px;line-height: 23px;color: #222;font-weight: normal;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__major .bannercard-itemcard__info__title{display: block;font-size: 12px;line-height: 21px;color: #808080;overflow: hidden;font-weight: 400;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__major .bannercard-itemcard__info__title.ellipsis{display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;word-wrap: break-word !important;max-height: 42px;white-space: normal;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__major .bannercard-itemcard__info__price{display: block; margin-bottom: 5px; }
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__major .bestcard__info__price .format-range{display: inline;font-size: 20px;line-height: 22px;font-weight: bold;color: #222;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__major .bannercard-itemcard__info__price .format-price__value{display: inline;font-size: 16px;line-height: 17px; color: #222;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__badge{width: auto;margin-top: 8px;margin-left: -2px;overflow: auto;}
.bannercard__body .bannercard-item-group .bannercard-itemcard__info__action{width: 100%;overflow: visible;margin-top: 13px;vertical-align:middle;height: 22px;}
.bannercard__footer{margin-top: 10px;padding-top: 16px;border-top: 1px solid #f2f2f2;height: auto;overflow: auto;}
.bannercard__footer__more{width: 100%;display: block; overflow:hidden }
.bannercard__footer__more .bannercard__logo{float: left;width: auto;max-height: 18px;margin-right: 4px;     max-width: 100%; }
.bannercard__footer__more__link{display: inline-block;padding: 2px 0;vertical-align: top;}
.bannercard__footer__more__title{float: left;font-size: 13px;color: #222;line-height: 20px;}
.bannercard__footer__more .icon.arrow2_bk_right{float:left; margin-top:6px; margin-left: 2px }
.lt-ie9 .os--ie .bannercard__body .bannercard-item-group .bannercard-itemcard__img:before{display:none;}
.lt-ie9 .os--ie .bannercard__body .bannercard-item-group .bannercard-itemcard__img .bannercard-itemcard__link:before{display: none}
.lt-ie9 .os--ie .bannercard__body .bannercard-item-group .bannercard-itemcard__info__badge{overflow: hidden;}

/*listing layout */
.comp--home-contents{padding:0 30px}
.comp--home-contents .format-itemcard-list{display:table; width: auto; margin-left: -26px; overflow:auto;     margin-bottom: -85px;}
.comp--home-contents .format-itemcard-list__item{position:relative; float:left;width: 20%;padding-left: 26px;box-sizing: border-box; margin-bottom:85px;    float: none;vertical-align: top;display: inline-block;word-break: break-all; }
.comp--home-contents .format-itemcard-list__item{width: 25%; margin-bottom: 80px;}


@media all and (max-width:1600px){
 
 .comp--home-contents .format-itemcard-list__item{width: 33.3%;}

 .comp--home-contents .format-itemcard-list__item:nth-child(6) .bannercard__body,
 .comp--home-contents .format-itemcard-list__item:nth-child(7) .bannercard__body{display:block}
 .comp--home-contents .format-itemcard-list__item:nth-child(6) .bannercard__footer,
 .comp--home-contents .format-itemcard-list__item:nth-child(7) .bannercard__footer{display:block}
}
.os--ie .comp--home-contents .format-result__more .btn--more {width:100px; height:40px; text-align: left }
.os--ie .comp--home-contents .format-result__more .btn--more .icon{position: relative;}
.lt-ie8 .os--ie  .comp--home-contents .format-itemcard-list__item{width:20%}


/** ---------------------------------
* HOME BEST BY SERVICE
* ------------------------------------*/
/* comp--best  > comp--best__category*/
.comp--best .section--best-tab{margin-bottom: 36px}
.comp--best .section--best-tab .section--best-tab__link{display: inline-block;margin-right: 16px;}
.comp--best .section--best-tab .section--best-tab__title{font-size: 20px;line-height: 29px;font-weight: 400;color: #222;}
.comp--best .section--best-tab .section--best-tab__link.active .section--best-tab__title{color:#00c6ff; border-bottom:1px solid #00c6ff}
.comp--best .section--best-contents{width:100%}
.comp--best .section--best-contents .best__section{width:100%}
.comp--best .section--best-contents .section__more{position: absolute;top: 3px;right: 30px;display: inline-block;width: auto;}
.comp--best .section--best-contents .section__more .section__more__link{font-size: 16px;line-height: 24px;color: #222;}
.comp--best .section--best-contents .section__more .icon.ico_bk_long_arrow2_right{margin-left:2px;vertical-align: top;margin-top: 9px;}




/** ---------------------------------
* HOME COUPON ALRAM POPUP
* ------------------------------------*/
#popup--coupon-alarm{}
#popup--coupon-alarm .pop-position{top: auto;right: 30px;left: auto;bottom: 104px;width: 430px;transform: none;-webkit-transform: none;}
#popup--coupon-alarm .pop-contents{padding: 25px;     border: 1px solid #222;}
.coupon-alarm{}
.coupon-alarm .cont{}
.coupon-alarm .cont .title{display: block;line-height: 22px;font-size: 14px;color: #222;margin-bottom: 6px;font-weight: bold;margin-top: 20px;}
.coupon-alarm .cont .ment{display: block;line-height: 21px;font-size: 13px;letter-spacing: -0.5px;font-weight: 600;margin-bottom: 10px;}
.coupon-alarm .cont .desc{display: block;font-size: 13px;line-height: 21px;letter-spacing: -0.5px;margin-bottom: 20px;color: #808080;}
.coupon-alarm .link--couponzone{display: inline-block;line-height: 30px;height: 30px;vertical-align: top;}
.coupon-alarm .link--couponzone .img--coupon{display: inline-block;margin-right: 8px;}
.coupon-alarm .link--couponzone .text{font-size: 13px;line-height: 30px;color: #222;vertical-align: top;}
.coupon-alarm .link--couponzone .ico_arrow2_bk_right{vertical-align: top;margin-top: 12px;margin-left: 2px;}


</style>
</head>

<body>
<div id="wrapper">
        <div id="gnb">

<!--INCLUDE  GNB  HTML -->
<div class="gnb">

 <h1 class="gnb-logo">

  <a href="" title="" class="link_area" >
   <img src="https://seoulcraftcenter.kr/img/logo.svg" width="150" class="img_logo" alt="G9">
  </a>
 </h1>

 

 

 

 

 <!-- 운영 배너 -->
   <div class="gnb-ad" >
      <ul class="brand_introduce">
      	<li></li>
        <li></li>
      </ul>
      <div class="brand_info">
      <p class="tel"><span class="title">연락처</span><span class="info">010 4167 3477</span></p>
<p class="email"><span class="title">이메일</span><span class="info">010 4167 3477</span></p>
<p class="homepage"><span class="title">홈페이지</span><span class="info">010 4167 3477</span></p>
      </div>
   </div>

</div>
<!--INCLUDE GNB HTML -->        </div>

        

        <div id="container"><input type="hidden" id="mainlisttrigger">