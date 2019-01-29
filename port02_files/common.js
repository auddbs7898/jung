String.prototype.ltrim = function()
{
	var re = /\s*((\S+\s*)*)/;
	return this.replace(re, "$1");
}

// RTRIM
String.prototype.rtrim = function()
{
	var re = /((\s*\S+)*)\s*/;
	return this.replace(re, "$1");
}

// TRIM
String.prototype.trimStr = function()
{
	return this.ltrim().rtrim();
}


// REPLACE ALL
String.prototype.replaceAll = function(str1, str2)
{
	var temp = this;

	while (1)
	{
		if( temp.indexOf(str1) != -1 )
			temp = temp.replace(str1, str2);
		else
			break;
	}
	return temp;
}

// 문자열 길이 리턴
function strtrimlen(str)
{
	return str.trimStr().length;
}


function isKorean(obj) { 
    //var len = obj.value.length; 
    var len = obj.length; 
    var numUnicode; 

    for(i=0;i < len; i++)
    { 
        //numUnicode = obj.value.charCodeAt(i) 
        numUnicode = obj.charCodeAt(i) 
        if ( 44032 <= numUnicode && numUnicode <= 55203 ) 
        { 
            continue; 
        }else{ 
            return false; 
            break; 
        } 
    } 

    return true; 
} 



// 주어진 구분문자로 구분하여 존재여부 확인 한 후 없는것을 리턴함(에디터 이미지 처리에 사용합니다.)
function splitchkout_rtn(chkarr, chktarget, split_txt) {
	var chkImg = new Array();
	var rtn_imgs = "";
	chkImg = chkarr.split(split_txt);
	for (var i = 0; i < chkImg.length; i++) {
		if (chkImg[i].trimStr() != "") {
			chkpath = new RegExp(chkImg[i].trimStr());
			if(!chktarget.match(chkpath)) {
				rtn_imgs = rtn_imgs + chkpath + split_txt;
			}
		}
	}
	rtn_imgs = rtn_imgs.replaceAll("/","");
	return rtn_imgs;
}

// 주어진 구분문자로 구분하여 존재여부 확인 한 후  있는 것을 리턴함(에디터 이미지 처리에 사용합니다.)
function splitchkin_rtn(chkarr, chktarget, split_txt) {
	var chkImg = new Array();
	var rtn_imgs = "";
	chkImg = chkarr.split(split_txt);
	for (var i = 0; i < chkImg.length; i++) {
		if (chkImg[i].trimStr() != "") {
			chkpath = new RegExp(chkImg[i].trimStr());
			if(chktarget.match(chkpath)) {
				rtn_imgs = rtn_imgs + chkpath + split_txt;
			}
		}
	}
	rtn_imgs = rtn_imgs.replaceAll("/","");
	return rtn_imgs;
}



// 자릿수확인(최소)
function fncMinCheck(strFieldName, strFieldNickName, intMin) {
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	if (strCheckObj.value.length<intMin) {
		alert(strFieldNickName+" 항목을 확인하세요.\n"+strFieldNickName+" 항목은 "+intMin+"글자 이상이어야 합니다.");
		strCheckObj.focus();
		return false;
	}
	else { return true; }
}

// 자릿수확인
function fncMinMaxCheck(strFieldName, strFieldNickName, intMin, intMax) {
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	if (strCheckObj.value.length<intMin || strCheckObj.value.length>intMax) {
		alert(strFieldNickName+" 항목을 확인해 주세요.\n"+strFieldNickName+" 항목은 "+intMin+"글자 이상 "+intMax+"글자 이하이어야 합니다.");
		strCheckObj.focus();
		return false;
	}
	else { return true; }

}

// 공란체크
function fncNullCheck(strFieldName, strFieldNickName) {
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	if (strCheckObj.value.indexOf(" ")>0) {
		alert(strFieldNickName+" 항목을 확인하세요.\n"+strFieldNickName+" 항목에 공란은 허용되지 않습니다.");
		strCheckObj.focus();
		return false;
	}
	else { return true; }
}

