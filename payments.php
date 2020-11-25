<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>payment</title>
          <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

    <body>
        <?php
        include 'includes/header.php';
        
        ?>
        
 <div class="row text-center" id="cards">
                <div class="col-md-4 col-sm-6 col-md-offset-4 home-feature">
                    <h2><strong>MAKE PAYMENT</strong></h2>
                    <div class="thumbnail">
                        
                        <img src="img/cards.jpg" alt="">
                        
                    </div>
                </div>
 </div>
        <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                       
                        <form  action="payments_script.php" method="POST">
                            <div class="form-group">
                             Cardno:   <input class="form-control" type="number" placeholder="cardno" name="cardno"  required = "true" >
                            </div>
                            <div class="form-group">
                               Name on the  card: <input type="text" class="form-control"  placeholder="Name on card" name="cardname" required = "true">
                            </div>
                            <div class="form-group">
                           Card type:     <input type="text" class="form-control" placeholder="cardtype"  name="cardtype" required = "true">
                            </div>
                            <div class="form-group">
                              Expiry Month:  <select name="expiry_month"><option value="Jan">Jan</option><option value="Feb">Feb</option><option value="Mar">Mar</option><option value="Apr">Apr</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="Aug">Aug</option><option value="Sep">Sep</option><option value="Oct">Oct</option><option value="Nov">Nov</option><option value="Dec">Dec</option></select>
                               Expiry Year:  <select name="expiry_year"><option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                     <option value="2021">2021</option>
                                      <option value="2022">2022</option>
                                       <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                </select>
                            </div>
                            <div class="form-group">
                               CVV No: <input  type="number" class="form-control"  placeholder="CVV NO" name="cvv" required = "true">
                            </div>
                            <div class="form-group">
                              Total amount:  <input  type="float" class="form-control" placeholder="<?php
                                                        
                                                
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
                                        $query4 = "SELECT price  FROM flights WHERE fid='" .$flight_id."'";
                                        $result4 = mysqli_query($con, $query4)or die($mysqli_error($con));
                                         $row4 = mysqli_fetch_array($result4);
                                       
                                        $cost= $row4['price'];
                                        $total=$cost*$count;
                                        echo "$total";
                                        ?>" value="<?php
                                                        
                                                
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
                                        $query4 = "SELECT price  FROM flights WHERE fid='" .$flight_id."'";
                                        $result4 = mysqli_query($con, $query4)or die($mysqli_error($con));
                                         $row4 = mysqli_fetch_array($result4);
                                       
                                        $cost= $row4['price'];
                                        $total=$cost*$count;
                                        echo "$total";
                                        ?>" name="total_amt" required = "true">
                            </div>
                            <a href="success.php" type="button" name="submit" class="btn btn-primary">Confirm Booking</a>
                        </form>
                    </div>
                </div>
 </body>