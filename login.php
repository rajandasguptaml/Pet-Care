<html lang="en">
<head>
    <title> LOG IN</title>
</head>
<body>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
 	margin:0 auto;
	margin-top:150px;
	width:30%;  
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

.login-section {
 padding: 5px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  
}

.container {  
  
  
}
.single{
	
	float:left;
	 padding: 0px 100px 50px 100px; 
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
  margin-left:100px;
  
}

.button>a {
  border: none;
  outline: 0;
  display: inline-block; 
  padding: 2px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  overflow:hidden;  
  text-decoration:none;
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


</style>
<div id="login"></div>
<div class="login-section">
  <h1> LOG IN</h1>
  <p></p>
  <p></p>
</div>
<h2 style="text-align:center"></h2>
<div class="row">
  <div class="column">
    <div class="card">
   
      <div class="container">
	  <div class= "single">
	  
	  
</html>

	  <?php
        $uname="";
		$err_uname="";
        $password="";
        $passcheck=false;
		$err_password="";
        

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
  
      
    ?>
    
    <fieldset>
        <legend><h3></h3></legend>
        <form action="" method="post">
            <table>
                
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

               
            </table>
        </form>
		
        	   <p><button class="button"><a href="project.html"> LOG IN </a> </button></p>
			
    </fieldset>
	  
	   
	 <p><button class="button"><a href="signup.php"> SIGN UP </a></button></p>
	    
	
	  
	    </div>
    
	
   </div>
    </div>
  </div>
</div>


</body>
</html>