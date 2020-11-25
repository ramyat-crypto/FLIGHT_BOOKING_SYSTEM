<?php

require("includes/common.php");

$query = "SELECT id FROM users WHERE email='" .$_SESSION['email'] ."'";  
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$row = mysqli_fetch_array($result);
$id= $row['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];

$name1=$_POST['name1'];
$gender1=$_POST['gender1'];
$age1=$_POST['age1'];

$name2=$_POST['name2'];
$gender2=$_POST['gender2'];
$age2=$_POST['age2'];

$name3=$_POST['name3'];
$gender3=$_POST['gender3'];
$age3=$_POST['age3'];
$query1 = "INSERT INTO passenger_details(user_id,name,gender,age) values ('".$id."','".$name."','".$gender."','".$age."')";
$user_registration_submit1 = mysqli_query($con, $query1) or die(mysqli_error($con));
$query12 = "INSERT INTO passenger_details2(name,gender,age) values ('".$name."','".$gender."','".$age."')";
$user_registration_submit12 = mysqli_query($con, $query12) or die(mysqli_error($con));
if(!$name1==""){
$query2 = "INSERT INTO passenger_details(user_id,name,gender,age) values ('".$id."','".$name1."','".$gender1."','".$age1."')";
$user_registration_submit2= mysqli_query($con, $query2) or die(mysqli_error($con));
$query22 = "INSERT INTO passenger_details2(name,gender,age) values ('".$name1."','".$gender1."','".$age1."')";
$user_registration_submit22 = mysqli_query($con, $query22) or die(mysqli_error($con));
}
if(!$name2==""){
$query3 = "INSERT INTO passenger_details(user_id,name,gender,age) values ('".$id."','".$name2."','".$gender2."','".$age2."')";
$user_registration_submit3 = mysqli_query($con, $query3) or die(mysqli_error($con));
$query23 = "INSERT INTO passenger_details2(name,gender,age) values ('".$name2."','".$gender2."','".$age2."')";
$user_registration_submit23 = mysqli_query($con, $query23) or die(mysqli_error($con));
}
if(!$name3==""){
$query4 = "INSERT INTO passenger_details(user_id,name,gender,age) values ('".$id."','".$name3."','".$gender3."','".$age3."')";
$user_registration_submit4 = mysqli_query($con, $query4) or die(mysqli_error($con));
$query24 = "INSERT INTO passenger_details2(name,gender,age) values ('".$name."','".$gender."','".$age."')";
$user_registration_submit24 = mysqli_query($con, $query24) or die(mysqli_error($con));
}




 header('location: payments.php');
?>