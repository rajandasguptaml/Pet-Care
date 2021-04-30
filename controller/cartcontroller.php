<?php
   require_once 'models/db_config.php' ;		
     $bname="";
	 $err_bname="";
     $cname="";
	 $err_cname="";
	 $content=""; 
	 $err_content="";
	 $hasError=false;
	 
	
	 
	 if(isset($_POST["addcart"])){
		
			if (empty($_POST["bname"])){
				$err_fname="Product name required";
				$hasError=true;
			}
			else{
				$bname=htmlspecialchars($_POST["bname"]);
			}
			If (empty($_POST["cname"])){
				$err_cname="Payment Method required";
				$hasError=true; 
			}
			else{
				$cname=htmlspecialchars($_POST["cname"]);
			}
            if (empty($_POST["content"])){
				$err_content="Address Required";
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
             
            insertCustomer($bname,$cname,$content); 
	}
	
    function insertCustomer($bname,$cname,$content)
    {
        $query = "INSERT INTO addcart VALUES (NULL,'$bname','$cname','$content')" ;
        echo $query ;
        execute($query) ;
        header("Location: dash.php");
    }
    
	if(isset($_POST["update_customer"])){
		editCustomer($_POST["id"],$_POST["bname"],$_POST["cname"],$_POST["content"]);
	}
	function editCustomer($id,$bname,$cname,$content){
		$query = "update addcart set bname = '$bname', cname ='$cname', content ='$content' where id = $id";
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
		$query = "DELETE FROM addcart WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: dash.php");
	}
	
    function getaddcart($id)
    {
        $query = "select * from addcart where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
    function getAlladdcart()
    {
        $query = "select * from addcart" ;
        $result = get($query) ;
        return $result ;
    }
	
	function checkUsernamee($bname){
		$query = "select * from addcart where bname='$bname'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
    
?>