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
            cursor: pointer;
            color: rgb(0, 61, 153);
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
            border-color: rgb(0, 172, 230);
        }

        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/BuyerLogin.jpeg);
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
            border-color: rgb(0, 172, 230);
            display: inline-block;
            border-radius: 16px;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: rgb(0, 191, 255);
            border-radius: 16px;
            border-color: rgb(0, 172, 230);
            width: 44%;
        }

        input[type="submit"]:hover {
            background-color: rgb(0, 153, 255);
            outline: none;
            color: rgb(255, 255, 255);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(0, 57, 230);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;

        }
    </style>
</head>

<body>
    <div class="box">
        <form action="BuyerForgotPassword.php" method="post">
            <h1>FORGOT PASSWORD</h1>

            <input type="number" name="phonenumber" placeholder="Phone Number" required><br>
            <input type="text" name="pan" placeholder="Pan Number" required><br>

            <input type="password" name="password" placeholder="Password" required><br>
            <input type="password" name="confirmpassword" placeholder="Confirm Password" required><br>
            <span style=" display:block;  margin-bottom: .75em; "></span>

            <input type="submit" name="register" value="Update Password">
        </form>
    </div>
</body>

</html>

<?php
include("../Includes/db.php");
if (isset($_POST['register'])) {
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    $query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_pan = '$pan'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '2345678910111211';
    $encryption_key = "DE";

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );

    if (strcmp($password, $confirmpassword) == 0) {
        if ($count_rows != 0) {
            $update_query = "update buyerregistration set buyer_password = '$encryption' 
                                    where buyer_phone = '$phonenumber' and buyer_pan = '$pan' ";

            $run_query = mysqli_query($con, $update_query);

            echo "<script>alert('Password Updated Successfully');</script>";
            echo "<script>window.open('BuyerLogin.php','_self')</script>";
        } else if ($count_rows == 0) {
            echo "<script>alert('Please Enter Valid Details');</script>";
        }
    } else {
        echo "<script>alert('Please Enter Valid Details');</script>";
    }
}

?>