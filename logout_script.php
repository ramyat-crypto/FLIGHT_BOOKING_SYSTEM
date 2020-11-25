<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "airline")or die($mysqli_error($con));
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
$query= "DELETE FROM booking_details ";

$result = mysqli_query($con, $query)or die($mysqli_error($con));
$query1= "DELETE FROM passenger_details";
$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
session_destroy();
header('location: index.php');


?>