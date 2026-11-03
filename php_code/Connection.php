<?php

session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] += 1;
} else {
    $_SESSION['counter'] = 1;
}

$_SESSION["conn"] = mysqli_connect("localhost", "root", "", "redragon");

    if (!$_SESSION["conn"]) {
        die("Connection could not be made " . mysqli_connect_errno());
    }

?>