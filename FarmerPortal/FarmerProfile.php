<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmer Profile</title>
</head>
<body>
<h1>PROFILE</h1>
<form action="" method = "post">
    <!-- <input type="text" name="name" placeholder = "Name" readonly>        <br>
    <input type="text" name="Phone" placeholder = "Phone" readonly>      <br>
    <input type="text" name="address" placeholder = "Address" readonly>  <br>
    <input type="text" name="pan" placeholder = "Pan Card Number" readonly> <br>
    <input type="text" name="bank" placeholder = "Account Number" readonly> <br> -->
<?php
    include("../Includes/db.php");
    $sql="select * from farmerregistration where farmer_phone = 9182736455 and farmer_password  = 'pass'";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['farmer_name'];
        echo $name,"<br>"; 
        $phone = $row['farmer_phone'];
        echo $phone,"<br>"; 
        $address = $row['farmer_address'];
        echo $address,"<br>"; 
        $pan = $row['farmer_pan'];
        echo $pan,"<br>"; 
        $bank= $row['farmer_bank'];
        echo $bank,"<br>";
    }

?>

    <input type = "button" name="change" value="Change Password">
    <input type = "button" name="edit" value= "Edit Profile">
</form>

</body>
</html>

<!-- <?php
    include("../Includes/db.php");
    $sql="select * from farmerregistration where farmer_phone = 9182736455 and farmer_password  = 'pass'";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['farmer_name'];
        echo $name;
    }



?> -->