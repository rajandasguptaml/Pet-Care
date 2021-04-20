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
    
  border: 1px solid black;
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;
  background-color: lightblue;

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
  <h1> ADD PRODUCT</h1> 
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
			   <table align="center">
			          <tr>
					        <td><span><b>Product Name:</b></span></td>
							
							<td><input type="text" id="bname" name="bname" value="<?php echo $bname;?>" size="" placeholder="Product_Intro"><br>
							<span id="err_bname"><?php echo $err_bname;?></span></td>
					    </tr>
						
					     <tr>
					         <td><span><b>Catagory</b></span></td>
					         <td><input type="radio" id="Food" name="cname" value="<?php echo "Food";?>"> <span>Food</span>
					         <input type="radio" id="Health"  name="cname" value="<?php echo "Health";?>"> <span>Health</span>
							 <input type="radio" id="Life Style"  name="cname" value="<?php echo "Life_Style";?>"> <span>Life Style</span>
							 <br> <span id="err_cname"> <?php echo $err_cname;?></span></td>
				  	   </tr>
					   
					   <tr>
					        <td><span><b>Product Price:</b></span></td>
							
							<td><input type="text" id="pname" name="pname" value="<?php echo $pname;?>" size="" placeholder="Product_Price"><br>
							<span id="err_pname"><?php echo $err_pname;?></span></td>
					    </tr>
					   
					   <tr>
				           <td><span><b>Product Content:</b></span></td>
					       <td><input type="text"  id="content" name="content" value="<?php echo $content;?>" placeholder="Product Content"><br>
						    <span id="err_content"><?php echo $err_content;?></span></td>
			          </tr>
				      
					    <tr>
				             <td><input type="submit" name="productpp" value="ADD"></td>
				        </tr>    
							
					       
				</table>
             </form>
			 <div>
			 
			 <script>
				function get(id){
					return document.getElementById(id);
				}
			
			
				function validate(){
					cleanUp();
					var hasError=false;
					if(get("bname").value == ""){
						get("bname").focus();
						get("err_bname").innerHTML="Please Enter Product Name";
						get("err_bname").style.color="Red";
						hasError=true;
					}
				    if(get("pname").value == ""){
						get("pname").focus();
						get("err_pname").innerHTML="Product Price Required";
						get("err_pname").style.color="Red";
						hasError=true;
					}
					
				    if(get("Food").checked == false && get("Health").checked == false &&  get("Life Style").checked == false){
						//get("cname").focus();
						get("err_cname").innerHTML="Catagory Required";
						get("err_cname").style.color="Red";
						hasError=true;
					}
					if(get("content").value == ""){
						get("content").focus();
						get("err_content").innerHTML="Product Content";
						get("err_content").style.color="Red";
						hasError=true;
					} 
					
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp(){
				
					get("err_bname").innerHTML="";
					get("err_pname").innerHTML="";
					get("err_cname").innerHTML="";
					get("err_content").innerHTML="";
					
				}
	    </script>
		 </body>
		 
</html>