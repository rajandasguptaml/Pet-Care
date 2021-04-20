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
  <h1> UPDATE </h1> 
</div>


<?php
    require "admincontroller.php" ;
	$id = $_GET["id"];
	$addcart = getaddcart($id) ;
?>
<html>
      <head>
	  <title>UPDATE  </title>
	      
	  <head>
	  
	     <body>
		 <div class="ed-div">
	
        <legend align="center"><h3>UPDATE</h3></legend>
		 
		    <form action="" method="post">
			   <table align="center">
			   <tr>
					<td><input type="hidden" name="id" value="<?php echo $addcart["id"] ;?>"></td>
			         
					 </tr>
			           <tr>
					        <td><span><b>Product Name:</b></span></td>
							
							<td><input type="text" name="bname" value="<?php echo $addcart ["bname"];?>" size="" placeholder="Product_Intro"><br>
							<span><?php echo $err_bname;?></span></td>
					    </tr>
						
					     <tr>
					         <td><span><b>Catagory</b></span></td>
					         <td><input type="radio"  name="cname" value="<?php echo "Bksash";?>"> <span>Bksash</span>
					         <input type="radio"  name="cname" value="<?php echo "Nagad";?>"> <span>Nagad</span>
							 <input type="radio"  name="cname" value="<?php echo "Rocket";?>"> <span>Rocket</span>
							 <br> <span> <?php echo $err_cname;?></span></td>
				  	   </tr>
					   
					   <tr>
				           <td><span><b>Address:</b></span></td>
					       <td><input type="text" name="content" value="<?php echo $addcart["content"];?>" placeholder="Product Content"><br>
						    <span><?php echo $err_content;?></span></td>
			          </tr>
					    
						
						<tr>
				             <td><input type="submit" name="update_customer" value="UPDATE"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
		
		 </body>
		 
</html>