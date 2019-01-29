<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$qa_skin_url.'/style.css">', 0);
?>

<div class="container">
<div class="section-header page">	
<h3><?php echo $g5['title'] ?></h3>
</div>

<section id="bo_w">
    <h2>1:1문의 작성</h2>
    <!-- 게시물 작성/수정 시작 { -->
    <form class="form-inline justify-content-center" name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="qa_id" value="<?php echo $qa_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <?php
    $option = '';
    $option_hidden = '';
    $option = '';

    if ($is_dhtml_editor) {
        $option_hidden .= '<input type="hidden" name="qa_html" value="1">';
    } else {
        $option .= "\n".'<input type="checkbox" id="qa_html" name="qa_html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="qa_html">html</label>';
    }

    echo $option_hidden;
    ?>

    <div class="form_01">

            <?php if ($category_option) { ?>
                <label for="qa_category" class="sound_only">분류<strong>필수</strong></label>
                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="qa_category" id="qa_category" required >
                    <option value="">분류를 선택하세요</option>
                    <?php echo $category_option ?>
                </select>
                

            <?php } ?>


            <?php if ($is_email) { ?>
                <label for="qa_email" class="sound_only">이메일</label>
                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="qa_email" value="<?php echo get_text($write['qa_email']); ?>" id="qa_email" <?php echo $req_email; ?> size="50" maxlength="100" placeholder="이메일">
                <input type="checkbox" name="qa_email_recv" id="qa_email_recv" value="1" <?php if($write['qa_email_recv']) echo 'checked="checked"'; ?>>
                <label for="qa_email_recv" class="frm_info">답변받기</label>

            <?php } ?>

            <?php if ($is_hp) { ?>
                <label for="qa_hp" class="sound_only">휴대폰</label>
                <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="qa_hp" value="<?php echo get_text($write['qa_hp']); ?>" id="qa_hp" <?php echo $req_hp; ?> size="30" placeholder="휴대폰">
                <?php if($qaconfig['qa_use_sms']) { ?>
                <input type="checkbox" name="qa_sms_recv" id="qa_sms_recv" value="1" <?php if($write['qa_sms_recv']) echo 'checked="checked"'; ?>> <label for="qa_sms_recv" class="frm_info">답변등록 SMS알림 수신</label>
                <?php } ?>

            <?php } ?>

                <label for="qa_subject" class="sound_only">제목<strong class="sound_only">필수</strong></label>
                
                    <input type="text" name="qa_subject" class="form-control mb-2 mr-sm-2 mb-sm-0" value="<?php echo get_text($write['qa_subject']); ?>" id="qa_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="제목">
                

            <div class="qa_content_wrap <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
                <label for="qa_content" class="sound_only">내용<strong class="sound_only">필수</strong></label>
                    <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
                
            </div>

            <?php if ($option) { ?>

                옵션
                <?php echo $option; ?>

            <?php } ?>

	<div class="form-group">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroupFileAddon01">파일 첨부</span>
		</div>
		<div class="custom-file">
			<input type="file" class="custom-file-input" name="bf_file[1]" id="bf_file_1" title="파일첨부 1 :  용량 <?php echo $upload_max_filesize; ?> 이하만 업로드 가능">
      <label for="bf_file_1" class="custom-file-label">파일 #1</label>
		</div>
    <?php if($w == 'u' && $write['qa_file1']) { ?>
    	<div class="form-check form-check-inline">
	      <label class="form-check-label" for="bf_file_del1"><?php echo $write['qa_source1']; ?> 파일 삭제</label>
        <input type="checkbox" class="form-check-input" id="bf_file_del1" name="bf_file_del[1]" value="1"> 
      </div>
    <?php } ?>
  </div>


	<div class="form-group">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroupFileAddon01">파일 첨부</span>
		</div>
		<div class="custom-file">
			<input type="file" class="custom-file-input" name="bf_file[2]" id="bf_file_2" title="파일첨부 2 :  용량 <?php echo $upload_max_filesize; ?> 이하만 업로드 가능">
                    <label for="bf_file_2" class="custom-file-label"> 파일 #2</label>
		</div>
                    
                    <?php if($w == 'u' && $write['qa_file2']) { ?>
                    <div class="form-check form-check-inline">
	                    <label class="form-check-label" for="bf_file_del2"><?php echo $write['qa_source2']; ?> 파일 삭제</label>
                    <input type="checkbox" class="form-check-input" id="bf_file_del2" name="bf_file_del[2]" value="1"> 
                    </div>
                    <?php } ?>
                </div>
                
	<div class="text-center mb-4 mt-4">
	<a class="btn btn-raised btn-secondary btn-sm" href="<?php echo $list_href; ?>">목록</a>
	<button type="submit" id="btn_submit" accesskey="s" class="btn btn-raised btn-primary btn-sm">작성완료</button>
	</div>
    </form>
    
</section>

</div>
    <script>
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "2";
            else
                obj.value = "1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.qa_subject.value,
                "content": f.qa_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.qa_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_qa_content) != "undefined")
                ed_qa_content.returnFalse();
            else
                f.qa_content.focus();
            return false;
        }

        <?php if ($is_hp) { ?>
        var hp = f.qa_hp.value.replace(/[0-9\-]/g, "");
        if(hp.length > 0) {
            alert("휴대폰번호는 숫자, - 으로만 입력해 주십시오.");
            return false;
        }
        <?php } ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->