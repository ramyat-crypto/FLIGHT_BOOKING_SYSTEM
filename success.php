<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$query1= "SELECT id FROM users WHERE email='" .$_SESSION['email'] ."'"; 
$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
 $row1 = mysqli_fetch_array($result1);
 $id= $row1['id'];
 $query2 = "SELECT count(serial_no) as count FROM passenger_details WHERE user_id='" .$id ."'";
$result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
 $row2 = mysqli_fetch_array($result2);
 $count=$row2['count'];
                                       
$query3 = "SELECT  fid FROM booking_details WHERE user_id='" .$id ."'";
$result3 = mysqli_query($con, $query3)or die($mysqli_error($con));
$row3 = mysqli_fetch_array($result3);
 $flight_id= $row3['fid'];
$query4 = "SELECT price ,name FROM flights WHERE fid='" .$flight_id."'";
$result4 = mysqli_query($con, $query4)or die($mysqli_error($con));
$row4 = mysqli_fetch_array($result4);
                                       
$cost= $row4['price'];
$fname=$row4['name'];
$total=$cost*$count;
$status="Confirmed";

//We will change the status of the items purchased by the user to 'Confirmed'
$query = "INSERT INTO booking_history(user_id,fid,fname,seats,totalamount,status) values ('".$id."','".$flight_id."','".$fname."','".$count."','".$total."','".$status."')";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | UDAAN AIRLINES</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
       <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body style="background-color: plum">
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Your booking is confirmed. Thank you for booking .</h3><hr>
                    <p align="center">Click <a href="booking_history.php">here</a> to view your booking history.</p>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>