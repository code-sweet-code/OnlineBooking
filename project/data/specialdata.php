<?php
require './data/db.php';

function getSpecials(){
	$db = new MyDB();
	$sql = "select * from special";
	$result = $db->query($sql);
	$specialArr = array();
	while($row = $result->fetchArray(SQLITE3_ASSOC))
	{
		$special["name"] = $row["name"];
		$special["picurl"] = $row["picurl"];
		$special["intro"] = $row["intro"];
		array_push($specialArr, $special);
	}
	return $specialArr;
}

?>