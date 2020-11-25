<?php
require("includes\common.php");

$from = $_POST['from'];
$from = mysqli_real_escape_string($con, $from);
$to =$_POST['to'];
$to=mysqli_real_escape_string($con, $to);
$date = $_POST['Date'];
$date=  mysqli_real_escape_string($con,$date);

    
$query = "SELECT * FROM flights WHERE date='" . $date . "' AND from_place='" . $from. "' AND to_place='" .$to. "'";

$result = mysqli_query($con, $query) or die($mysqli_error($con));
 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>flights</title>
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
     
    <div class="container" >
         <div class="row">
              <div class="col-lg-12"><h2>FLIGHTS</h2></div>
         </div><br><br>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
        <div class="row text-center" id="hi">
                <div class="col-md-12 col-sm-6 home-feature">
                    <div class="thumbnail" style="background-color: <?php $newcolor= doNewColor(); echo "#".$newcolor;?>">
                        
          <div class="row">
              <div class="col-xs-2">ID</div>
              <div class="col-xs-10"><?php echo $row['fid']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">Name</div>
              <div class="col-xs-10"><?php echo $row['name']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">From</div>
              <div class="col-xs-10"><?php echo $row['from_place']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">To</div>
              <div class="col-xs-10"><?php echo $row['to_place']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">Time</div>
              <div class="col-xs-10"><?php echo $row['time']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">Price</div>
              <div class="col-xs-10"><?php echo $row['price']; ?></div>
          </div>
         <div class="row">
             <div class="col-xs-2"></div>
             <div class="col-xs-10"> <a href="booknow.php?fid=<?php echo $row['fid']; ?>" class="btn  btn-primary">Book Now</a> </div>
              
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
