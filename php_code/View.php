<!-- -------------------1---------------- -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./same.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        thead,
        tr {
            border: 2px solid black;
        }
    </style>
</head>
<header class="ch-head p-1">
    <img src="redragon.png" width="130px" height="90px" alt="redragon">
</header>
<hr style="color:#8b8989;">
<main>

    <body class="view">
        <?php include("db_connection.php");
        $result = mysqli_query($conn, "SELECT * FROM Product_Catalogue;");
        ?>
        <h1>ADMIN VIEW</h1>
        <!-- ===========================1================================== -->
        <h2>Product_Catalogue</h2>
        <table>
            <thead>
                <th>Product ID</th>
                <th>Product Name </th>
                <th>Product Category</th>
                <th>Price</th>
                <th> Quantity</th>
                <th>Discount Percent </th>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['Product_ID']; ?></td>
                    <td><?php echo $row['Product_Name']; ?></td>
                    <td><?php echo $row['Product_Category']; ?></td>
                    <td><?php echo $row['Price']; ?></td>
                    <td><?php echo $row['Quantity']; ?></td>
                    <td><?php echo $row['Discount_Percent']; ?></td>
                    <td><a href="first1.php?edit=<?php echo $row['Product_ID']; ?>" class="edit_btn">EDIT</a></td>
                    <td><a href="process1.php?del=<?php echo $row['Product_ID']; ?>" class="del_btn">DELETE</a></td>
                </tr>
            <?php } ?>
        </table>

        <!-- //=============================2======================================== -->

        <?php
        $result2 = mysqli_query($conn, "SELECT * FROM NewsLetter_OptIn;");
        ?>
        <h2>NewsLetter Table</h2>
        <table>
            <thead>
                <th>Email Address</th>

            </thead>
            <?php while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                <tr>
                    <td><?php echo $row2['EmailAddress']; ?></td>

                    <td><a href="first2.php?edit=<?php echo $row2['EmailAddress']; ?>" class="edit_btn">EDIT</a></td>
                    <td><a href="process2.php?del=<?php echo $row2['EmailAddress']; ?>" class="del_btn">DELETE</a></td>
                </tr>
            <?php } ?>
        </table>

        <!-- //=============================3======================================== -->
        <?php
        $result3 = mysqli_query($conn, "SELECT * FROM Orders;");
        ?>

        <h2>Orders</h2>
        <table>
            <thead>
                <th>Order ID</th>
                <th>Total Price </th>
                <th>Contact</th>
                <th>Region</th>
                <th>First_Name </th>
                <th>Last_Name </th>
                <th>Company </th>
                <th>Address </th>
                <th>City </th>
                <th>Province</th>
                <th>Phone_Number</th>
                <th>Shipping</th>
                <th>Billing</th>
                <th>Status</th>
            </thead>

            <?php while ($row3 = mysqli_fetch_assoc($result3)) { ?>
                <tr>
                    <td><?php echo $row3['Order_ID']; ?></td>
                    <td><?php echo $row3['Total_Price']; ?></td>
                    <td><?php echo $row3['Contact']; ?></td>
                    <td><?php echo $row3['Region']; ?></td>
                    <td><?php echo $row3['First_Name']; ?></td>
                    <td><?php echo $row3['Last_Name']; ?></td>
                    <td><?php echo $row3['Company']; ?></td>
                    <td><?php echo $row3['Address']; ?></td>
                    <td><?php echo $row3['City']; ?></td>
                    <td><?php echo $row3['Province']; ?></td>
                    <td><?php echo $row3['Phone_Number']; ?></td>
                    <td><?php echo $row3['Shipping']; ?></td>
                    <td><?php echo $row3['Billing']; ?></td>
                    <td><?php echo $row3['Status']; ?></td>
                    <td><a href="first3.php?edit=<?php echo $row3['Order_ID']; ?>" class="edit_btn">EDIT</a></td>
                    <td><a href="process3.php?del=<?php echo $row3['Order_ID']; ?>" class="del_btn">DELETE</a></td>
                </tr>
            <?php } ?>
        </table>
        <!-- ===============================4========================== -->
        <?php
        $result4 = mysqli_query($conn, "SELECT * FROM order_items;");
        ?>
        <h2>Order_Items</h2>

        <table>
            <thead>
                <th>Order ID</th>
                <th>Product ID </th>
                <th>Quantity</th>
            </thead>

            <?php while ($row4 = mysqli_fetch_assoc($result4)) { ?>
                <tr>
                    <td><?php echo $row4['Order_ID']; ?></td>
                    <td><?php echo $row4['Product_ID']; ?></td>
                    <td><?php echo $row4['Quantity']; ?></td>

                    <td><a href="first4.php?edit=<?php echo $row4['Order_ID']; ?>&edit2=<?php echo $row4['Product_ID']; ?>" class="edit_btn">EDIT</a></td>
                    <td><a href="process4.php?del=<?php echo $row4['Order_ID']; ?>&del2=<?php echo $row4['Product_ID']; ?>" class="del_btn">DELETE</a></td>
                </tr>
            <?php } ?>
        </table>
        <!-- //================================5========================================= -->
        <?php
        $result5 = mysqli_query($conn, "SELECT * FROM altbilling;");
        ?>

        <h2>AltBilling</h2>
        <table>
            <thead>
                <th>Order ID</th>
                <th>Region</th>
                <th>First_Name </th>
                <th>Last_Name </th>
                <th>Company </th>
                <th>Address </th>
                <th>City </th>
                <th>Province</th>
                <th>Phone_Number</th>
            </thead>

            <?php while ($row5 = mysqli_fetch_assoc($result5)) { ?>
                <tr>
                    <td><?php echo $row5['Order_ID']; ?></td>
                    <td><?php echo $row5['Region']; ?></td>
                    <td><?php echo $row5['First_Name']; ?></td>
                    <td><?php echo $row5['Last_Name']; ?></td>
                    <td><?php echo $row5['Company']; ?></td>
                    <td><?php echo $row5['Address']; ?></td>
                    <td><?php echo $row5['City']; ?></td>
                    <td><?php echo $row5['Province']; ?></td>
                    <td><?php echo $row5['Phone_Number']; ?></td>
                    <td><a href="first5.php?edit=<?php echo $row5['Order_ID']; ?>" class="edit_btn">EDIT</a></td>
                    <td><a href="process5.php?del=<?php echo $row5['Order_ID']; ?>" class="del_btn">DELETE</a></td>
                </tr>
            <?php } ?>
        </table>
    </body>

</html>