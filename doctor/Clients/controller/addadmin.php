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
  <h1> APPOINMENT SCHEDULE</h1> 
</div>


<?php
	require_once "admincontroller.php" ;
?>

<html>
      <head>
	  
	  <title> Add </title>
	      
	  <head>
	 
	  
	     <body>
		 <div class="adduser-div">

		<legend align="center"><h3>ADD</h3></legend>
		 
		    <form action="" method="post" onsubmit="return validate()">
			   <table align="center">
			          <tr>
					        <td><span><b>Pet Owner Details:</b></span></td>
							
							<td><input type="text" id="bname" name="bname" value="<?php echo $bname;?>" size="" placeholder="Owner_Info"><br>
							<span id="err_bname"><?php echo $err_bname;?></span></td>
					    </tr>
						 
					   <tr>
				           <td><span><b>Appoinment Information:</b></span></td>
					       <td><input type="text" id="content" name="content" value="<?php echo $content;?>" placeholder="appoinment_info"><br>
						    <span id="err_content"><?php echo $err_content;?></span></td>
			          </tr>
						
						
						
					     <tr>
					         <td><span><b>Health Issues:</b></span></td>
					         <td><input type="radio" id="Medical" name="cname" value="<?php echo "Medical";?>"> <span>Medical</span>
					         <input type="radio" id="Surgical" name="cname" value="<?php echo "Surgical";?>"> <span>Surgical</span>
							 <input type="radio" id="Vaccines" name="cname" value="<?php echo "Vaccines";?>"> <span>Vaccines</span>
							 <br> <span id="err_cname"> <?php echo $err_cname;?></span></td>
				  	   </tr>
					   
					   
					   
					   <tr>
					        <td><span><b>Time Slot:</b></span></td>
							
							<td><input type="text" id="pname" name="pname" value="<?php echo $pname;?>" size="" placeholder="If Available Than Contact You Soon"><br>
							<span id="err_pname"><?php echo $err_pname;?></span></td>
					    </tr>
				      
					    <tr>
				             <td><input type="submit" name="appoinment" value="Submit"></td>
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
						get("err_bname").innerHTML="Pet Owner Details Required";
						get("err_bname").style.color="Red";
						hasError=true;
					}
				    if(get("content").value == ""){
						get("content").focus();
						get("err_content").innerHTML="Appoinment Information Required";
						get("err_content").style.color="Red";
						hasError=true;
					}
					
				    if(get("Medical").checked == false && get("Surgical").checked == false &&  get("Vaccines").checked == false){
						//get("cname").focus();
						get("err_cname").innerHTML="Health Issues Required";
						get("err_cname").style.color="Red";
						hasError=true;
					}
					if(get("pname").value == ""){
						get("pname").focus();
						get("err_pname").innerHTML="Enter Your Time Schesule";
						get("err_pname").style.color="Red";
						hasError=true;
					} 
					
					if(!hasError){
						return true;
					}
					return false;
					
				}
				function cleanUp(){
				
					get("err_bname").innerHTML="";
					get("err_content").innerHTML="";
					get("err_cname").innerHTML="";
					get("err_pname").innerHTML="";
					
				}
	    </script>
		 </body>
		 
</html> 
			 

