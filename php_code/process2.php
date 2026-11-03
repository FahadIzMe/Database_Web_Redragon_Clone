<?php
include('db_connection.php');

$em_add= "";

if(isset($_POST['save'])){
    $em_add = $_POST['email_add'];


    mysqli_query($conn, "INSERT INTO NewsLetter_OptIn(EmailAddress ) 
    
    VALUES ($em_add');");
    
    header('location: first2.php');
}

if(isset($_GET['del'])){
    $em_id2 = $_GET['del'];
    mysqli_query($conn,"DELETE FROM NewsLetter_OptIn WHERE EmailAddress='$em_id2';");
    header("location: View.php");
}

if(isset($_POST['update'])){
    $em_add = $_POST['email_add'];
    $em_add2 = $_SESSION['EmailAddress2'];
    mysqli_query($conn, "UPDATE NewsLetter_OptIn SET EmailAddress = '$em_add' WHERE EmailAddress = '$em_add2';");
    header('location: View.php');
}

?>






