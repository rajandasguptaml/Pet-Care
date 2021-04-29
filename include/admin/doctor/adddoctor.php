<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  
  padding-top:100px:
  padding-bottom:10px:
  
}

.card {
  padding-top:100px:
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
  margin: 8px;
}
.card:hover{
  box-shadow: 0 10px 10px 0 rgba(255, 0, 0, 0.3);
  margin: 8px;
  
}

.dash-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  
}

.container {
  padding:50px;
  border: 1px solid grey;
}

	

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  
}



.a {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  text-decoration:none;
}

.a:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
.but{
	padding:5px 10px 5px 10px;
	background-color:black;
	color:#fff;
	class-decoration:none;
}
.but:hover{
	padding:5px 10px 5px 10px;
	background-color:grey;
	color:#000;
	class-decoration:none;
}

</style>

<div id="dash"></div>
<div class="dash-section">
  <h1> ADD DOCTOR</h1> 
</div>


<?php
	require_once "admincontroller.php" ;
?>

<html>
      <head>
	  <title>Add </title>
	      
	  <head>
	  
	     <body>
		 <div class="adduser-div">

		<legend align="center"><h3>ADD</h3></legend>
		 
		    
		     <form action="" method="post" onsubmit="return validate()">
			   <table align="center" >
			           <tr>
					        <td><span><b>First Name:</b></span></td>
							<td><input type="text" id="fname" name="fname" value="<?php echo $fname;?>" size="" placeholder="First Name"><br>
							<span id="err_fname"><?php echo $err_fname;?></span></td>
					    </tr>
						
					     <tr>
					        <td><span><b>Last Name:</b></span></td>
							<td><input type="text" id="lname" name="lname" value="<?php echo $lname;?>" size="" placeholder="Last Name"><br>
							<span id="err_lname"><?php echo $err_lname;?></span></td>
					    </tr>
					   
					   <tr>
				           <td><span><b>Username:</b></span></td>
					       <td><input type="text" id="username" name="username" onfocusout="checkUsername(this)" value="<?php echo $username;?>" placeholder="Username"><br>
						    <span id="err_username"><?php echo $err_username;?></span></td>
			          </tr>
					  
					    <tr>
					         <td><span><b>gender</b></span></td>
					         <td><input type="radio" id="Male"  name="gender" value="<?php echo "Male";?>"> <span>Male</span>
					         <input type="radio" id="Female" name="gender" value="<?php echo "Female";?>"> <span>Female</span><br>
							 <span id="err_gender"><?php echo $err_gender;?></span></td>
				  	   </tr>
					   
						<tr>
					        <td><span><b>Email:</b></span></td>
							<td><input type="text" id="email" size="" name="email" onfocusout="checkemail(this)"  value="<?php echo $email;?>" placeholder="Email"><br>
							<span id="err_email"><?php echo $err_email;?></span></td>
					   </tr>
					   <tr>
					        <td><span><b>Address:</b></span></td>
					        <td><input type="text" id="address" name="address" value="<?php echo $address;?>" placeholder="Address"><br>
					        <span id="err_address"><?php echo $err_address;?></span></td>
					
				       </tr>
				
				     <tr>
					           <td><span><b>Number:</b></span></td>
							   <td><input type="text" id="number" size="" name="number" value="<?php echo $number;?>" placeholder="Contect Number"><br>
							    <span id="err_number"><?php echo $err_number;?></span></td>
					</tr>	
					
					   
					   <tr>
					          <td><span><b>About:</b></span></td>
					           <td><textarea id="about" name="about" placeholder="Info"><?php echo $about;?></textarea><br>
					          <span id="err_about"><?php echo $err_about ?></span></td>
				                 </tr>
					   
				        
					    <tr>
				             <td><input type="submit" name="customer" value="ADD"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
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
	        
			
					
					function checkemail(control)
					{
						var email = control.value;
						
						var xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange=function(){
							if(this.readyState == 4 && this.status == 200){
								var respon = this.responseText;
								if(respon == "true"){
									document.getElementById("err_email").innerHTML = "<br>Valid Email";
									document.getElementById("err_email").style.color = "green";
								}
								else{
                                        document.getElementById("err_email").innerHTML = "<br>Not Valid Email";
									    document.getElementById("err_email").style.color = "red";
									
								}
							}
						};
						xhttp.open("GET","Checkemail.php?email="+email,true);
						xhttp.send();
					}
					
					
				
				function get(id){
					return document.getElementById(id);
				}
			
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("fname").value == ""){
						get("fname").focus();
						get("err_fname").innerHTML="First Name Required";
						get("err_fname").style.color="Teal";
						hasError=true;
					}
				    if(get("lname").value == ""){
						get("lname").focus();
						get("err_lname").innerHTML="Last Name Required";
						get("err_lname").style.color="Teal";
						hasError=true;
					}
					if(get("username").value == ""){
						get("username").focus();
						get("err_username").innerHTML="Username Required";
						get("err_username").style.color="Teal";
						hasError=true;
					}
				    if(get("Male").checked == false && get("Female").checked == false){
						//get("gender").focus();
						get("err_gender").innerHTML="Gender Required";
						get("err_gender").style.color="Teal";
						hasError=true;
					}
					if(get("email").value == ""){
						get("email").focus();
						get("err_email").innerHTML="Email Required";
						get("err_email").style.color="Teal";
						hasError=true;
					} 
					if(get("address").value == ""){
						get("address").focus();
						get("err_address").innerHTML="Address Required";
						get("err_address").style.color="Teal";
						hasError=true;
					}
					if(get("number").value == ""){
						get("number").focus();
						get("err_number").innerHTML="Number Required";
						get("err_number").style.color="Teal";
						hasError=true;
					}
					if(get("about").value == ""){
						get("about").focus();
						get("err_about").innerHTML="About Required";
						get("err_about").style.color="Teal";
						hasError=true;
					}
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp(){
				
					get("err_fname").innerHTML="";
					get("err_lname").innerHTML="";
					get("err_username").innerHTML="";
					get("err_gender").innerHTML="";
					get("err_email").innerHTML="";
					get("err_address").innerHTML="";
					get("err_number").innerHTML="";
					get("err_about").innerHTML="";
				}
	    </script>
		 </body>
		 
</html>