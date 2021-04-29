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
	require_once "Login_controller.php" ;
?>
<html>
    <head>
	<title>ipool-Login</title>

  	
	<div class="">
	
	
		<form action="" method="post">
		<legend align="center"><h1></h1></legend>
	
				<table align="center">
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="text" value="<?php echo $email;?>" name="email" placeholder="Mail Address">
						<span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password:</b></span></td>
					<td><input type="password" name="password" value="<?php echo $password;?>" placeholder="Password"><br>
						<span><?php echo $err_password;?></span></td>
				</tr>
				
				<tr>
					<td><input type="submit" name="login"value="Login"></td>
				
				</tr>
			</table>
				<p><button class="button"><a href="sign_up.php"> SIGN UP </a></button></p>
	</form>	

		</div>
      </div> 	
    </div>
   


</div>

</body>




</html>
