<!-- =============================2================================ -->


<?php include("db_connection.php");
$updatecheck = false;
if (isset($_GET['edit'])) {
    $updatecheck = true;
    $updateid = $_GET['edit'];
    $updateResult = mysqli_query($conn, "SELECT * FROM NewsLetter_OptIn WHERE EmailAddress = '$updateid';");
    if ($updateResult) {
        $updaterow = mysqli_fetch_assoc($updateResult);
        $currentemail = $updaterow['EmailAddress'];
        $_SESSION['EmailAddress2'] = $currentemail;
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="same.css">
    <title>Document</title>
</head>

<body>
    <header class="ch-head p-1">
        <img src="redragon.png" width="130px" height="90px" alt="redragon">
    </header>
    <hr style="color:#8b8989;">
    <main>
        <h1>ADMIN VIEW</h1>

        <!-- ===========================2=============================== -->
        <h2>NewsLetter Table</h2>

        <form method="post" action="process2.php">
            <div class="input-group">
                <label>Email Address</label><br> <input type="text" name="email_add" value="<?php echo $currentemail; ?>">
            </div>
            <div class="input-group">
                <button class="btn edit_btn" type="submit" name="update" value="update">Update</button>
            </div>

        </form>
    </main>
    <hr style="color:#8b8989; ">
    <br>
</body>

</html>