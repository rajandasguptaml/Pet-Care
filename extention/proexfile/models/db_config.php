<?php
  
  $db_server="localhost";
  $db_user="root";
  $db_pass="";
  $db_name="demo";
  
  
  function execute($query){
    global $db_server,$db_user,$db_pass,$db_name ;   
	$db_con=mysqli_connect($db_server,$db_user,$db_pass,$db_name);	 
	mysqli_query($db_con,$query);

  }
  function get_data($query){
      global $db_server,$db_user,$db_pass,$db_name ;  	  
	  $db_con=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
	  $result=mysqli_query($db_con,$query);
	  $data=[];
	  if(mysqli_num_rows($result)>0){
		  while($row=mysqli_fetch_assoc($result)){
			  $data[]=$row;
		  }
	  }
	 
	  return $data;
  }


?>