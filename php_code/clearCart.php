<?php include("Connection.php");

session_destroy();

header("location: cart.php");
?>