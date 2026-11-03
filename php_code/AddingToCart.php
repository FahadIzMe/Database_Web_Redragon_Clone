<?php include("Connection.php");

if(isset($_GET['request1'])){
    $_temp = $_GET['request1'];
    if(!isset($_SESSION['Final'.$_temp])){
        $_SESSION['Final'.$_temp] = $_SESSION[$_temp];
    }
    else{
        $_SESSION['Final'.$_temp] += $_SESSION[$_temp];
    }
    $_SESSION[$_temp] = 1;
}

header('location: '.$_temp.'.php');


?>