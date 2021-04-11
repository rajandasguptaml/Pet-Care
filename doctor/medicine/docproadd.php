<!DOCTYPE html>
<html lang="en">
<head>
    <title>MEDICINE UPDATE</title>
</head>
<body>
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
  width: 50%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.signup-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  
}

.container {
  padding: 0 16px;
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
  <h1>UPADATE MEDICINE DETAILS </h1>
  <p></p>
  <p></p>
</div>
<h2 style="text-align:center"></h2>
<div class="row">
  <div class="column">
    <div class="card">
   
      <div class="container">
    <?php
        $name="";
        $err_name="";
        $uname="";
		$err_uname="";
        $password="";
        $passcheck=false;
		$err_password="";
        $conpassword="";
        $err_conpassword="";
        $aboutus="";
        $err_aboutus="";
        $bio="";
        $err_bio="";
        $gender="";
        $err_gender="";
        $bday="";
        $byear="";
        $bmonth="";
        $err_bday="";
        $err_byear="";
        $err_bmonth="";
        $email="";
        $err_email="";
        $phone="";
        $err_phone="";
        $street="";
        $city="";
        $state="";
        $zip="";
        $err_street="";
        $err_city="";
        $err_zip="";
        $err_state="";
      


        function passValidation($pass){
            $boolUpper=false;
            $boolLower=false;
            $boolHashtag=false;
            $boolQuestionMark=false;
            $boolNum=false;
            $passlength= strlen($pass);
            for($i=0;$i<$passlength;$i++){
                if(ctype_upper($pass[$i])){
                    $boolUpper=true;
                    
                }
                if(ctype_lower($pass[$i])){
                    $boolLower=true;
                    
                }
                if($pass[$i]== '#'){
                    $boolHashtag=true;
                
                }
                
                if($pass[$i]== '?'){
                    $boolQuestionMark=true;
                
                }
                if($pass[$i] >= '0' && $pass[$i] <= '9'){
                    $boolNum=true;
                
                }
                if($boolLower && $boolUpper && $boolHashtag || $boolQuestionMark && $boolNum){
                    return true;
                }
            
            }
            return false;
            
            
        }

        if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if(empty($_POST["uname"])){
                $err_uname="*Name Required";
                
            }
            else if(strlen($_POST["uname"]) <6){
                $err_uname="*INVALID";
                ;
            }
            else{
                $uname=htmlspecialchars($_POST["uname"]);
            }
            
            
            if(empty($_POST["name"])){
                $err_name="*Name required";
            }
            else{
                $name=$_POST["name"];
            }
            
            if(empty($_POST["pass"])){
                $err_password = "*Password Required";
                
            }
            
            else if(strlen($_POST["pass"])<8){
                $err_password="*Password must be at least 8 characters";
            }

            else if (!passValidation($_POST["pass"])){
                $err_password="*Password must contain upper, lower, special character (# or ?) and number";
            }

            else{
                $password=$_POST["pass"];
            }


            if(empty($_POST["cpass"])){
                $err_conpassword="*Please enter confirm password";
            }

            else if($_POST["cpass"]!=$_POST["pass"]){
                $err_conpassword="*Please match confirm password";
            }
            
            else{
                $conpassword=$_POST["cpass"];
            }

            if(empty($_POST["email"])){
               $err_email="*Please enter email";
            }

            else{
                $s=strpos($_POST["email"],"@");
                if($s!=false){
                    $t=strpos($_POST["email"],".", $s+1);
                    if($t!=false){
                        $email=$_POST["email"];
                    }
                    else{
                        $err_email="*Invalid email";
                    }
                }
                else{
                    $err_email="*Invalid email";
                }
            }

            if(empty($_POST["phonenumber"])){
                $err_phone="*Enter phone number";
            }

            else if(is_numeric($_POST["phonenumber"])==false){
                $err_phone="*Please enter digit";
            }
            else{
                $phone=$_POST["phonenumber"];
            }


            if(empty($_POST["street"])){
                $err_street="*enter street";
            }
            else{
                $street=$_POST["street"];
            }

            if(empty($_POST["city"])){
                $err_city="*enter city ";
            }
            else{
                $city=$_POST["city"];
            }


            if(empty($_POST["state"])){
                $err_state="*enter state";
            }
            else{
                $state=$_POST["state"];
            }


            if(empty($_POST["zip"])){
                $err_zip="*enter zip";
            }
            else if(is_numeric($_POST["zip"])==false){
                $err_zip="*Zip number must be digit";
            }
            else{
                $zip=$_POST["zip"];
            }


            if(empty($_POST["gender"])){
				$err_gender="****Please select gender";
			}
            else{
                $gender=$_POST["gender"];
            }

            if(empty($_POST["aboutus"])){
                $err_aboutus="*Please select something";
            }
            else{
                $aboutus=$_POST["aboutus"];
            }

            if(empty($_POST["bio"])){
                $err_bio="*Details text area must be filled";
            }
            else{
                $bio=$_POST["bio"];
            }
           
        }
    ?>
 
        <form action="" method="post">
            <table>
                <tr>
                    <td><Span>Medicine Name</Span></td>
                    <td>: <input type="text" placeholder="Name" value=" <?php echo $name; ?> " name="name"> 
                    <span><?php echo $err_name; ?></span></td>
                </tr>
                <tr>
                    <td><span>Medicine ID</span></td>
                    <td>: <input type="text" placeholder="Username" value=" <?php echo $uname; ?>" name="uname"> 
                    <span><?php echo $err_uname; ?></span></td></td>
                </tr>
				
				<tr>
                    <td><span>Manufecturar</span></td>
                    <td>: <input type="text" placeholder="Username" value=" <?php echo $uname; ?>" name="uname"> 
                    <span><?php echo $err_uname; ?></span></td></td>
                </tr>
				
				<tr>
                    <td><span>Price</span></td>
                    <td>: <input type="text" placeholder="Username" value=" <?php echo $uname; ?>" name="uname"> 
                    <span><?php echo $err_uname; ?></span></td></td>
                </tr>
				
				<tr>
                <td>Catagory</td>
						<td>:
							
							</select>
							<select name="month" value ="<?php echo $bmonth?>">
								<option>Catagory</option>
								
								<?php
								    $month = array("","Medical Health","Pet & Pet Supplies","Pet Medicine","Other");
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
                            
                            <span> <?php echo $err_bmonth;?> </span>
                            
                </tr>
                
		
                <tr>
						<td><span>Medicine Details </span></td>
						<td>:<textarea name="bio"></textarea>
                        <span> <?php  echo $err_bio  ?> </span>
                        </td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="UPDATE"></td>
				</tr>



            </table>
        </form>
 
   </div>
    </div>
  </div>
</div>


</body>
</html>