// 숫자만 등록되도록 체크
function fncValidString09Check (strFieldName, strFieldNickName) {
    var ValidString="0123456789";
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	for (i=0; i<strCheckObj.value.length; i++) {
		if(ValidString.indexOf(strCheckObj.value.substring(i,i+1))<0) {
			alert(strFieldNickName+" 항목에 허용할 수 없는 문자가 입력되었습니다.\n"+strFieldNickName+" 항목은 숫자로만 등록하실 수 있습니다.");
			strCheckObj.focus();
 			return false;
		}
    }
    return true;
}

// 숫자만 등록되도록 체크
function fncValidString09BarCheck (strFieldName, strFieldNickName) {
    var ValidString="0123456789-";
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	for (i=0; i<strCheckObj.value.length; i++) {
		if(ValidString.indexOf(strCheckObj.value.substring(i,i+1))<0) {
			alert(strFieldNickName+" 항목에 허용할 수 없는 문자가 입력되었습니다.\n"+strFieldNickName+" 항목은 숫자와 '-' 로만 등록하실 수 있습니다.");
			strCheckObj.focus();
 			return false;
		}
    }
    return true;
}



// 숫자,-만 등록되도록 체크(전화번호 체크
function fncValidTelno (strChktel) {
    var ValidString="0123456789-";
	for (i=0; i<strChktel.length; i++) {
		if(ValidString.indexOf(strChktel.substring(i,i+1))<0) {
 			return false;
		}
    }
    return true;
}


// 숫자와 알파벳만 등록되도록 체크
function fncValidString09AZCheck (strFieldName, strFieldNickName) {

    var ValidString="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	var strCheckObj = document.getElementsByName(strFieldName)[0];

	for (i=0; i<strCheckObj.value.length; i++) {
		if(ValidString.indexOf(strCheckObj.value.substring(i,i+1))<0) {
			alert(strFieldNickName+" 항목에 허용할 수 없는 문자가 입력되었습니다.\n"+strFieldNickName+" 항목은 영문자와 숫자로만 등록하실 수 있습니다.");
			strCheckObj.value="";
			strCheckObj.focus();
			return false;
		}
	}
	return true;
}

// 숫자와 알파벳 및 '-'만 등록되도록 체크
function fncValidString09AZDashCheck (strFieldName, strFieldNickName) {
    var ValidString="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-";
	var strCheckObj = document.getElementsByName(strFieldName)[0];

	for (i=0; i<strCheckObj.value.length; i++) {
		if(ValidString.indexOf(strCheckObj.value.substring(i,i+1))<0) {
			alert(strFieldNickName+" 항목에 허용할 수 없는 문자가 입력되었습니다.\n"+strFieldNickName+" 항목은 영문자와 숫자로만 등록하실 수 있습니다.");
			strCheckObj.value="";
			strCheckObj.focus();
			return false;
		}
	}
	return true;
}


// 숫자와 알파벳 및 '-'만 등록되도록 체크
function fncValidString09AZSpcCheck (strFieldName, strFieldNickName, strAddChr) {
    var ValidString="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"+strAddChr;
	var strCheckObj = document.getElementsByName(strFieldName)[0];

	for (i=0; i<strCheckObj.value.length; i++) {
		if(ValidString.indexOf(strCheckObj.value.substring(i,i+1))<0) {
			alert(strFieldNickName+" 항목에 허용할 수 없는 문자가 입력되었습니다.");
			strCheckObj.value="";
			strCheckObj.focus();
			return false;
		}
	}
}


// 숫자만입력되게처리
function checkNumberKey()
{
	if (event.keyCode != 8)
	{
		if (event.keyCode < 45 || event.keyCode > 57 || ((event.keyCode > 32 && event.keyCode < 48) || (event.keyCode > 57 && event.keyCode < 65) || (event.keyCode > 90 && event.keyCode < 97)))
			event.returnValue = false;
	}
}

// 숫자만입력되게처리(아이픈 포함)
function checkNumberbarKey()
{
	if (event.keyCode != 8)
	{
		if (event.keyCode == 45 || (event.keyCode > 47 && event.keyCode < 58))	event.returnValue = true;
		else event.returnValue = false;
	}
}


