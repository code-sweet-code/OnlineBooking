<?php
require './data/db.php';

function getIndexVideoURL(){
	$db = new MyDB();
	$sql = "select value from conf where name='indexvideourl'";
	$url = $db->querySingle($sql);
	$url = ($url == NULL)?"":$url;
	return $url;
}

?>