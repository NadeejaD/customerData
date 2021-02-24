<?php

include("../connection/connection.php");

if (isset($_POST['submit'])) {
    $customer_name = $_POST['customername'];
    $customer_phone = $_POST['customermobile'];
    $customer_email = $_POST['customeremail'];
    $customer_companyname = $_POST['customercompanyname'];
    $customer_image = $_FILES['customerimage']['name'];
    $target = "../images/" . basename($customer_image);


    if (!$con) {
        $msg = "connection failed" . mysqli_connect_error();
    } else {
        $sql = "INSERT INTO `customers` (`customer_name`,`customer_phone`,`customer_email`,`customer_companyname`,`customer_image`) VALUES ('" . $customer_name . "','" . $customer_phone . "','" . $customer_email . "','" . $customer_companyname . "','" . $customer_image . "')";
        $result = mysqli_query($con, $sql);
        if (move_uploaded_file($_FILES['customerimage']['tmp_name'], $target)) {
            $msg = "";
        } else {
            $msg = "Failed to upload image";
        }
        $msg = "User has successfully registered";
    }
    header("Location:../index.php?txt=$msg");
    //echo $sql;
}
