<?php
require './data/db.php';

function getDishTypes(){
	$db = new MyDB();
	$sql = "select * from dishtype";
	$typeresult = $db->query($sql);
	$typeArr = array();
	while($row = $typeresult->fetchArray(SQLITE3_ASSOC))
	{
		$type["id"] = $row["id"];
		$type["type"] = $row["type"];
		array_push($typeArr, $type);
	}
	return $typeArr;
}

function getDishes(){
	$db = new MyDB();
	$id = addslashes($id);
	$sql = "select * from dish";
	$dishresult = $db->query($sql);
	$dishArr = array();
	while($row = $dishresult->fetchArray(SQLITE3_ASSOC))
	{
		$dish["name"] = $row["name"];
		$dish["picurl"] = $row["picurl"];
		$dish["intro"] = $row["intro"];
		$dish["typeid"] = $row["typeid"];
		array_push($dishArr, $dish);
	}
	return $dishArr;
}

function getDishByTypeid($id){
	$db = new MyDB();
	$id = addslashes($id);
	$sql = "select * from dish where typeid='".$id."'";
	$dishresult = $db->query($sql);
	$dishArr = array();
	while($row = $dishresult->fetchArray(SQLITE3_ASSOC))
	{
		$dish["name"] = $row["name"];
		$dish["picurl"] = $row["picurl"];
		$dish["intro"] = $row["intro"];
		array_push($dishArr, $dish);
	}
	return $dishArr;
}

?>