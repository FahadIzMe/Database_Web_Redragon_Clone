<?php include("db_connection.php");
$updatecheck = false;
if (isset($_GET['edit'])) {
    $updatecheck = true;
    $updateid = $_GET['edit'];
    $updateResult = mysqli_query($conn, "SELECT * FROM Orders WHERE Order_ID = '$updateid';");
    if ($updateResult) {
        $updaterow = mysqli_fetch_assoc($updateResult);
        $currentID = $updaterow['Order_ID'];
        $_SESSION['Order_ID3'] = $currentID;
        $currentPrice = $updaterow['Total_Price'];
        $currentContact = $updaterow['Contact'];
        $currentRegion = $updaterow['Region'];
        $currentFn = $updaterow['First_Name'];
        $currentLn = $updaterow['Last_Name'];
        $currentCompany = $updaterow['Company'];
        $currentAdd = $updaterow['Address'];
        $currentCity = $updaterow['City'];
        $currentProvince = $updaterow['Province'];
        $currentPhone_Numb = $updaterow['Phone_Number'];
        $currentShipping = $updaterow['Shipping'];
        $currentBilling = $updaterow['Billing'];
        $currentStatus  = $updaterow['Status'];
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
        <!-- ========================================= -->
        <h2>Orders</h2>
            <form method="post" action="process3.php">
                <div class="input-group">
                    <label>Order ID </label><br> <input type="text" name="order_id" value="<?php echo $currentID; ?>">
                </div>
                <div class="input-group">
                    <label>Total Price</label><br> <input type="text" name="total_price" value="<?php echo $currentPrice; ?>">
                </div>
                <div class="input-group">
                    <label>Contact</label><br> <input type="text" name="Contact" value="<?php echo   $currentContact;  ?>">
                </div>
                <div class="input-group">
                    <label>Region</label><br> <input type="text" name="Region" value="<?php echo   $currentRegion; ?>">
                </div>
                <div class="input-group">
                    <label>First Name </label><br> <input type="text" name="first_name" value="<?php echo   $currentFn; ?>">
                </div>
                <div class="input-group">
                    <label>Last Name</label><br> <input type="text" name="last_name" value="<?php echo    $currentLn; ?>">
                </div>
                <div class="input-group">
                    <label>Company</label><br> <input type="text" name="company" value="<?php echo $currentCompany; ?>">
                </div>
                <div class="input-group">
                    <label>Address</label><br> <input type="text" name="add" value="<?php echo   $currentAdd; ?>">
                </div>
                <div class="input-group">
                    <label>City</label><br> <input type="text" name="city" value="<?php echo $currentCity; ?>">
                </div>
                <div class="input-group">
                    <label>Province</label><br> <input type="text" name="prov_ince" value="<?php echo  $currentProvince; ?>">
                </div>

                <div class="input-group">
                    <label>Phone Number</label><br> <input type="text" name="numb" value="<?php echo $currentPhone_Numb; ?>">
                </div>
                <div class="input-group">
                    <label>Shipping</label><br> <input type="text" name="ship" value="<?php echo $currentShipping; ?>">
                </div>
                <div class="input-group">
                    <label>Billing </label><br> <input type="text" name="bill" value="<?php echo $currentBilling; ?>">
                </div>
                <div class="input-group">
                    <label>Status</label><br> <input type="text" name="status" value="<?php echo $currentStatus; ?>">
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