// 숫자만입력되게처리(아이픈 포함)
function checkNumTelbarKey()
{
	if (event.keyCode != 8)
	{
		if (event.keyCode == 45 || event.keyCode == 40 || event.keyCode == 41 || (event.keyCode > 47 && event.keyCode < 58))	event.returnValue = true;
		else event.returnValue = false;
	}
}


// 이메일 유효체크
function fncValidEmailCheck(strFieldName)
{
	reg = new RegExp("^[\\w\\-]+(\\.[\\w\\-_]+)*@[\\w\\-]+(\\.[\\w\\-]+)*(\\.[a-zA-Z]{2,3})$", "gi");
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	if (!reg.test(strCheckObj.value))
	{
		alert("잘못된 형식의 이메일 주소입니다.\n다시 입력해주세요.");
		strCheckObj.focus();
		return false;
	}
	else
		return true;
}

// 이메일 유효체크
function fncValidEmailCheckData(strMailName)
{
	reg = new RegExp("^[\\w\\-]+(\\.[\\w\\-_]+)*@[\\w\\-]+(\\.[\\w\\-]+)*(\\.[a-zA-Z]{2,3})$", "gi");
	if (!reg.test(strMailName))
	{
		alert("잘못된 형식의 이메일 주소입니다.\n다시 입력해주세요.");
		return false;
	}
	else
		return true;
}

// 이메일 유효체크
function fncValidEmailCheckOnly(strMailName)
{
	reg = new RegExp("^[\\w\\-]+(\\.[\\w\\-_]+)*@[\\w\\-]+(\\.[\\w\\-]+)*(\\.[a-zA-Z]{2,3})$", "gi");
	if (!reg.test(strMailName))	return false;
	else	return true;
}

//이름 유효체크
function fncValidnameCheck(strFieldName) {
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	alert(strCheckObj.value);
	count=0;
	for (i=0; i<strCheckObj.value.length; i++) {
		ls_one_char = strCheckObj.value.charAt(i);
		if(ls_one_char.search(/[0-9|a-z|A-Z|ㄱ-ㅎ|ㅏ-ㅣ|가-힝]/) == -1) {
		count++;		
		}
	}
	if(count!=0){
		strCheckObj.value="";
		strCheckObj.focus();
		alert("이름은 영어+숫자+한글 조합으로 입력하세요.");
		return false;
	}
}

// 아이디 유효체크
function fncValidIdCheck(strFieldName)
{
    var ValidString="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	var strCheckObj = document.getElementsByName(strFieldName)[0];	
	if (strCheckObj.value.length < 4 || strCheckObj.value.length > 13 )
	{
		alert("아이디는 4~12자 이하로 입력하세요.");
		return false;
	}
	for (i=0; i<strCheckObj.value.length; i++) {
		if(ValidString.indexOf(strCheckObj.value.substring(i,i+1))<0) {
			strCheckObj.value="";
			strCheckObj.focus();
			alert("아이디는 영어+숫자 조합으로 입력하세요.");
			return false;
		}
	}
	return true;
}

function fncValidPassCheck(strFieldName)
{
    var ValidString="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-~!@#$%^&*()";
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	if (strCheckObj.value.length < 5 || strCheckObj.value.length > 17 )
	{
		alert("비밀번호는 6~16자 이하로 입력하세요.");
		return false;
	}
	for (i=0; i<strCheckObj.value.length; i++) {
		if(ValidString.indexOf(strCheckObj.value.substring(i,i+1))<0) {
			strCheckObj.value="";
			strCheckObj.focus();
			alert("비밀번호는 영문, 숫자, 특수문자 조합으로 입력하세요.");
			return false;
		}
	}
	return true;
}

function getFileExtension(filePath){
    var lastIndex = -1;
    lastIndex = filePath.lastIndexOf('.');
    var extension = "";
	if ( lastIndex != -1 ){
		extension = filePath.substring( lastIndex+1, filePath.len );
	} else {
		extension = "";
	}
    return extension;
}


