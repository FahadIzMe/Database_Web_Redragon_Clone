
<?php
include('db_connection.php');

$Order_ID = "";
$Product_ID = "";
$Quantity = "";


if(isset($_POST['save'])){
    $Order_ID = $_POST['Order_ID'];
    $Product_ID = $_POST['Product_ID'];
    $Quantity = $_POST['Quantity'];

    mysqli_query($conn, "INSERT INTO Order_Items(Order_ID,Product_ID,Quantity) 
    
    VALUES ('$Order_ID', '$Product_ID', '$Quantity');");
    
    header('location: first4.php');
}

if(isset($_GET['del'])){
    $or_id2 = $_GET['del'];
    $or_id3 = $_GET['del2'];
    mysqli_query($conn,"DELETE FROM Order_Items WHERE Order_ID='$or_id2' AND Product_ID = '$or_id3';");
    header("location: View.php");
}

if(isset($_POST['update'])){
    $or_add = $_POST['currentID'];
    $or_add2 = $_POST['currentProd'];
    $or_add3 = $_POST['currentquan'];
    $Order_ID = $_SESSION['Order_ID4'];
    $Product_ID = $_SESSION['Product_ID4'];
    mysqli_query($conn, "UPDATE Order_Items SET Product_ID = '$or_add2', Quantity = '$or_add3' WHERE Order_ID = ' $Order_ID' AND Product_ID = '$Product_ID';");
    header('location: View.php');
}

?>






