<?php

require_once '../models/db_config.php';

$newCategory = "";
$err_newCategory = "";
$err_newProduct = "";
$newProduct = "";
$err_price = "";
$price = "";
$discount = "";
$err_discount = "";
$haserror = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {

    //category validation
    if (empty($_POST["newCategory"])) {

        $err_newCategory = "*** Enter Category";
        $haserror = true;

    } else if (is_numeric($_POST["newCategory"])) {

        $err_newCategory = "*** insert valid category name";
        $haserror = true;
    } else {
        $newCategory = $_POST["newCategory"];
    }

    //Product validation
    if (empty($_POST["newProduct"])) {

        $err_newProduct = "*** Enter product name";
        $haserror = true;

    } else if (is_numeric($_POST["newProduct"])) {

        $err_newProduct = "*** insert valid product name";
        $haserror = true;
    } else {
        $newProduct = $_POST["newProduct"];
    }

    //Price validation
    if (empty($_POST["price"])) {

        $err_price = "*** Enter price";
        $haserror = true;

    } else if (!empty($_POST["price"])) {
        if (is_numeric($_POST["price"]) == false) {
            $err_price = "*** Enter valid price";
            $haserror = true;
        }
        else {
            $price = $_POST["price"];
        }
    } 
    

    //discount validation

    if ($_POST["discount"] == "") {
        $err_discount = "*** Select discount";
        $haserror = true;
    } 
    else {
        $discount = $_POST["discount"];
    }

    if($haserror==false){

        insertProduct($newCategory, $newProduct, $price, $discount);
        
    }

   
    
}


function insertProduct($newCategory, $newProduct, $price, $discount){
    $query = "insert into product values(NULL, '$newCategory', '$newProduct', $price, $discount)";
    execute ($query);

}


function getAllProduct(){
    $query = "select * from product";
    $result = get_data($query);
    return $result;
}




?>