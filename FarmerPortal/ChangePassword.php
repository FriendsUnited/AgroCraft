<?php

    include("../Includes/db.php");
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];
    $sql="select * from farmerregistration where farmer_phone = $sessphonenumber";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $password = $row['farmer_password'];    
        echo $password;
        $conf_password = $row['farmer_conf_pswd'];
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
</head>
<body>
    <h1>CHANGE PASSWORD   </h1>
    <form action = "" method = "post">
        <input type = "password" name = "currentpassword" placeholder = "Current Password"/>  <br>
        <input type = "password" name = "newpassword" placeholder = "New Password"/>  <br>
        <input type = "password" name = "confirmpassword" placeholder = "Confirm New Password"/> <br>
        <input type = "submit" name = "confirm" value = "Confirm"/>

    </form>    
    <?php
    if (isset($_POST['confirm']))
    {
        $currentpassword = $_POST['currentpassword'];
        $newpassword = $_POST['newpassword'];
        $confirmpassword = $_POST['confirmpassword'];
        echo $newpassword, "<br>";
        echo $confirmpassword, "<br>";
        echo $currentpassword, "<br>";
    
        if(strcmp($password,$currentpassword) == 0 and strcmp($newpassword,$confirmpassword) == 0)
        {
            $sql = "update farmerregistration 
            set farmer_password='$newpassword' and farmer_conf_pswd='$confirmpassword'
            where farmer_phone='$sessphonenumber'";
            $run = mysqli_query($con, $sql);
            echo $sql;

        }
    }
    ?> 
</body>
</html>