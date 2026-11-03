<?php include("Connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Contact information
    $email = $_POST['email'];
    if(isset($_POST['news'])){
        $checkPrimary = mysqli_query($_SESSION["conn"],"SELECT * FROM newsletter_optin WHERE EmailAddress='$email';");
        if(!(mysqli_num_rows($checkPrimary) > 0)){
            mysqli_query($_SESSION["conn"], "INSERT INTO newsletter_optin VALUES('$email');");
        }
        
    }

    // Delivery details
    $country = $_POST['select'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company = isset($_POST['Company']) ? $_POST['Company'] : '';
    $address = $_POST['Address'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $phone = $_POST['phoneno'];
    $shipping_method = isset($_POST['Ship_meth']) ? $_POST['Ship_meth'] : '';


    // Billing address
    $billing_address_type = $_POST['address_type'];

    // Alternate Billing address
    $alt_country = $_POST['altselect'];
    $alt_first_name = $_POST['altfirst_name'];
    $alt_last_name = $_POST['altlast_name'];
    $alt_company = isset($_POST['altCompany']) ? $_POST['altCompany'] : '';
    $alt_address = $_POST['altAddress'];
    $alt_city = $_POST['altcity'];
    $alt_province = $_POST['altprovince'];
    $alt_phone = $_POST['altphoneno'];


    if ($billing_address_type == 'same') {

        $result = mysqli_query($_SESSION["conn"], "SELECT MAX(Order_ID) AS MaxOrderID FROM Orders;");

        $row = mysqli_fetch_assoc($result);
        $maxOrderID = $row['MaxOrderID'];

        // Check if there are no records (NULL) or fetch the maximum Order_ID
        if ($maxOrderID === null) {
            $maxOrderID = 0;
        }
        $maxOrderID++;
        $total = $_SESSION['PageTotal'];
        mysqli_query($_SESSION["conn"], "INSERT INTO orders VALUES($maxOrderID,$total,'$email','$country','$first_name','$last_name','$company','$address','$city','$province','$phone',185,'S','In Process')");

        $stringArray = $_SESSION['stringArray'];
        $intArray = $_SESSION['intArray'];
        $arrayLength = count($stringArray);

        // Access the elements using index in a for loop
        for ($i = 0; $i < $arrayLength; $i++) {

            $currentName = $stringArray[$i];
            $currentResult = mysqli_query($_SESSION["conn"],"SELECT Product_ID FROM product_catalogue WHERE Product_Name = '$currentName';");
            $currentrow = mysqli_fetch_assoc($currentResult);
            $currentID = $currentrow['Product_ID'];
            $currentQuantity = $intArray[$i];
            mysqli_query($_SESSION["conn"],"INSERT INTO order_items VALUES($maxOrderID,$currentID,$currentQuantity);");
        }

        
    } else {
        $result = mysqli_query($_SESSION["conn"], "SELECT MAX(Order_ID) AS MaxOrderID FROM Orders;");
        $row = mysqli_fetch_assoc($result);
        $maxOrderID = $row['MaxOrderID'];

        // Check if there are no records (NULL) or fetch the maximum Order_ID
        if ($maxOrderID === null) {
            $maxOrderID = 0;
        }
        $maxOrderID++;
        $total = $_SESSION['PageTotal'];
        mysqli_query($_SESSION["conn"], "INSERT INTO orders VALUES($maxOrderID,$total,'$email','$country','$first_name','$last_name','$company','$address','$city','$province','$phone',185,'A','In Process');");

        mysqli_query($_SESSION["conn"], "INSERT INTO altbilling VALUES($maxOrderID,'$alt_country','$alt_first_name','$alt_last_name','$alt_company','$alt_address','$alt_city','$alt_province','$alt_phone');");

        $stringArray = $_SESSION['stringArray'];
        $intArray = $_SESSION['intArray'];
        $arrayLength = count($stringArray);

        // Access the elements using index in a for loop
        for ($i = 0; $i < $arrayLength; $i++) {

            $currentName = $stringArray[$i];
            $currentResult = mysqli_query($_SESSION["conn"],"SELECT Product_ID FROM product_catalogue WHERE Product_Name = '$currentName';");
            $currentrow = mysqli_fetch_assoc($currentResult);
            $currentID = $currentrow['Product_ID'];
            $currentQuantity = $intArray[$i];
            mysqli_query($_SESSION["conn"],"INSERT INTO order_items VALUES($maxOrderID,$currentID,$currentQuantity);");
        }
    }
}

session_destroy();
header("location: index.php");
?>