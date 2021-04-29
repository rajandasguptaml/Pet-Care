<?php
   require_once 'db_config.php' ;		
     $bname="";
	 $err_bname="";

	 $content=""; 
	 $err_content="";
	 $hasError=false;
	 
	
	 
	 if(isset($_POST["review"])){
		
			if (empty($_POST["bname"])){
				$err_fname="Review Topic required";
				$hasError=true;
			}
			else{
				$bname=htmlspecialchars($_POST["bname"]);
			}
			
            if (empty($_POST["content"])){
				$err_content="Review Content Required";
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
             
            insertCustomer($bname,$content); 
	}

    function insertCustomer($bname,$content)
    {
        $query = "INSERT INTO review VALUES (NULL,'$bname','$content')" ;
        echo $query ;
        execute($query) ;
        header("Location: dash.php");
    }
   
	if(isset($_POST["update_customer"])){
		editCustomer($_POST["id"],$_POST["bname"],$_POST["content"]);
	}
	function editCustomer($id,$bname,$content){
		$query = "update review set bname = '$bname', content ='$content' where id = $id";
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
		$query = "DELETE FROM review WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: dash.php");
	}

    function getreview($id)
    {
        $query = "select * from review where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
    function getAllreview()
    {
        $query = "select * from review" ;
        $result = get($query) ;
        return $result ;
    }
	
	function checkUsernamee($bname){
		$query = "select * from review where bname='$bname'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
    
?>