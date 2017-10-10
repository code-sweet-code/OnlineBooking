<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Restaurant Booking-Shuang Zhang</title>
<?php include './view/headloader.php';?>
</head>
<body>
<?php include './view/navigation.php';?>
<h4>Canvas & Data visualization: Top Country by GDP(20XX)</h4>
<canvas id="myCanvas" width="600" height="400"></canvas>
<h1 id='dom' onclick="domchange()">Shadow DOM: Click Me!</h1>
<h1><a href="auth.php">Authentication Page</a> username: admin   password: admin</h1>
<?php include './view/footer.php';?>
<?php include './view/jsloader.php';?>
<script src="res/js/snippets.js"></script>
</body>
</html>