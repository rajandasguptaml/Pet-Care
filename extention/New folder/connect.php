<?php
$server="localhost";
$dbuser = 'root';
$dbpass = '';
$db='petcare';

	$name = $_POST['name'];
	$uname= $_POST['uname'];
	$catagory= $_POST['catagory'];
	$bio = $_POST['bio'];
	
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
if(! $conn ) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';

$sql="insert into blog(name,uname,catagory,bio) Values($name,$uname,$catagory,$bio)";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

 ?>