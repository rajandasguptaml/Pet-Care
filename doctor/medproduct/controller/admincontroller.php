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
	 
	
	 
	 if(isset($_POST["productpp"])){
		
			if (empty($_POST["bname"])){
				$err_bname="Product Intro required";
				$hasError=true;
			}
			else{
				$bname=htmlspecialchars($_POST["bname"]);
			}
			If (empty($_POST["cname"])){
				$err_cname="Product Catagory required";
				$hasError=true; 
			}
			else{
				$cname=htmlspecialchars($_POST["cname"]);
			}
			if (empty($_POST["pname"])){
				$err_pname="Product price required";
				$hasError=true;
			}
			else{
				$pname=htmlspecialchars($_POST["pname"]);
			}
            if (empty($_POST["content"])){
				$err_content="Content Required";
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

    function insertCustomer($bname,$cname,$pname,$content)
    {
        $query = "INSERT INTO productpp VALUES (NULL,'$bname','$cname','$pname','$content')" ;
        echo $query ;
        execute($query) ;
        header("Location: dash.php");
    }

	if(isset($_POST["update_customer"])){
		editCustomer($_POST["id"],$_POST["bname"],$_POST["cname"],$_POST["pname"],$_POST["content"]);
	}
	function editCustomer($id,$bname,$cname,$pname,$content){
		$query = "update productpp set bname = '$bname', cname ='$cname', pname ='$pname', content ='$content' where id = $id";
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
		$query = "DELETE FROM productpp WHERE id=$id;";
		echo $query;
		execute($query);
		header("Location: dash.php");
	}

    function getproductpp($id)
    {
        $query = "select * from productpp where id='$id'" ;
        $result = get($query) ;
        if(count($result)){
            return $result[0] ;
        }
        return false ;
    }
    function getAllproductpp()
    {
        $query = "select * from productpp" ;
        $result = get($query) ;
        return $result ;
    }
	
	function checkUsernamee($bname){
		$query = "select * from productpp where bname='$bname'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}
    
?>