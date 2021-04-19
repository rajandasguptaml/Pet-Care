<?php
   require_once 'db_config.php' ;		
     $bname="";
	 $err_bname="";
     $cname="";
	 $err_cname="";
	 $pname="";
	 $err_pname="";
	 $content=""; 
	 $err_content="";
	 $hasError=false;
	 
	
	 
	 if(isset($_POST["appoinment"])){
		
			if (empty($_POST["bname"])){
				$err_bname="owner details required";
				$hasError=true;
			}
			else{
				$bname=htmlspecialchars($_POST["bname"]);
			}
			If (empty($_POST["cname"])){
				$err_cname="pet health Catagory required";
				$hasError=true; 
			}
			else{
				$cname=htmlspecialchars($_POST["cname"]);
			}
			if (empty($_POST["pname"])){
				$err_pname="time slot required";
				$hasError=true;
			}
			else{
				$pname=htmlspecialchars($_POST["pname"]);
			}
            if (empty($_POST["content"])){
				$err_content="appoinment_info Required";
				$hasError=true;
			}
			elseif (strlen($_POST["content"])<6){
				$err_content=" ";
				$hasError=true;
			}
            elseif (strpos($_POST["content"]," ")) {
				$err_content="";
				$hasError=true;
			}
			else
			{
				$content=htmlspecialchars($_POST["content"]);
				
			}
             
            insertCustomer($bname,$cname,$pname,$content); 
	}
	//Insert
    function insertCustomer($bname,$cname,$pname,$content)
    {
        $query = "INSERT INTO appoinment VALUES (NULL,'$bname','$cname','$pname','$content')" ;
        echo $query ;
        execute($query) ;
        header("Location: dash.php");
    }
    //Update  
	if(isset($_POST["update_customer"])){
		editCustomer($_POST["id"],$_POST["bname"],$_POST["cname"],$_POST["pname"],$_POST["content"]);
	}
	function editCustomer($id,$bname,$cname,$pname,$content){
		$query = "update appoinment set bname = '$bname', cname ='$cname', pname ='$pname', content ='$content' where id = $id";
		echo $query ;
		execute($query);
		header("Location: dash.php");
	}
    //Delete
	if(isset($_POST["remove_customer"]))
	{
		deleteCustomer($_POST["id"]); 
	} 
    function deleteCustomer($id)
	{
		$query = "DELETE FROM appoinment WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: dash.php");
	}
	//View
    function getappoinment($id)
    {
        $query = "select * from appoinment where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
    function getAllappoinment()
    {
        $query = "select * from appoinment" ;
        $result = get($query) ;
        return $result ;
    }
    
?>