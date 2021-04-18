<?php

require_once '../models/db_config.php';

$err_newCategory = "";
$newCategory = "";
$err_newProduct = "";
$newProduct = "";
$err_price = "";
$price = "";
$err_discount = "";
$discount = "";
$haserror1 = false;
$haserror2 = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST["update"])) {

        // Category Validation
        if (empty($_POST["newCategory"])) {

            $err_newCategory = "*** Select Category";

        } else if (is_numeric($_POST["newCategory"])) {

            $err_newCategory = "*** insert valid category name";
            $haserror1 = true;
        } else {
            $newCategory = $_POST["newCategory"];
        }

        // Product Validation
        if (empty($_POST["newProduct"])) {

            $err_newProduct = "*** Enter product name";
            $haserror1 = true;

        } else if (is_numeric($_POST["newProduct"])) {

            $err_newProduct = "*** insert valid product name";
            $haserror1 = true;
        } else {
            $newProduct = $_POST["newProduct"];
        }

        // Discount Validation
        if ($_POST["discount"] == "") {
            $err_discount = "*** Select discount";
            $haserror1 = true;
        } else {
            $discount = $_POST["discount"];
        }

        //Price validation
        if (empty($_POST["price"])) {

            $err_price = "*** Enter price";
            $haserror1 = true;

        } else if (!empty($_POST["price"])) {
            if (is_numeric($_POST["price"]) == false) {
                $err_price = "*** Enter valid price";
                $haserror1 = true;
            } else {
                $price = $_POST["price"];
            }
        }

        if($haserror1==false){

            updateProduct($_GET["id"], $newCategory, $newProduct,$price, $discount);
            header("Location: ../manager/viewAllProduct.php");
        }

    }

    if (isset($_POST["delete"])) {
        deleteProduct($_GET["id"]);
        header("Location: ../manager/viewAllProduct.php");

    }

}

function updateProduct($id, $newCategory, $newProduct,$price, $discount){
    $query = "update product set category='$newCategory', product= '$newProduct', price='$price', discount='$discount' where id=$id";
    execute($query);
}

function deleteProduct($id){
    $query = "DELETE FROM product WHERE id=$id";
    execute($query);
    
}