function LimitAttach_mov(file) {
	extArray = new Array(".wmv", ".mpeg", ".mpg"); //첨부가능한 확장자 목록
	allowSubmit = false;
	if (file.trimStr() == "") {
		alert("파일을 등록해 주세요.");
		return allowSubmit;
	}
	ext = getFileExtension(file);
	ext = file.slice(file.lastIndexOf(".")).toLowerCase();
	for (var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) { allowSubmit = true; break; }
	}
	if (!allowSubmit) alert("등록 가능한 확장자는 " + (extArray.join("  ")) + "입니다.");
	return allowSubmit;
}


function LimitAttach_non(file) {
	extArray = new Array(".gif", ".jpg"); //첨부가능한 확장자 목록
	allowSubmit = false;
	if (file.trimStr() == "") {
		alert("파일을 등록해 주세요.");
		return allowSubmit;
	}
	ext = getFileExtension(file);
	ext = file.slice(file.lastIndexOf(".")).toLowerCase();
	for (var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) { allowSubmit = true; break; }
	}
	if (!allowSubmit) alert("등록 가능한 확장자는 " + (extArray.join("  ")) + "입니다.");
	return allowSubmit;
}


function LimitAttach(file,addtx) {
	extArray = new Array(".gif", ".jpg", ".png"); //첨부가능한 확장자 목록
	allowSubmit = false;
	if (file.trimStr() == "") {
		alert(addtx+" 파일을 등록해 주세요.");
		return allowSubmit;
	}
	ext = getFileExtension(file);
	ext = "."+ext.toLowerCase();
	for (var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) { allowSubmit = true; break; }
	}
	if (!allowSubmit) alert(addtx+"에 등록 가능한 확장자는 " + (extArray.join("  ")) + "입니다.");
	return allowSubmit;
}

function LimitAttach_png(file,addtx) {
	extArray = new Array(".png"); //첨부가능한 확장자 목록
	allowSubmit = false;
	if (file.trimStr() == "") {
		alert(addtx+" 파일을 등록해 주세요.");
		return allowSubmit;
	}
	ext = getFileExtension(file);
	ext = "."+ext.toLowerCase();
	for (var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) { allowSubmit = true; break; }
	}
	if (!allowSubmit) alert(addtx+"에 등록 가능한 확장자는 " + (extArray.join("  ")) + "입니다.");
	return allowSubmit;
}

function LimitAttachPdf(file,addtx) {
	extArray = new Array(".pdf"); //첨부가능한 확장자 목록
	allowSubmit = false;
	if (file.trimStr() == "") {
		alert(addtx+" 파일을 등록해 주세요.");
		return allowSubmit;
	}
	ext = getFileExtension(file);
	ext = "."+ext.toLowerCase();
	for (var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) { allowSubmit = true; break; }
	}
	if (!allowSubmit) alert(addtx+"에 등록 가능한 확장자는 " + (extArray.join("  ")) + "입니다.");
	return allowSubmit;
}

function LimitAttachAi(file,addtx) {
	extArray = new Array(".ai"); //첨부가능한 확장자 목록
	allowSubmit = false;
	if (file.trimStr() == "") {
		alert(addtx+" 파일을 등록해 주세요.");
		return allowSubmit;
	}
	ext = getFileExtension(file);
	ext = "."+ext.toLowerCase();
	for (var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) { allowSubmit = true; break; }
	}
	if (!allowSubmit) alert(addtx+"에 등록 가능한 확장자는 " + (extArray.join("  ")) + "입니다.");
	return allowSubmit;
}

function LimitAttachJpg(file,addtx) {
	extArray = new Array(".jpg"); //첨부가능한 확장자 목록
	allowSubmit = false;
	if (file.trimStr() == "") {
		alert(addtx+" 파일을 등록해 주세요.");
		return allowSubmit;
	}
	ext = getFileExtension(file);
	ext = "."+ext.toLowerCase();
	for (var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) { allowSubmit = true; break; }
	}
	if (!allowSubmit) alert(addtx+"에 등록 가능한 확장자는 " + (extArray.join("  ")) + "입니다.");
	return allowSubmit;
}

