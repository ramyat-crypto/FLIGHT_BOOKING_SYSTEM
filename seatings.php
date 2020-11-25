<?php
require("includes/common.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FLIGHTS | UDAAN AIRLINES</title>
          <link rel="stylesheet" href="style.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

    <body style="background-color:#DF6589FF">
        
               
        <div class="container" >
            <form action="seatings_script.php" method="POST">
            
                <h1> PASSENGER DETAILS </h1><br><br>
            <table class="table table-striped table-bordered"style="background-color:#CBCE91FF">
                <tbody  >
                    <tr><th>SERIAL NUMBER </th> <th>NAME </th> <th>GENDER </th><th>AGE </th></tr>
                    <tr><td>1</td> <td><input type="text" name="name"></td> <td><select name="gender"><option value=""></option><option value="female">female</option><option value="male">male</option><option value="other">other</option></select></td> <td><input type="number" name="age"></td></tr>
                    <tr><td>2</td> <td><input type="text" name="name1"></td> <td><select name="gender1"><option value=""></option><option value="female">female</option><option value="male">male</option><option value="other">other</option></select></td> <td><input type="number" name="age1"></td></tr>
                    <tr><td>3</td> <td><input type="text" name="name2"></td> <td><select name="gender2"><option value=""></option><option value="female">female</option><option value="male">male</option><option value="other">other</option></select></td> <td><input type="number" name="age2"></td></tr>
                    <tr><td>4</td> <td><input type="text" name="name3"></td> <td><select name="gender3"><option value=""></option><option value="female">female</option><option value="male">male</option><option value="other">other</option></select></td> <td><input type="number" name="age3"></td></tr>
                    </tbody>
            </table>
                <button class="btn  btn-primary" type="submit" value="submit">Proceed to Payment</button>
            </form>
        </div>
            
    </body>

