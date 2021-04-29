<!DOCTYPE html>
<html lang="en">
<head>
    <title> Sign Up</title>
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
  <h1> SIGN UP</h1>
  </div>
<?php
	require_once "Login_controller.php" ;
?>
<html>


	</head>
	<body>
	<div class="login-div">
		<fieldset>
		<form action="" method="post">
		<legend align="center"><h1></h1></legend>
	
			<form action="" method="post" onsubmit="return validate()">
			
				<table align="center">
				<h2 align="center"></h2>
				<tr>
					<td><span><b>Username:</b></span></td>
					<td><input type="text" id="username" value="<?php echo $username;?>" name="username" onfocusout="checkUsername(this)"  placeholder="Username">
						<span id="err_username"><?php echo $err_username;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email:</b></span></td>
					<td><input type="text" id="email" value="<?php echo $email;?>" name="email" placeholder="Mail Address">
						<span id="err_email" ><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password:</b></span></td>
					<td><input type="password"  id="password" name="password" value="<?php echo $password;?>" placeholder="Password"><br>
						<span id="err_password"><?php echo $err_password;?></span></td>
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
					<td><input type="submit" name="sign_up"value="Sign Up"></td>
				</tr>
			</table>
	</form>	
	</fieldset>
	</div>
	
	<script>
		
			function checkUsername(control)
					{
						var username = control.value;
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								var responce = this.responseText;
								if(responce == "true"){
									document.getElementById("err_username").innerHTML = "<br>Valid Username";
									document.getElementById("err_username").style.color = "green";
								}
								else{
                                        document.getElementById("err_username").innerHTML = "<br>Not Valid Username";
									    document.getElementById("err_username").style.color = "red";
									
								}
							}
						};
						xhttp.open("GET","CheckUsername.php?username="+username,true);
						xhttp.send();
					}
					
					
					
					function get(id){
					return document.getElementById(id);
				}
			
			
				function validate(){
					cleanUp();
					var hasError=false;
					
					if(get("username").value == ""){
						get("username").focus();
						get("err_username").innerHTML="Username Required";
						get("err_username").style.color="Teal";
						hasError=true;
					}
				    
					}
					if(get("email").value == ""){
						get("email").focus();
						get("err_email").innerHTML="Email Required";
						get("err_email").style.color="Teal";
						hasError=true;
					} 
					if(get("password").value == ""){
						get("password").focus();
						get("err_password").innerHTML="Password Required";
						get("err_password").style.color="Teal";
						hasError=true;
					}
					
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp(){
				
					
					get("err_username").innerHTML="";
					get("err_email").innerHTML="";
					get("err_password").innerHTML="";
					
				}
				
				
	        
			</script>
	</body>
 </html>