<?php
$username=$_POST['user_name'];

$password=$_POST['user_password'];

if(empty($username)){
    $name_error='Please insert your username';  

}
elseif(strlen($username) <5)
{
    $name_error='Your username needs to have minimum of 5 letters';
}
if(empty($password)){
    $password_error='Please insert your password';
}
elseif(strlen($password) <5)
{
    $password_error='Your password needs to have minimum length of 5';
}

if(empty($name_error) && empty($password_error)) {
    include('Success.php');
}
else  {
include('index.php');
}
?>