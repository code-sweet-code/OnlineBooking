<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cache-control" content="max-age=3600">
<title>Restaurant Booking-Shuang Zhang</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<link rel="shortcut icon" href="images/brand.png" type="images/png" sizes="16x16"/>
<style>
@import url('https://fonts.googleapis.com/css?family=Kaushan+Script|Varela+Round|Dancing+Script');

body{
	padding-top: 111px;
}

nav {
	padding-top: 20px;
	padding-bottom: 20px;
	float: left;
	width: 100%
	opacity:0.7;
}

.navbar-header-custom{
	float: left;
}

.navbar-header-custom img{
	width: 100px;
	position: relative;
	top: -32px;
	left: 40px;
}

.navbar-nav-custom{
	width: 80%;
	float: right;
}

.navbar-nav-custom li{
	width: 15%;
	text-align: center;
}

.navbar-nav-custom li a{
	font-family: 'Kaushan Script', cursive;
	font-size:	x-large;
}

footer{
	width: 100%;
	float: left;
	margin-top: 20px;
}

.footer-top-border{
	border-top: 1px solid rgba(158, 158, 158, 0.62);
}

.footer-container{
	width: 100%;
	padding-left: 10%;
	padding-right: 10%;
	float: left;
}

.footer-container h4{
	font-family: 'Varela Round', sans-serif;
}

.footer-container ul{
	width: 40%;
	list-style-type: none;
	margin: 0;
    padding: 0;
	float: left;
}

.footer-container ul li a{
	color: black;
}

.footer-container p{
	text-align: right;
	clear: both;
	font-size: smaller;
}
.bookform{
	width: 100%;
	float: left;
	padding: 0 25% 0 25%;
}

.booking-success{
	width: 100%;
	padding: 10% 0 10% 0;
	font-size: xx-large;
	text-align:center;
	float: left;
	font-family: 'Dancing Script', cursive;
}
</style>
</head>
<body>
<?php include './view/navigation.php';?>
<div class="bookform">
<form class="form-horizontal">
  <div class="form-group">
    <label for="date" class="col-sm-2 control-label">Date:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date" required>
	  <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    </div>
  </div>
  <div class="form-group">
    <label for="time" class="col-sm-2 control-label">Dinning Time:</label>
    <div class="col-sm-10">
      <input type="time" class="form-control" id="time"  required>
	  <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    </div>
  </div>
  <div class="form-group">
    <label for="num" class="col-sm-2 control-label">Number of People:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="num" min="1" max="100" step="1" value="1" required>
	  <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    </div>
  </div>
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Full Name" required>
	  <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Email" required>
	  <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    </div>
  </div>
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="phone" pattern="\d{3}[\-]\d{3}[\-]\d{4}" placeholder="123-456-7890" required>
	  <span class="glyphicon glyphicon-remove form-control-feedback"></span>
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success" id="book">Book Now</button>
    </div>
  </div>
</form>
</div>

<p class="booking-success">Thank you! We received your booking. See you then.</p>

<?php include './view/footer.php';?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script >
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

</script>
</body>
</html>