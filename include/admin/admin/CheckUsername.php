<?php
	require_once 'admincontroller.php';
	$username=$_GET["username"];
	$result = checkUsernamee($username);
	echo $result;

?>