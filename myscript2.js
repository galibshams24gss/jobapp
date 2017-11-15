$("button#submit").click(function(){
	if($("#name").val() == "")
		$("div#showupload").html("Please Insert !");
	else
		$.post($("#myUpload").attr("action"),
	$("#myUpload :input").serializeArray(),
	function(data){
			$("div#showupload").html(data);
			clearInput();
		});
		
	$("#myUpload").submit(function(){
		return false;
	});
	
 function clearInput(){
		$("#myUpload :input").each(function() {
			$(this).val('');
		});
		}
});