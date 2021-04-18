<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "petcare";
$connect = new mysqli($host, $user, $pass, $dbname);

if ($connect -> connect_error) {
   die($connect -> error);
} else {
   // echo "Db Connected successfully";
}
?>