function LimitAttach_doc(file,addtx) {
	extArray = new Array(".doc", ".docx", ".pdf", ".hwp", ".zip"); //첨부가능한 확장자 목록
	allowSubmit = false;
	if (file.trimStr() == "") {
		alert(addtx+" 파일을 등록해 주세요.");
		return allowSubmit;
	}
	ext = getFileExtension(file);
	ext = "."+ext.toLowerCase();
	for (var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) { allowSubmit = true; break; }
	}
	if (!allowSubmit) alert(addtx+"에 등록 가능한 확장자는 " + (extArray.join("  ")) + "입니다.");
	return allowSubmit;
}


function LimitAttachNon(file) {
	extArray = new Array(".gif", ".jpg", ".png"); //첨부가능한 확장자 목록
	allowSubmit = false;
	if (file.trimStr() == "") {
		return allowSubmit;
	}
	ext = getFileExtension(file);
	ext = "."+ext.toLowerCase();
	for (var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) { allowSubmit = true; break; }
	}
	return allowSubmit;
}

function LimitAttachAll(file) {
	extArray = new Array(".jpg", ".png", ".gif", ".xls", ".xlsx", ".doc", ".docx", ".ppt", ".pptx", ".txt", ".pdf", ".hwp", ".zip", ".alz", ".rar"); //첨부가능한 확장자 목록
	allowSubmit = false;
	if (file.trimStr() == "") {
		return allowSubmit;
	}
	ext = getFileExtension(file);
	ext = "."+ext.toLowerCase();
	for (var i = 0; i < extArray.length; i++) {
		if (extArray[i] == ext) { allowSubmit = true; break; }
	}
	return allowSubmit;
}




// check 한 개수를 리턴한다.
function getCheckedCount( aElem )
{
	var elem = document.getElementsByTagName("input");
	var cnt = 0;

	for ( var i=0; i<elem.length; i++ )
	{
		if ( ( elem[i].type == "checkbox" ) && ( elem[i].checked ) && ( elem[i].name == aElem ) )
			cnt = cnt + 1;
	}
	return cnt;
}

// 지정된 이름을 가진 모든 checkbox를 check한다
function checkAll( aElem )
{
	var elem = document.getElementsByTagName("input");
	var cnt = 0;

	for ( var i=0; i<elem.length; i++ ){
		if ( ( elem[i].type == "checkbox" ) && ( elem[i].name == aElem ) ) elem[i].checked = true;
	}
}

// 지정된 이름을 가진 모든 checkbox를 check 해제한다
function uncheckAll( aElem )
{
	var elem = document.getElementsByTagName("input");
	var cnt = 0;

	for ( var i=0; i<elem.length; i++ ){
		if ( ( elem[i].type == "checkbox" ) && ( elem[i].name == aElem ) ) elem[i].checked = false;
	}
}


// 지정한 이름을 가진 모든 checkbox의 checked 값을 반전 한다.
function invertCheck( aElem )
{
	var elem = document.getElementsByTagName("input");
	var cnt = 0;

	for ( var i=0; i<elem.length; i++ )
	{
		if ( ( elem[i].type == "checkbox" ) && ( elem[i].name == aElem ) )
		{
			if ( elem[i].checked )
			{
				elem[i].checked = false;
			}
			else
			{
				elem[i].checked = true;
			}
		}
	}
}

// Radio에서 check 한 개수를 리턴한다.
function getRadioCheckedCount( aElem )
{
	var elem = document.getElementsByTagName("input"); ;
	var cnt = 0;

	for ( var i=0; i<elem.length; i++ )
	{
		if ( ( elem[i].type == "radio" ) && ( elem[i].checked ) && ( elem[i].name == aElem ) )
			cnt = cnt + 1;
	}
	return cnt;
}


// Radio에서 check 한 개수를 리턴한다.
function getRadioCheckedForm( aElem )
{
	var cnt = 0;

	for ( var i=0; i<aElem.length; i++ )
	{
		if ( ( aElem[i].type == "radio" ) && ( aElem[i].checked ) )
			cnt = cnt + 1;
	}
	return cnt;
}



