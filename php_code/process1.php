<?php
include('db_connection.php');

$prod_id = "";
$prod_name = "";
$prod_cat = "";
$prod_price = "";
$prod_quant = "";
$prod_dis = "";
if (isset($_POST['save'])) {
    $prod_id = $_POST['product_id'];
    $prod_name = $_POST['product_name'];
    $prod_cat = $_POST['product_cat'];
    $prod_price = $_POST['product_price'];
    $prod_quant = $_POST['product_quan'];
    $prod_dis = $_POST['product_discount'];

    mysqli_query($conn, "INSERT INTO Product_Catalogue(Product_ID , 
    Product_Name , Product_Category , Price , Quantity , Discount_Percent ) 
    
    VALUES ('$prod_id', '$prod_name', '$prod_cat',' $prod_price','$prod_quant','$prod_dis');");

    header('location: first1.php');
}

if (isset($_GET['del'])) {
    $product_id2 = $_GET['del'];
    mysqli_query($conn, "DELETE FROM Product_Catalogue WHERE Product_ID='$product_id2';");
    header("location: View.php");
}

if (isset($_POST['update'])) {
    $prod_id = $_POST['product_id'];
    $prod_name = $_POST['product_name'];
    $prod_cat = $_POST['product_cat'];
    $prod_price = $_POST['product_price'];
    $prod_quant = $_POST['product_quan'];
    $prod_dis = $_POST['product_discount'];
    $Product_ID1 = $_SESSION['Product_ID1'];
    mysqli_query($conn, "UPDATE Product_Catalogue SET Product_ID = '$prod_id', Product_Name = '$prod_name', 
    Product_Category = '$prod_cat',Price ='$prod_price', Quantity='$prod_quant' ,
     Discount_Percent='$prod_dis' WHERE Product_ID= '$Product_ID1';");

    header('location: View.php');
}
