$(function(e) {
	var count = 0;

	$(".qna a").click(function(e) {
		var con = $(this).attr('data-con')
          pop20181101();  
        });
		
    function pop20181101(a){
		$('#fixWrap').html("");
		$("<div id='popUp'></div>").appendTo($('#fixWrap'));
		$("#popUp").html(a);
	}
});