// Radio에서 check 한 개수를 리턴한다.
function getRadioCheckedValue( aElem )
{
	var elem = document.getElementsByTagName("input");
	var rtnStr = "";

	for ( var i=0; i<elem.length; i++ )
	{
		if ( ( elem[i].type == "radio" ) && ( elem[i].checked ) && ( elem[i].name == aElem ) )
			rtnStr = elem[i].value;
	}
	return rtnStr;
}


// Radio에서 check 한 개수를 리턴한다.
function getRadioCheckedFromValue( aElem )
{
	var rtnStr = "";

	for ( var i=0; i<aElem.length; i++ )
	{
		if ( ( aElem[i].type == "radio" ) && ( aElem[i].checked ) )
			rtnStr = aElem[i].value;
	}
	return rtnStr;
}



function ChkInput(strFieldName,altmessage,len) {
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	if (typeof(strCheckObj)!="undefined") {
		if(strtrimlen(strCheckObj.value) < len) {
			alert(altmessage);
			strCheckObj.focus();
			return false;
		}
	}
}


function onlyHan(strFieldName, altmessage)
{
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	if (typeof(strCheckObj)!="undefined") {
		var inText = strCheckObj.value;
		var ret;
		for (var i = 0; i < inText.length; i++) {
			ret = inText.charCodeAt(i);
			if (ret > 31 && ret < 127) {
				alert(altmessage);
				strCheckObj.focus();
				return false;
			}
		}
		return true;
	}
}


function ChkInputNofocus(strFieldName,altmessage,len) {
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	if (typeof(strCheckObj)!="undefined") {
		if(strtrimlen(strCheckObj.value) < len) {
			alert(altmessage);
			return false;
		}
	}
}

function ChkInputNon(strFieldName,len) {
	var strCheckObj = document.getElementsByName(strFieldName)[0];
	if (typeof(strCheckObj)!="undefined") {
		if(strtrimlen(strCheckObj.value) < len) {
			return false;
		}
	}
}


// 다음객체로 포커스이동
function funcNextFocus(strFieldName,strNextFieldName,length){

	var strCheckObj	= document.getElementsByName(strFieldName)[0];
	var strNextObj	= document.getElementsByName(strNextFieldName)[0];

	if(length==strCheckObj.value.length){
		strNextObj.focus();
	}
}


//팝업창 올리기
function fncOpenPanel(strUrl, winname, inrWidth, intHeight, scrolltype) {
    var newp = "width=" + inrWidth + ", height=" + intHeight + ", toolbar=no, menubar=0, status=0, location=0, directories=no, scrollbars=" + scrolltype + ", resizable=no ";
	var openPopup = window.open(strUrl, winname, newp);
	if (openPopup == null)
	{
			alert("팝업이 차단되었습니다.\r\n팝업창을 허용해 주세요.");
	}
	else openPopup.focus();
}

function txtboxsize(maxrow, tar_id, limity) {
	var txtar = document.getElementById(tar_id);
	if (limity < txtar.scrollHeight )
	{
		txtar.style.height = (txtar.scrollHeight + 10) + "px";
	}
	else 
		txtar.style.height = limity + "px";
}

//팝업창 올리기
function CenterfncOpenPanel(strUrl, winname, inrWidth, intHeight, scrolltype) {
	var left = Math.ceil( (window.screen.width  - inrWidth) / 2 );
	var top = Math.ceil( (window.screen.height - intHeight) / 2 );
    var newp = "left=" + left + ",top=" + top + ",width=" + inrWidth + ", height=" + intHeight + ", toolbar=no, menubar=0, status=0, location=0, directories=no, scrollbars=" + scrolltype + ", resizable=no ";
	var openPopup = window.open(strUrl, winname, newp);
	if (openPopup == null)
	{
			alert("팝업이 차단되었습니다.\r\n팝업창을 허용해 주세요.");
	}
	else openPopup.focus();
}


