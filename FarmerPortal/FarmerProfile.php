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
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];
    $sql="select * from farmerregistration where farmer_phone = '$sessphonenumber' ";
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

    <input type = "submit" name="editProf" value= "Edit Profile">
</form>

</body>
</html>
