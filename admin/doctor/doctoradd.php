<html lang="en">
<head>
    <title>NEW DOCTOR REGISTRATION</title>
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
  width: 100%;
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
  text-align: center;
  margin-left:
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
    text-align: center;
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
  <h1> NEW ADMIN REGISTRATION</h1>
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
                $err_uname="*Username Required";
                
            }
            else if(strlen($_POST["uname"]) <6){
                $err_uname="*Username should be at least 6 characters";
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


            if(($_POST["day"])=="Day"){
				$err_bday="*Please select Day";
			}
            else{
                $bday=$_POST["day"];
            }

            if(($_POST["month"])=="Month"){
				$err_bmonth="*Please select Month";
			}
            else{
                $bmonth=$_POST["month"];
            }

            if(($_POST["year"])=="Year"){
				$err_byear="*Please select Year";
			}
            else{
                $byear=$_POST["year"];
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
                $err_bio="*Bio text area must be filled";
            }
            else{
                $bio=$_POST["bio"];
            }
           
        }
    ?>
    

        <form action="" method="post">
            <table>
                <tr>
                    <td><Span>Name</Span></td>
                    <td>: <input type="text" placeholder="Name" value=" <?php echo $name; ?> " name="name"> 
                    <span><?php echo $err_name; ?></span></td>
                </tr>
                <tr>
                    <td><span>Username</span></td>
                    <td>: <input type="text" placeholder="Username" value=" <?php echo $uname; ?>" name="uname"> 
                    <span><?php echo $err_uname; ?></span></td></td>
                </tr>

                <tr>
                    <td><span>Password</span></td>
                    <td>: <input type="password" placeholder="Password" value="<?php echo $password; ?>" name="pass"> 
                    <span><?php echo $err_password; ?></span></td>
                </tr>

                <tr>
                    <td><span>Confirm Password</span></td>
                    <td>: <input type="password" placeholder="Confirm Password" value="<?php echo $conpassword; ?>" name="cpass">
                    <span><?php echo $err_conpassword; ?></span></td>
                </tr>

                <tr>
                <td><span>Email</span></td>
                    <td>: <input type="text" placeholder="Email" value="<?php echo $email; ?>" name="email"> 
                    <span><?php echo $err_email; ?></span></td>
                </tr>

                <tr>
                <td><span>Phone Number</span></td>
                    <td>: <input type="text" placeholder="Phone Number" value="<?php echo $phone; ?>" name="phonenumber">
                    <span><?php echo $err_phone; ?></span> </td>
                </tr>
                
                <tr>
                    <td rowspan="4"><span>Address</span></td>
                    <td>: <input type="text" placeholder="Street Address" value="<?php echo $street; ?>" name="street"> 
                    <span><?php echo $err_street; ?></span></td>
                </tr>

                <tr>
                    <td>: <input type="text" placeholder="City" value="<?php echo $city; ?>" name="city">
                    <span><?php echo $err_city; ?></span></td>
                    
                    
                </tr>
                <tr>
                    <td>: <input type="text" placeholder="State" value="<?php echo $state; ?>" name="state">
                    <span><?php echo $err_state; ?></span></td>
                
                </tr>

                <tr>
                    <td>: <input type="text" placeholder="Postal/zip code" value="<?php echo $zip; ?>" name="zip"> 
                    <span><?php echo $err_zip; ?></span></td>
                </tr>

                <tr>
                <td>Birth Date</td>
						<td>:
							<select name="day" value="<?php echo $day;?>">
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select name="month" value ="<?php echo $bmonth?>">
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
                            <select name="year" value ="<?php echo $byear?>">
								<option>Year</option>
								
								<?php
									for($i=1970;$i<=2021;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
                            <span> <?php echo $err_bday;?> </span>
                            <span> <?php echo $err_bmonth;?> </span>
                            <span> <?php echo $err_byear;?> </span>
						</td>
                </tr>
                
                <tr>
						<td><span>Gender</span></td>
						<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
                        <span> <?php echo $err_gender;?> </span></td>
				</tr>

                

              
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit" value="REGISTER"></td>
				</tr>



            </table>
        </form>
        

   </div>
    </div>
  </div>
</div>


</body>
</html>