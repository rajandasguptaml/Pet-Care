<?php
   require_once 'models/db_config.php' ;		
     $fname="";
	 $err_fname="";
     $lname="";
	 $err_lname="";
	 $username=""; 
	 $err_username="";
	 $gender="";
	 $err_gender="";
	 $email="";
	 $err_email="";
	 $stad="";
	 $err_stad="";
	 $city="";
	 $err_city="";
	 $number="";
	 $err_number="";
	 $role="";
	 $err_role="";
	 $about="";
	 $err_about="";
     $address = "" ;
     $err_address = "";
	 $hasError=false;
	 
	 
	 
	 function validEmail($email)
	 {
		 $pos_at=strpos($email,"@");
		 $pos_dot=strpos($email,".",$pos_at+1);
		   if($pos_at < $pos_dot)
		   {
			   return true;
		   }
		 
	 }
	 
	  
	 
	 if(isset($_POST["customer"])){
		
			if (empty($_POST["fname"])){
				$err_fname="First name required";
				$hasError=true;
			}
			else{
				$fname=htmlspecialchars($_POST["fname"]);
			}
			If (empty($_POST["lname"])){
				$err_lname="Last name required";
				$hasError=true; 
			}
			else{
				$lname=htmlspecialchars($_POST["lname"]);
			}
            if (empty($_POST["username"])){
				$err_username="Username Required";
				$hasError=true;
			}
			elseif (strlen($_POST["username"])<6){
				$err_username="Username must contain at least 6 characters ";
				$hasError=true;
			}
            elseif (strpos($_POST["username"]," ")) {
				$err_username="space is not allowed";
				$hasError=true;
			}
			else
			{
				$username=htmlspecialchars($_POST["username"]);
				
			}
             if(!isset($_POST["gender"]))
			 {
				$err_gender="Gender Required";
				$hasError=true;
			 }
			else
			{
				$gender=htmlspecialchars($_POST["gender"]);
			 }
			 if(empty($_POST["email"]))
		    {
			 $err_email="Email Required";
			 $hasError=true;
		    }
		     elseif(!validEmail($_POST["email"]))
		    {
			 $err_email="Not a valid Email";
			 $hasError=true;
		    }
            else
		   {
			$email=htmlspecialchars($_POST["email"]);
		   }
			 if(empty($_POST["address"]))
		    {
			 $err_address="address Name Required";
			 $hasError=true;
		   }
		   else
		   {
            $address=htmlspecialchars($_POST["address"]);
		   }
	       if(empty($_POST["city"]))
		   {
			 $err_city="City Name Required";
			 $hasError=true;
		   }
		   else
		   {
			 $city=htmlspecialchars($_POST["city"]);
		   }
			 if(empty($_POST["number"]))
		    {
			 $err_number="Number Required";
			 $hasError=true;
		    }
		    elseif(!is_numeric($_POST["number"]))
		   {
			 $err_number="Numaric Value required";
			 $hasError=true;
		    }
		   else
		    {
			 $number=htmlspecialchars($_POST["number"]);
		    }
			if(!isset($_POST["role"]))
		    {
			$err_role="Role required";
			$hasError=true;
		    }
		    else
		    {
		     $role=htmlspecialchars($_POST["role"]);
		    }
			if(empty($_POST["about"]))
			{
			$err_about="Information Required";
			$hasError=true;
		    }
		    else
			{
		        $about=htmlspecialchars($_POST["about"]);
		     }
            insertCustomer($fname,$lname,$username,$gender,$email,$address,$number,$about); 
	}

    function insertCustomer($fname,$lname,$username,$gender,$email,$address,$number,$about)
    {
        $query = "INSERT INTO customer VALUES (NULL,'$fname','$lname','$username','$gender','$email','$address','$number','$about')" ;
        echo $query ;
        execute($query) ;
        header("Location: dash.php");
    }
  
	if(isset($_POST["update_customer"])){
		editCustomer($_POST["id"],$_POST["fname"],$_POST["lname"],$_POST["username"],$_POST["gender"],$_POST["email"],$_POST["address"],$_POST["number"],$_POST["about"]);
	}
	function editCustomer($id,$fname,$lname,$username,$gender,$email,$address,$number,$about){
		$query = "update customer set fname = '$fname', lname ='$lname', username ='$username', gender = '$gender', email ='$email', address ='$address', number = '$number' , about ='$about' where id = $id";
		echo $query ;
		execute($query);
		header("Location: dash.php");
	}

	if(isset($_POST["remove_customer"]))
	{
		deleteCustomer($_POST["id"]); 
	} 
    function deleteCustomer($id)
	{
		$query = "DELETE FROM customer WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: dash.php");
	}

    function getCustomers($id)
    {
        $query = "select * from customer where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
    function getAllcustomers()
    {
        $query = "select * from customer" ;
        $result = get($query) ;
        return $result ;
    }
	
	function checkUsernamee($username){
		$query = "select * from customer where username='$username'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
	
	function checkemaill($email){
		$query = "select * from customer where email='$email'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
    
?>