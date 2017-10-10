<?php
require "./data/bookingdata.php";
if(!isset($_POST["issubmit"]))
{
	include './view/bookingpage2.php';
}
else
{
	$booking["date"] = $_POST["date"];
	$booking["time"] = $_POST["time"];
	$booking["num"] = $_POST["num"];
	$booking["name"] = $_POST["name"];
	$booking["email"] = $_POST["email"];
	$booking["phone"] = $_POST["phone"];
	
	if(saveBookingData($booking)){
		$response["result"] = "SUCCESS";
		echo json_encode($response);
	}else{
		$response["result"] = "FAIL";
		echo json_encode($response);
	}
	
	
}

?>