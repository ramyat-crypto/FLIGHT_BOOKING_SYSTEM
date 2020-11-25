<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require("includes/common.php");
if (isset($_GET['fid']) && is_numeric($_GET['fid'])){
$flight_id=$_GET['fid'];          
$query1= "SELECT id FROM users WHERE email='" .$_SESSION['email'] ."'";  
$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
$row1 = mysqli_fetch_array($result1);
$id= $row1['id'];
$query2 = "INSERT INTO booking_details(user_id,fid) values ('".$id."','".$flight_id."')";
$user_registration_submit1 = mysqli_query($con, $query2) or die(mysqli_error($con));
header('location:seatings.php');
}
?>