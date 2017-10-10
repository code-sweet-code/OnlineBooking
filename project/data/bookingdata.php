<?php
require './data/db.php';

function saveBookingData($booking){
	$db = new MyDB();
	$sql = "insert into bookinfo(date,time,nop,name,email,phone) 
			values('".$db->sqlSafeFilter($booking["date"])."',
					'".$db->sqlSafeFilter($booking["time"])."',
					'".$db->sqlSafeFilter($booking["num"])."',
					'".$db->sqlSafeFilter($booking["name"])."',
					'".$db->sqlSafeFilter($booking["email"])."',
					'".$db->sqlSafeFilter($booking["phone"])."')";
	return $db->exec($sql);
}



?>