//팝업창 올리기
function fncOpenPanel2(strUrl, winname, inrWidth, intHeight, scrolltype, loc_left, loc_top) {
	var newp = "width=" + inrWidth + ", height=" + intHeight + ", left="+loc_left+", top="+loc_top+",toolbar=no, menubar=0, status=0, location=0, scrollbars="+scrolltype+", resizable=yes ";
	var openPopup = window.open(strUrl, winname, newp);
	if (openPopup == null)
	{
			alert("팝업이 차단되었습니다.\r\n팝업창을 허용해 주세요.");
	}
}

function mvon(this_data) {
	this_data.style.background='#FFFFCC';
}
function mvout(this_data) {
	this_data.style.background='';
}


function updateChar(length_limit, txid, viewid)
{
   var textlimit = "";
   var form = document.getElementById(txid);
   var length = calculate_msglen(form.value);
   if (viewid != "") {
	   textlimit = document.getElementById(viewid);
	   textlimit.innerHTML = length;
   }
   if (length > length_limit) {
       alert("최대 " + length_limit + "byte이므로 초과된 글자수는 자동으로 삭제됩니다.");
       form.value = form.value.replace(/\r\n$/, "");
       form.value = assert_msglen(form.value, length_limit, viewid);
   }
}

function calculate_msglen(message)
{
   var nbytes = 0;

   for (var i=0; i<message.length; i++) {
       var ch = message.charAt(i);
       if(escape(ch).length > 4) {
           nbytes += 2;
       } else if (ch == '\n') {
           if (message.charAt(i-1) != '\r') {
               nbytes += 1;
           }
       } else if (ch == '<' || ch == '>') {
           nbytes += 4;
       } else {
           nbytes += 1;
       }
   }

   return nbytes;
}

function assert_msglen(message, maximum, viewid)
{
   var inc = 0;
   var nbytes = 0;
   var msg = "";
   var msglen = message.length;
   var textlimit = "";
   
   if (viewid != "") {
	   textlimit = document.getElementById(viewid);
   }

   for (i=0; i<msglen; i++) {
       var ch = message.charAt(i);
       if (escape(ch).length > 4) {
           inc = 2;
       } else if (ch == '\n') {
           if (message.charAt(i-1) != '\r') {
               inc = 1;
           }
       } else if (ch == '<' || ch == '>') {
           inc = 4;
       } else {
           inc = 1;
       }
       if ((nbytes + inc) > maximum) {
           break;
       }
       nbytes += inc;
       msg += ch;
   }
   if (viewid != "") textlimit.innerHTML = nbytes;
   return msg;
}

function jumin_check(frongnum, backnum) {
        var strjumin1 = frongnum;
        var strjumin2 = backnum;
        var digit=0
        for (var i=0;i<strjumin1.length;i++) {
            var strdigit=strjumin1.substring(i,i+1);
            if (strdigit<'0' || strdigit>'9') {
                digit=digit+1;
            }
        }
        if ( digit != 0 ) {   //digit가 0이 아니라면
            alert('주민등록번호에는 0에서 9까지의 숫자만 적을 수 있습니다.\n\n다시 확인하고 입력해 주세요.');
            return false;
        }
        var digit1=0
        for (var i=0;i<strjumin2.length;i++) {
            var strdigit1=strjumin2.substring(i,i+1);
            if (strdigit1<'0' || strdigit1>'9') {
               digit1=digit1+1;
            }
        }
        if ( digit1 != 0 ) {
            alert('주민등록번호에는 0에서 9까지의 숫자만 적을 수 있습니다.\n\n다시 확인하고 입력해 주세요.');
            return false;
        }
        if (strjumin1.substring(2,3) > 1) {
            alert('잘못될 \'월\'을 입력했습니다.\n\n다시 확인하고 입력해 주세요.');
            return false;
        }
        if (strjumin1.substring(4,5) > 3) {
            alert('잘못된 \'일\'을 입력했습니다.\n\n다시 확인하고 입력해 주세요.');
            return false;
        }
        if (strjumin2.substring(0,1) > 4 || strjumin2.substring(0,1) == 0) {  //주민번호 뒷자리의 첫째숫자가 4보다 클경우
            alert('주민등록번호에서 성별을 나타내는 숫자는 1에서 4까지입니다.\n\n다시 확인하고 입력해 주세요.');
            return false;
        }
        var a1=strjumin1.substring(0,1)   //주민번호 계산법
        var a2=strjumin1.substring(1,2)
        var a3=strjumin1.substring(2,3)
        var a4=strjumin1.substring(3,4)
        var a5=strjumin1.substring(4,5)
        var a6=strjumin1.substring(5,6)
        var checkdigit=a1*2+a2*3+a3*4+a4*5+a5*6+a6*7
        var b1=strjumin2.substring(0,1)
        var b2=strjumin2.substring(1,2)
        var b3=strjumin2.substring(2,3)
        var b4=strjumin2.substring(3,4)
        var b5=strjumin2.substring(4,5)
        var b6=strjumin2.substring(5,6)
        var b7=strjumin2.substring(6,7)
        var checkdigit=checkdigit+b1*8+b2*9+b3*2+b4*3+b5*4+b6*5
        checkdigit = checkdigit%11
        checkdigit = 11 - checkdigit
        checkdigit = checkdigit%10
        if (checkdigit != b7) {
           alert('잘못된 주민등록번호입니다.\n\n다시 확인하고 입력해 주세요.');
           return false;
        }
      return true;
}

