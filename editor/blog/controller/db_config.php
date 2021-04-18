<?php
    $db_server = "localhost" ;
    $db_user = "root" ;
    $db_pass = "" ;
    $db_name = "petcare" ;


    function execute($query)
    {
        global $db_server,$db_user,$db_pass,$db_name ;
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name) ;
        mysqli_query($conn,$query);
    }

    function get($query)
    {
        global $db_server,$db_user,$db_pass,$db_name ;
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name) ;
        $result = mysqli_query($conn,$query);
        $data = [];
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $data[] = $row ; 
            }
        }
        return $data ;    
    }

?>