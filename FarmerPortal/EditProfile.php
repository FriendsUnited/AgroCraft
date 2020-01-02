<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
    <style>
        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }
        
        .box {
            color: rgb(6, 36, 7);
            width: 350px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            border-color: green;
        }
        
        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/forgotpassword.jpg);
            border: chartreuse;
        }
        
        form {
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);
        }
        
        input {
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            border-radius: 16px;
        }
        
        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
        }
        
        input[type="submit"]:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;
        }
   
           
            
            
            .in-icons {
                text-align: center;
            }
            
            .in-icons i {
                position: absolute;
                left: 600px;
                top: 175px;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>

    <body>
        <div class="box">
            <form action="FarmerForgotPassword.php" method="post">
                <h1>PROFILE</h1>
                <div class="in-icons">
                    <input type="number" name="phonenumber" placeholder="Phone Number"> <i class="fa fa-phone fa-2x" aria-hidden="true"></i> <br>
                    <input type="text" name="pan" placeholder="Pan Number"><br>

                    <input type="password" name="password" placeholder="Password" required><br>
                    <input type="password" name="confirmpassword" placeholder="Confirm Password" required><br>
                    <span style=" display:block;  margin-bottom: .75em; "></span>

                    <input type="submit" name="register" value="Update Password">
                </div>
            </form>
        </div>
    

    
</head>

<?php

    include("../Includes/db.php");
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];
    $sql="select * from farmerregistration where farmer_phone = $sessphonenumber";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['farmer_name'];
        echo "Name :",$name,"<br><br>"; 
        $pan = $row['farmer_pan'];
        echo "Pan Number :",$pan,"<br><br>"; 
        $phone = $row['farmer_phone'];
        $address = $row['farmer_address'];
        $bank= $row['farmer_bank']; 
    }
?>

<form action="EditProfile.php" method="post">  
    Phone :<input type="number" name="phonenumber" value="<?php  $phone=$_POST['phonenumber'];?>" /> <br><br>
    Address :<input type="text" name="address" value="<?php $address=$_POST['address'];?>" />   <br><br>
    Account No. :<input type="number" name="bank" value="<?php $bank=$_POST['bank'];?>" />   <br><br>
    <input type = "submit" name = "confirm" value = "Confirm">                  
    </form>

    <a href="ChangePassword.php"><button>Change Password</button></a>


</body>
</html>

<?php

    include("../Includes/db.php");

    if (isset($_POST['confirm']))
    {
        $phone = $_POST['phonenumber'];
        $address = $_POST['address'];
        $bank = $_POST['bank'];


        
        $query = "update farmerregistration set farmer_phone = '$phone', farmer_address = '$address', farmer_bank = '$bank' where farmer_id in (select farmer_id from farmerregistraion where farmer_phone='$sessphonenumber')"; 
        $run = mysqli_query($con, $query);
    }


?>