function HostUrl(){
 var Dns;
 Dns=location.href;
 Dns=Dns.split("//");
 Dns="http://"+Dns[1].substr(0,Dns[1].indexOf("/"));
 return  location.href.replaceAll(Dns,"");
}


function bookmarksite(title,url) { 
   if (window.sidebar) // firefox 
   window.sidebar.addPanel(title, url, ""); 
   else if(window.opera && window.print)
   { // opera 
      var elem = document.createElement('a'); 
      elem.setAttribute('href',url); 
      elem.setAttribute('title',title); 
      elem.setAttribute('rel','sidebar'); 
      elem.click(); 
   } 
   else if(document.all) // ie
   window.external.AddFavorite(url, title);
   else alert("<Ctrl-D>를 눌러 북마크에 추가하세요 ");
} 

//password 보안추가
function isSameContinuedId (value, cvalue) {
    var temp = "";
    var intCnt = 0;
    for ( var i = 0; i < value.length; i++ ) {
        temp = value.charAt(i) + value.charAt(i+1) + value.charAt(i+2) + value.charAt(i+3);
        if(temp.length==4 && cvalue.indexOf(temp) != -1){
			intCnt = intCnt + 1;
		}
    }
    if  ( intCnt > 0 ) {
        return true;
    } else {
        return false;
    }
}

function isSameContinuedValue (value) {
    var temp = "";
    var intCnt = 0;
    for ( var i = 0; i < value.length; i++ ) {
        temp = value.charAt(i) + value.charAt(i+1) + value.charAt(i+2) + value.charAt(i+3);
        if ( temp == value.charAt(i) && temp == value.charAt(i+1) && temp == value.charAt(i+2) && temp == value.charAt(i+3) ) {
			intCnt = intCnt + 1;
        }
    }
    if  ( intCnt > 0 ) {
        return true;
    } else {
        return false;
    }
}

function setCookieJs( name, value, expiredays ) {
	var todayDate = new Date();
	todayDate.setDate( todayDate.getDate() + expiredays );
	document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

function getCookieJs(Name) {
	var search = Name + "="
	if (document.cookie.length > 0) {
		offset = document.cookie.indexOf(search)

		if (offset != -1) {
			offset += search.length
			end = document.cookie.indexOf(";", offset)

			if (end == -1)
				end = document.cookie.length
			return unescape(document.cookie.substring(offset, end))
		}
	}
	return "";
}

function rsmevtLog(evtname, evtaction, evtlabel, evtmodel, evttrim) {
	var params = {
			"evtname" : evtname
			,"evtaction" : evtaction
			,"evtlavel" : evtlabel
			,"evtmodel" : evtmodel
			,"evttrim" : evttrim
	};
	$.get("/2017/api/evtlog.jsp",params);
}