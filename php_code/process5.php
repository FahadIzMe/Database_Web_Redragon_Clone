
<?php
include('db_connection.php');

$order_id = ""; #
$reg = "";
$fn = "";
$ln = "";
$comp = "";
$add = "";
$city = "";
$prov = "";
$num = "";



if (isset($_POST['save'])) {

    $order_id = $_POST['order_id'];
    $reg = $_POST['Region'];
    $fn = $_POST['first_name'];
    $ln = $_POST['last_name'];
    $comp = $_POST['company'];
    $add = $_POST['add'];
    $city = $_POST['city'];
    $prov = $_POST['prov_ince'];
    $num = $_POST['numb'];


    mysqli_query($conn, "INSERT INTO AltBilling(Order_ID ,Region,First_Name,
    Last_Name, Company, Address,City,Province,Phone_Number)
    
    VALUES ('$order_id','$reg','$fn','$ln','$comp','$add','$city'
    , '$prov','$num');");

    header('location: first5.php');
}

if (isset($_GET['del'])) {
    $em_id2 = $_GET['del'];
    mysqli_query($conn, "DELETE FROM AltBilling WHERE Order_ID='$em_id2';");
    header("location: View.php");
}

if (isset($_POST['update'])) {
    $order_id = $_POST['order_id'];
    $reg = $_POST['Region'];
    $fn = $_POST['first_name'];
    $ln = $_POST['last_name'];
    $comp = $_POST['company'];
    $add = $_POST['add'];
    $city = $_POST['city'];
    $prov = $_POST['prov_ince'];
    $num = $_POST['numb'];
    $order_id5 = $_SESSION['Order_ID5'];
    mysqli_query($conn, "UPDATE AltBilling SET Region = '$reg', First_Name = '$fn', Last_Name = '$ln', Company = '$comp', Address = '$add',City = '$city',Province = '$prov', Phone_Number = '$num' WHERE Order_ID = '$order_id5';");
    header('location: View.php');
}

?>






