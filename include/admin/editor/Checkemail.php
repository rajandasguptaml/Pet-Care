<?php
	require_once 'admincontroller.php';
	$email=$_GET["email"];
	$result = checkemaill($email);
	echo $result;

?>