<!-- ============================1================================= -->
<?php include("db_connection.php");
$updatecheck = false;
if (isset($_GET['edit'])) {
    $updatecheck = true;
    $updateid = $_GET['edit'];
    $updateResult = mysqli_query($conn, "SELECT * FROM Product_Catalogue WHERE Product_ID = '$updateid';");
    if ($updateResult) {
        $updaterow = mysqli_fetch_assoc($updateResult);
        $currentID = $updaterow['Product_ID'];
        $_SESSION['Product_ID1'] = $updaterow['Product_ID'];
        $currentName = $updaterow['Product_Name'];
        $currentCategory = $updaterow['Product_Category'];
        $currentPrice = $updaterow['Price'];
        $currentQuantity = $updaterow['Quantity'];
        $currentDiscount = $updaterow['Discount_Percent'];
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
        <!-- ===========================1================================== -->
        <h2>Product_Catalogue</h2>
            <form method="post" action="process1.php">
                <div class="input-group">
                    <label>Product ID</label><br>
                    <input type="text" name="product_id" value="<?php echo $currentID; ?>">
                </div>
                <div class="input-group">
                    <label>Product Name</label><br> <input type="text" name="product_name" value="<?php echo $currentName; ?>">
                </div>
                <div class="input-group">
                    <label>Product Category</label><br> <input type="text" name="product_cat" value="<?php echo  $currentCategory  ?>">
                </div>
                <div class="input-group">
                    <label>Price</label><br> <input type="text" name="product_price" value="<?php echo $currentPrice; ?>">
                </div>
                <div class="input-group">
                    <label>Quantity</label><br> <input type="text" name="product_quant" value="<?php echo $currentQuantity; ?>">
                </div>
                <div class="input-group">
                    <label>Discount Percent</label><br> <input type="text" name="product_discount" value="<?php echo  $currentDiscount; ?>">
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