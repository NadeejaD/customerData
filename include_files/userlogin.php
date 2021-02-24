<?php
include("../connection/connection.php");

session_start();
$username = $_POST['username'];
$userpassword = $_POST['password'];

if (!$con) {
	$msg = "Connection failed: " . mysqli_connect_error();
	header("Location:login.php?txt=$msg");
} else {
	$sql = "SELECT * FROM user WHERE user_name=\"$username\" and user_password=\"$userpassword\"";
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {

		header("Location:../user.php");
	} else {
		$msg =  "Incorrct username or password!";
		header("Location:login.php?msg=$msg");
		//$_SESSION["loginSuccess"] = 0;
	}
}
