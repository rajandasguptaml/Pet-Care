<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$db='petcare';

	$name = $_POST['name'];
	$uname = $_POST['uname'];
	$password = $_POST['pass'];
	$conpassword = $_POST['cpass'];
	$email = $_POST['email'];
	$phone = $_POST['phonenumber'];
	$city = $_POST['city'];
	$zip = $_POST['zip'];
	$day = $_POST['day'];
	$bmonth = $_POST['month'];
	$byear = $_POST['year'];
	$gender = $_POST['gender'];
	$bio = $_POST['bio'];


$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
$sql="insert into my table1(b_title,b_author,b_catagory,b_details)Values ($name, $uname, $password, $conpassword, $email, $phone, $city, $zip, $day, $bmonth, $byear, $gender, $bio)";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

 ?>