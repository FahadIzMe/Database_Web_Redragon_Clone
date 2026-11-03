<?php include("db_connection.php");

if(isset($_POST['user1']) && isset($_POST['password1'])){
    $checkusername = $_POST['user1'];
    $checkpassword = $_POST['password1'];
    $result = mysqli_query($conn,"SELECT * FROM admin WHERE username='$checkusername' AND _password='$checkpassword';");
    if(mysqli_num_rows($result) > 0)
    {
        header("location: View.php");
    }
    else{
        header("location: ErrorPage.php");
    }
}



?>