<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require("includes\common.php");

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);
$email =$_POST['email'];
$email=mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password =  mysqli_real_escape_string($con,$password);
$password= md5($password);
$contact = $_POST['contact'];
$contact= mysqli_real_escape_string($con,$contact);
$city = $_POST['city'];
$city=mysqli_real_escape_string($con,$city);
$address = $_POST['address'];
$address=mysqli_real_escape_string($con,$adress);
   
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
//$regex_num="/^[789] [0-9] {9} $/";
    
$query = "SELECT * FROM users where email='$email'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$num=mysqli_num_rows($result); 
if($num!=0){
   $m="<span class='red'>email already exists</span>";
   header('location: signup.php?m1='. $m);
}elseif (!preg_match($regex_email,$email)) {
    $m="<span class='red'>Not a valid email</span>";
    header('location: signup.php?m1='. $m);
}
else {
    $query = "INSERT INTO users(name,email, password,contact,city,address) values ('".$name."','".$email."','".$password."','".$contact."','".$city."','".$address."')";
    $user_registration_submit = mysqli_query($con, $query) or die(mysqli_error($con));
    
    $id=mysqli_insert_id($con);
    $_SESSION['email']= $email;
    $_SESSION['id']= $id;
    header('location: flights.php');
 
}
?>