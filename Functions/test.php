<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
</head>
<body>
     <?php
               session_start();
                    include("../Includes/db.php");
                    if(!isset($_SESSION['phonenumber'])) {
                    echo "<h1>Not Login</h1>";
                    }
                    else {
                         $phonenumber = $_SESSION['phonenumber'];
                         echo $phonenumber;
                         $query = "select * from buyerregistration where buyer_phone = '$phonenumber'";
                         $run_query = mysqli_query($con,$query);
                         while($row = mysqli_fetch_array($run_query)){
                             echo $row['buyer_name'];
                              
                         }
                         // echo $name;
                         // echo "<li id='newlabel'><label id='login'>Hello,</label></li>";
                         // echo "<li id='newlabel'><label id='login'>" . $nametest . "</label></li>";
               }
     ?>
</body>
</html>