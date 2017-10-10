<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Restaurant Booking-Shuang Zhang</title>
<?php include './view/headloader.php';?>
<link rel="stylesheet" href="res/css/special.css">
</head>
<body>
<?php include './view/navigation.php';?>
<div id="carousel-example-generic" class="carousel slide slideshow-custom" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  <?php 
  for($i=0; $i<$count; $i++) {

	echo "<li data-target='#carousel-example-generic' data-slide-to=".$i;
	if($i == 0) echo " class='active' ";
	echo " ></li>";
  }
  ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner slideshow-inner-custom" role="listbox">
  <?php 
  for($i=0; $i<$count; $i++) {

	echo "<div class='item";
	if($i == 0) echo " active ";
	echo " '>";
	echo "<img src='".$specials[$i]["picurl"]."'>";
    echo "<div class='carousel-caption'>";
    echo "<h3>".$specials[$i]["name"]."</h3>";
	echo "<p>".$specials[$i]["intro"]."</p>";
    echo "</div>";
    echo "</div>";
  }
  ?>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php include './view/footer.php';?>
<?php include './view/jsloader.php';?>
</body>
</html>