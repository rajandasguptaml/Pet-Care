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
  <h1>ADMIN DASHBOARD</h1> 
</div>


<?php
    require "admincontroller.php" ;
	$id = $_GET["id"];
	$customer = getCustomers($id) ;
?>
<html>
      <head>
	  <title>Update Customer</title>
	      <style>
		  .ed-div
				{
					
				border:1px solid black;
				margin:auto;
				width:30%;
				margin-top:13%;
				
				}
		  
	       </style>
	  <head>
	  
	     <body>
		 <div class="ed-div">
		<fieldset>
        <legend align="center"><h1>Update Customers</h1></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			   <tr>
			         <td><input type="hidden" name="id" value="<?php echo $customer["id"];?>"></td> 
					 </tr>
			           <tr>
					        <td><span><b>First Name:<b></span></td>
							<td><input type="text" name="fname" value="<?php echo $customer["fname"];?>" size="" placeholder="First Name"><br>
							<span><?php echo $err_fname;?></span></td>
					    </tr>
						
					     <tr>
					        <td><span><b>Last Name:<b></span></td>
							<td><input type="text" name="lname" value="<?php echo $customer["lname"];?>" size="" placeholder="Last Name"><br>
							<span><?php echo $err_lname;?></span></td>
					    </tr>
					   
					   <tr>
				           <td><span><b>Username:<b></span></td>
					       <td><input type="text" name="username" value="<?php echo $customer["username"];?>" placeholder="Username"><br>
						    <span><?php echo $err_username;?></span></td>
			          </tr>
					  
					    <tr>
					         <td><span><b>Gender<b></span></td>
					         <td><input type="radio"  name="gender" value="<?php echo "Male";?>"> <span>Male</span>
					             <input type="radio"  name="gender" value="<?php echo "Female";?>"> <span>Female</span><br>
								 <span><?php echo $err_gender;?></span></td>
				  	   </tr>
					   
						<tr>
					        <td><span><b>Email:<b></span></td>
							<td><input type="text" size="" name="email" value="<?php echo $customer["email"];?>" placeholder="Email"><br>
							<span><?php echo $err_email;?></span></td>
					   </tr>
					   <tr>
					        <td><span><b>Address:<b></span></td>
					        <td><input type="text" name="address" value="<?php echo $customer["address"];?>" placeholder="Address"><br>
					        <span><?php echo $err_address;?></span></td>
					
				       </tr>
				     <tr>
					           <td><span><b>Number:</b></span></td>
							   <td><input type="text" size="" name="number" value="<?php echo $customer["number"];?>" placeholder="Contect Number"><br>
							    <span><?php echo $err_number;?></span></td>
					</tr>	
				
					
					
					<tr>
					          <td><span><b>About:<b></span></td>
					           <td><textarea name="about" placeholder="Info"><?php echo $customer["about"];?></textarea><br>
					          <span><?php echo $err_about ?></span></td>
				                 </tr>
					   
				        
					<tr>
				             <td><input type="submit" name="update_customer" value="Update Customer">"</td>
				    </tr>    
							
					       
				</table>
             </form>
			 <div>
		 </fieldset>
		 </body>
		 
</html>