<?php

if (isset($_POST['submit'])) {
    $customer_name = $_POST['customername'];
    $customer_phone = $_POST['customermobile'];
    $customer_email = $_POST['customeremail'];
    $customer_companyname = $_POST['customercompanyname'];
    $customer_image = $_FILES['customerimage']['name'];
    $target = "../images/" . basename($customer_image);
    $customer_id = $_POST['customerid'];

    include("../connection/connection.php");


    if (!$con) {
        $msg = "Connection failed: " . mysqli_connect_error();
    } else {
        $sql = "UPDATE `customers` SET  `customer_name` ='" . $customer_name . "',`customer_phone` ='" . $customer_phone . "',`customer_email`='" . $customer_email . "',`customer_companyname`='" . $customer_companyname . "', `customer_image` ='" . $customer_image . "'WHERE customer_id = $customer_id";
        $result = mysqli_query($con, $sql);
        if (move_uploaded_file($_FILES['customerimage']['tmp_name'], $target)) {
            $msg = "";
        } else {
            $msg = "Failed to upload image";
        }
        $msg = "User has successfully Registerd !!";
    }
    header("Location:../user.php?txt=$msg");
}
