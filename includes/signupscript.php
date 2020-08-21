<?php

$con = mysqli_connect("localhost", "root", "", "ecommerse") or die(mysqli_error($con));
session_start();
$email_id = $_POST['email_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$password=$_POST['password'];
$user_registration_query = "insert into user(email_id, first_name, last_name, phone,password) values ('$email_id', '$first_name', '$last_name', '$phone',$password)";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['email_id']=$email_id;
$_SESSION['id']=mysqli_insert_id($con);
?>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

