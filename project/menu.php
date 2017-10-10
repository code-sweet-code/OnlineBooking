<?php 
require "./data/menudata.php";

$types = getDishTypes();
$alldishes = getDishes();
$menu = array();
for($i=0; $i<sizeof($types); $i++)
{
	$dishArr = extractDishByType($alldishes, $types[$i]["id"]);
	$menu[$i]["typename"] = $types[$i]["type"];
	$menu[$i]["dishes"] = $dishArr;
}

include './view/menupage.php';

function extractDishByType($alldishes, $typeid){
	$dishArr = array();
	for($i=0; $i<sizeof($alldishes); $i++)
	{
		if($alldishes[$i]["typeid"] == $typeid)
		{
			array_push($dishArr, $alldishes[$i]);
		}
	}
	return $dishArr;
}

?>