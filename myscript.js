$("button#submit").click(function(){
		$.post($("#myData").attr("action"),
	$("#myData :input").serializeArray(),
	function(info){
			$("div#showresult").html(info).css('border','5px solid blue');
			clearData();
		});
		
	$("#myData").submit(function(){
		return false;
	});
	
 function clearData(){
		$("#myData :input").each(function() {
			$(this).val('');
		});
		}
});