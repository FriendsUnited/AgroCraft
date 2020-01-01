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
<form action="EditProfile.php" method = "post">

<?php
    include("../Includes/db.php");
    $sql="select * from farmerregistration where farmer_phone = 1234567890 and farmer_password  = 'qwerty'";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['farmer_name'];
        echo "Name :",$name,"<br>"; 
        $phone = $row['farmer_phone'];
        echo "Phone :",$phone,"<br>"; 
        $address = $row['farmer_address'];
        echo "Address :",$address,"<br>"; 
        $pan = $row['farmer_pan'];
        echo "Pan Number :",$pan,"<br>"; 
        $bank= $row['farmer_bank'];
        echo "Account Number :",$bank,"<br>";
    }

?>

    <input type = "submit" name="edit" value= "Edit Profile">
</form>

</body>
</html>
