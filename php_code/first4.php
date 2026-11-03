<?php include("db_connection.php");

if (isset($_GET['edit'])) {
    $updateid = $_GET['edit'];
    $updateid2 = $_GET['edit2'];
    $updateResult = mysqli_query($conn, "SELECT * FROM Order_Items WHERE Order_ID = '$updateid' AND Product_ID = '$updateid2';");
    if (mysqli_num_rows($updateResult) > 0) {
        $updaterow = mysqli_fetch_assoc($updateResult);
        $currentID = $updaterow['Order_ID'];
        $_SESSION['Order_ID4'] = $updaterow['Order_ID'];
        $currentProd = $updaterow['Product_ID'];
        $_SESSION['Product_ID4'] = $updaterow['Product_ID'];
        $currentquan = $updaterow['Quantity'];
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
        <!-- =============================================== -->

        <h2>Order_Items</h2>

        <form method="post" action="process4.php">
            <div class="input-group">
                <label>Order ID</label><br>
                <input type="text" id="currentID" name="currentID" value="<?php echo $currentID; ?>">
            </div>
            <div class="input-group">
                <label>Product ID</label><br>
                <input type="text" id="currentProd" name="currentProd" value="<?php echo $currentProd; ?>">
            </div>
            <div class="input-group">
                <label>Quantity</label><br>
                <input type="text" id="currentquan" name="currentquan" value="<?php echo $currentquan; ?>">
            </div>
            <div class="input-group">
                <button class="btn" type="submit" name="update" value="update">Update</button>
            </div>
        </form>
    </main>
    <hr style="color:#8b8989; ">
    <br>
</body>

</html>