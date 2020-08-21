<?php

$con = mysqli_connect("localhost", "root", "", "ecommerse") or die(mysqli_error($con));
session_start();
$email_id=$_POST['email_id'];
$password = $_POST['password'];
$user_id = $_SESSION['id'];
$update_name_query = "UPDATE user SET password = '$password' WHERE id = '$user_id'";
$update_name_result = mysqli_query($con, $update_name_query) or die(mysqli_error($con));
echo " updated";
?>

