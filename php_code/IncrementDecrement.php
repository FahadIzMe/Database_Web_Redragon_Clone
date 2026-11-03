<?php include("Connection.php");

if (isset($_GET['currentChange'])) {
    $currentChange = $_GET['currentChange'];
    $currentRedirect = $_GET['currentRedirect'];
    $currentChar = $_GET['currentChar'];

    if ($currentChar == 2) {
        $_SESSION[$currentChange]++;
    } else if ($currentChar == 1 && $_SESSION[$currentChange] > 1) {
        $_SESSION[$currentChange]--;
    } else {
        $_SESSION[$currentChange] = 1;
    }
    header('location: '.$currentRedirect);
}
