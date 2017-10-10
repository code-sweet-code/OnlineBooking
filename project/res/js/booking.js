$(document).ready(function(){
	$(".form-control-feedback").hide();
	$(".booking-success").hide();
	$("#book").click(function(){
		var hasInvalid = false;
		for(var i=0; i<$(".form-control").size(); i++)
		{
			if(!isValid($(".form-control:eq("+i+")")))
			{
				hasInvalid = true;
			}
		}
		
		if(!hasInvalid){
			$.post("booking.php",
			{
				issubmit: true,
				date: $("#date").val(),
				time: $("#time").val(),
				num: $("#num").val(),
				name: $("#name").val(),
				email: $("#email").val(),
				phone: $("#phone").val()
			},
			function(data, status){
				var obj = JSON.parse(data);
				if(obj["result"] == "SUCCESS"){
					$(".booking-success").show();
					$(".bookform").hide();
				}
			});
		}
		return false;
	});
	
	$("input").change(function(){
		isValid($(this));
    });
	
	function isValid(obj){
		var validity = obj[0].checkValidity();
		if(validity == false){
			obj.siblings().filter("span").show();
			obj.parentsUntil("form").filter(".form-group").addClass("has-error has-feedback");
		}else{
			obj.siblings().filter("span").hide();
			obj.parentsUntil("form").filter(".form-group").removeClass("has-error has-feedback");
		}
		
		return validity;
	}
	
});
