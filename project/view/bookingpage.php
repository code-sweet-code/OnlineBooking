<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Restaurant Booking-Shuang Zhang</title>
<?php include './view/headloader.php';?>
<link rel="stylesheet" href="res/css/booking.css">
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
<?php include './view/jsloader.php';?>
<script src="res/js/booking.js" ></script>
</body>
</html>