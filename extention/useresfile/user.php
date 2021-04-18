<!DOCTYPE html>
<html lang="en">
<head>
    <title> ADD USER</title>
</head>
<body>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin left: 550px;
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

.signup-section {
 padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  
}

.container {
  padding: 0px 100px 50px 300px; 

  
  
}
.single{
	
	float:left;
	 padding: 0px 100px 50px 100px; 
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
  margin-left: 500px;
  

}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

</style>
<div id="signup"></div>
<div class="signup-section">
  <h1> ADD NEW USER</h1>
  </div>
<?php
	require_once "user_controller.php" ;
?>
<html>


	</head>
	<body>
	<div class="login-div">
		<fieldset>
		<form action="" method="post">
		<legend align="center"><h1></h1></legend>
	
				<table align="center">
				<h2 align="center"></h2>
				<tr>
					<td><span><b>Username:</b></span></td>
					<td><input type="text" value="<?php echo $username;?>" name="username" placeholder="Username">
						<span><?php echo $err_username;?></span></td>
				</tr>
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
					       <td><span><b>User type:<b></span></td>
						   <td>
						 <select name="type">
							           <option disabled selected>Choose One</option>
							            <option>USER</option> 
										<option>ADMIN</option> 
							            <option>DOCTOR</option>
										<option>EDITOR</option>	  
						</select>
						<span><?php echo $err_type;?></span></td>
				</tr>
				<tr>
					<td><input type="submit" name="sign_up"value="ADD USER"></td>
				</tr>
			</table>
	</form>	
	</fieldset>
	</div>
	</body>
 </html>