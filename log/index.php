<html lang="en">
<head>
    <title> LOG IN</title>
</head>
<body>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
 	margin:0 auto;
	margin-top:150px;
	width:30%;  
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 100%;
 
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin left: 50px;

}

.login-section {
 padding: 5px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  
}

.container {  
  
  
}
.single{
	
	float:left;
	 padding: 0px 100px 50px 100px; 
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
  
  

}

.title {
  color: grey;
}
.button {
  margin-left:100px;
  
}

.button>a {
  border: none;
  outline: 0;
  display: inline-block; 
  padding: 2px;
  color: white;
  background-color: #474e5d;
  text-align: center;
  cursor: pointer;
  width: 100%;
  overflow:hidden;  
  text-decoration:none;
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


</style>
<div id="login"></div>
<div class="login-section">
  <h1> LOG IN</h1>
  <p></p>
  <p></p>
</div>
<h2 style="text-align:center"></h2>
<div class="row">
  <div class="column">
    <div class="card">
   
      <div class="container">
	  <div class= "single">
	  
	  
</html>

<?php  
if (!isset($username)) {
    $username='';
} ?>
<html>
<head>

</head>
<body>
<div class="container">
</div>
<form action="result.php" method="Post">

<input placeholder="Username" type="text" name="user_name">
 <br/>
<?php if(isset($name_error)){ ?>
<p> <?php echo $name_error ?> </p>
<?php } ?>


<input  placeholder="Password" type="password" name="user_password"> <br/>

<?php if(isset($password_error)){ ?>
<p> <?php echo $password_error ?> </p>
<?php } ?>

<input class="button" type="Submit" value= "log in">
</br>

	 <p><button class="button"><a href="signup.php"> SIGN UP </a></button></p>
</form>




</body>
</html>

