<?php
require("includes\common.php");

$query1 = "SELECT id FROM users WHERE email='" .$_SESSION['email'] ."'";  
$result1 = mysqli_query($con, $query1)or die($mysqli_error($con));
$row1 = mysqli_fetch_array($result1);
$id= $row1['id'];
$query = "SELECT b.fname,b.totalamount,b.status,f.from_place,f.to_place,f.date,f.time FROM flights f,booking_history b WHERE f.fid=b.fid and user_id='".$id."'" ; 

 $result2 = mysqli_query($con, $query) or die($mysqli_error($con));   
 
 


 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Booking history</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
                 <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
</head>
<body>
    <?php
        include 'includes/header.php';
        function doNewColor(){
        $color= dechex(rand(0x000000,0xFFFFFF));
        return $color;
        }
        ?>
    <div class="container" style="margin-top: 10px">
         <div class="row">
             <div class="col-lg-12"><h2><strong>Booking history</strong></h2></div>
          </div>
        <?php while ($row1 = mysqli_fetch_array($result2)) { ?>
        <div class="row text-center" id="hi">
                <div class="col-md-12 col-sm-6 home-feature">
          <div class="thumbnail"style="background-color: <?php $newcolor= doNewColor(); echo "#".$newcolor;?>">
                        
          <div class="row">
              <div class="col-xs-2">Flight Name</div>
              <div class="col-xs-10"><?php echo $row1['fname']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">From</div>
              <div class="col-xs-10"><?php echo $row1['from_place']; ?></div>
          </div>
          
          <div class="row">
              <div class="col-xs-2">To</div>
              <div class="col-xs-10"><?php echo $row1['to_place']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">Date</div>
              <div class="col-xs-10"><?php echo $row1['date']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">Time</div>
              <div class="col-xs-10"><?php echo $row1['time']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2"> Total Price</div>
              <div class="col-xs-10"><?php echo $row1['totalamount']; ?></div>
          </div>
               <div class="row">
              <div class="col-xs-2">Status</div>
              <div class="col-xs-10"><?php echo $row1['status']; ?></div>
          </div>
        
          </div>
                </div>
        </div>
          <hr/>
        <?php } ?>
    </div>
    <?php
        include 'includes/footer.php';
        ?>     
</body>
</html>

