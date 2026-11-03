<?php
include('db_connection.php');

$order_id = "";#
$order_price = "";
$cont = "";
$reg = "";
$fn = "";
$ln = "";
$comp = "";
$add = "";
$city = "";
$prov = "";
$num = "";
$shipp= "";
$bill = "";
$stat = "";

if(isset($_POST['save'])){
    $order_id = $_POST['order_id'];
    $order_price  = $_POST['total_price'];
    $cont = $_POST['Contact'];
    $reg =$_POST['Region'];
    $fn =$_POST['first_name'];
    $ln =$_POST['last_name'];
    $comp =$_POST['company'];
    $add =$_POST['add'];
    $city =$_POST['city'];
    $prov =$_POST['prov_ince'];
    $num =$_POST['numb'];
    $shipp =$_POST['ship'];
    $bill =$_POST['bill'];
    $stat =$_POST['status'];


    mysqli_query($conn, "INSERT INTO Orders(Order_ID , Total_Price ,Contact,Region,First_Name,
    Last_Name, Company, Address,City,Province,Phone_Number,Shipping,Billing,Status)
    
    VALUES ('$order_id', '$order_price','$cont','$reg','$fn','$ln','$comp','$add','$city'
    , '$prov','$num','$shipp','$bill','$stat');");
    
    header('location: first3.php');
}

if(isset($_GET['del'])){
    $product_id3 = $_GET['del'];
    mysqli_query($conn,"DELETE FROM Orders WHERE Order_ID='$product_id3';");
    header("location: View.php");
}

if(isset($_POST['update'])){
    $order_id = $_POST['order_id'];
    $order_price  = $_POST['total_price'];
    $cont = $_POST['Contact'];
    $reg =$_POST['Region'];
    $fn =$_POST['first_name'];
    $ln =$_POST['last_name'];
    $comp =$_POST['company'];
    if($comp == NULL)
    {
        $comp = '';
    }
    $add =$_POST['add'];
    $city =$_POST['city'];
    $prov =$_POST['prov_ince'];
    $num =$_POST['numb'];
    $shipp =$_POST['ship'];
    $bill =$_POST['bill'];
    $stat =$_POST['status'];
    $order_id2 = $_SESSION['Order_ID3'];
     mysqli_query($conn, "UPDATE Orders SET Order_ID  = '$order_id',
      Total_Price = '$order_price',Contact='$cont', Region='$reg',First_Name='$fn'
      ,Last_Name='$ln',Company='$comp',Address='$add',City='$city',Billing='$bill'
      ,Phone_Number='$num',Shipping='$shipp',Billing='$bill', Status='$stat'
      WHERE Order_ID= '$order_id2';");
    
    header('location: View.php');
}


?>