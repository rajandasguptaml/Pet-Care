<?php
	require_once 'admincontroller.php';
	$username=$_GET["username"];
	$res = checkUsernamee($username);
	echo $res;

?>