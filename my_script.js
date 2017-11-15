$("button#submit").click(function(){
	if($("#username").val() == "" || $("#password").val() == "" )
		$("div#result").html("PLEASE INSERT !").css('border','5px solid blue');
	else
		$.post($("#myForm").attr("action"),
	$("#myForm :input").serializeArray(),
	function(data){
			$("div#result").html(data);
			clearInput();
		});
		
	$("#myForm").submit(function(){
		return false;
	});
	
 function clearInput(){
		$("#myForm :input").each(function() {
			$(this).val('');
		});
		}
});