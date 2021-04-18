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
  <h1> ADD ADMIN</h1> 
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
		 
		    <form action="" method="post">
			   <table align="center">
			           <tr>
					        <td><span><b>First Name:</b></span></td>
							<td><input type="text" name="fname" value="<?php echo $fname;?>" size="" placeholder="First Name"><br>
							<span><?php echo $err_fname;?></span></td>
					    </tr>
						
					     <tr>
					        <td><span><b>Last Name:</b></span></td>
							<td><input type="text" name="lname" value="<?php echo $lname;?>" size="" placeholder="Last Name"><br>
							<span><?php echo $err_lname;?></span></td>
					    </tr>
					   
					   <tr>
				           <td><span><b>Username:</b></span></td>
					       <td><input type="text" name="username" value="<?php echo $username;?>" placeholder="Username"><br>
						    <span><?php echo $err_username;?></span></td>
			          </tr>
					  
					    <tr>
					         <td><span><b>gender</b></span></td>
					         <td><input type="radio"  name="gender" value="<?php echo "Male";?>"> <span>Male</span>
					         <input type="radio"  name="gender" value="<?php echo "Female";?>"> <span>Female</span><br> <span><?php echo $err_gender;?></span></td>
				  	   </tr>
					   
						<tr>
					        <td><span><b>Email:</b></span></td>
							<td><input type="text" size="" name="email" value="<?php echo $email;?>" placeholder="Email"><br>
							<span><?php echo $err_email;?></span></td>
					   </tr>
					   <tr>
					        <td><span><b>Address:</b></span></td>
					        <td><input type="text" name="address" value="<?php echo $address;?>" placeholder="Address"><br>
					        <span><?php echo $err_address;?></span></td>
					
				       </tr>
				
				     <tr>
					           <td><span><b>Number:</b></span></td>
							   <td><input type="text" size="" name="number" value="<?php echo $number;?>" placeholder="Contect Number"><br>
							    <span><?php echo $err_number;?></span></td>
					</tr>	
					
					   
					   <tr>
					          <td><span><b>About:</b></span></td>
					           <td><textarea name="about" placeholder="Info"><?php echo $about;?></textarea><br>
					          <span><?php echo $err_about ?></span></td>
				                 </tr>
					   
				        
					    <tr>
				             <td><input type="submit" name="customer" value="ADD"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
	
		 </body>
		 
</html>