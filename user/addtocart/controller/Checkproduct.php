<?php
	require_once 'admincontroller.php';
	$bname=$_GET["bname"];
	$res = checkUsernamee($bname);
	echo $res;

?>