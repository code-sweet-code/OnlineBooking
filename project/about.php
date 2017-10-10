<?php
$path = "./view/aboutpage.php";
if(isset($_GET["page"]))
{
	$page = $_GET["page"];
	if($page == "wireframe"){
		$path = "./view/wireframepage.php";
	}
	if($page == "contentmap"){
		$path = "./view/contentmappage.php";
	}
	if($page == "walkthrough"){
		$path = "./view/walkthroughpage.php";
	}
}
include $path;
?>