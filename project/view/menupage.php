<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Restaurant Booking-Shuang Zhang</title>
<?php include './view/headloader.php';?>
<link rel="stylesheet" href="res/css/menu.css">
</head>
<body>
<?php include './view/navigation.php';?>
<section>
	<ul class="nav nav-pills nav-stacked menu-custom">
	<?php
	for($i=0; $i<sizeof($menu); $i++){
		echo "<li";
		if($i == 0) echo " class='active' ";
		echo "><a data-toggle='pill' href='#".$i."'>".$menu[$i]["typename"]."</a></li>";
	}
	?>
	
	</ul>
	<div class="tab-content tab-content-custom">
	<?php
	for($i=0; $i<sizeof($menu); $i++){
		echo "<div id='".$i."' class='tab-pane fade";
		if($i == 0) echo " in active ";
		echo "'>";
		$dishes = $menu[$i]["dishes"];
		for($j=0; $j<sizeof($dishes); $j++)
		{
			echo "<div class='thumbnail thumbnail-custom'>
					<img src='".$dishes[$j]["picurl"]."'>
					<div class='caption'>
					<p class='nail-title'>".$dishes[$j]["name"]."</p>
					<p class='nail-content'>".$dishes[$j]["intro"]."</p>
					</div>
					</div>";
		}
		echo "</div>";
	}
	?>
		
	</div>
</section>
<audio controls >
  <source src="res/audio/menubgm.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<?php include './view/footer.php';?>
<?php include './view/jsloader.php';?>
</body>
</html>