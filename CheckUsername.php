<?php
	require_once 'Login_controller.php';
	$username=$_GET["username"];
	$result = checkUsernamee($username);
	echo $result;

?>