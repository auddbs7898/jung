<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$member_skin_url.'/style.css">', 0);
?>

<!-- 스크랩 목록 시작 { -->
<div id="scrap" class="new_win">
    <h1 id="win_title"><?php echo $g5['title'] ?></h1>
	<div class="list_02 new_win_con">
	    <ul>
	        <?php for ($i=0; $i<count($list); $i++) { ?>
	        <li>
	        	<div class="scrap_left">
	        		<a href="<?php echo $list[$i]['opener_href_wr_id'] ?>" target="_blank" class="scrap_tit" onclick="opener.document.location.href='<?php echo $list[$i]['opener_href_wr_id'] ?>'; return false;"><?php echo $list[$i]['subject'] ?></a>
	            	<a href="<?php echo $list[$i]['opener_href'] ?>" target="_blank" class="scrap_cate" onclick="opener.document.location.href='<?php echo $list[$i]['opener_href'] ?>'; return false;"><?php echo $list[$i]['bo_subject'] ?></a>
	            	<span class="scrap_datetime"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $list[$i]['ms_datetime'] ?></span>
	            	<a href="<?php echo $list[$i]['del_href']; ?>" class="scrap_del" onclick="del(this.href); return false;"><i class="fa fa-trash-o" aria-hidden="true"></i><span class="sound_only">삭제</span></a>
	        	</div>
	        </li>
	        <?php } ?>
	        <?php if ($i == 0) echo "<li class=\"empty_list\">자료가 없습니다.</li>"; ?>
	    </ul>
	</div>
    <?php echo get_paging($config['cf_mobile_pages'], $page, $total_page, "?$qstr&amp;page="); ?>

    <div class="win_btn">
        <button type="button" onclick="window.close();" class="btn_close">창닫기</button>
    </div>
</div>
<!-- } 스크랩 목록 끝 -->