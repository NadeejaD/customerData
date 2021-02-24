<?php

include("../connection/connection.php");

$id = $_GET['cust_id']; // get id through query string

$del = mysqli_query($con, "delete from customers where customer_id = '$id'"); // delete query

if ($del) {
    mysqli_close($con); // Close connection
    header("location:../user.php"); // redirects to all records page
    exit;
} else {
    echo "Error deleting record"; // display error message if not delete
}
