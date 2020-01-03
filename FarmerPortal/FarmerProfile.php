<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmer Profile</title>
    

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }
        
        .box {
            color: rgb(6, 36, 7);
            width: 450px;
             line-height: 80px; 
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            /* border-width: 5px;
            border-radius: 16px; */
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
            /* border-radius: 16px; */
        }
        
        input[type="submit"] {
            cursor: pointer;
            font-size: 22px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 64%;
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
        .one{
            height:100px;
            border-radius:13px;
            
        }
        .two{
            width:100px;
            font-size:34px;
            background:transparent;
            border:3px;
            border-color:green;
            border-style:solid;
            border-width:2px;
        
            
        }
        .three{
            width:100px;
            font-size:54px;
            background:transparent;
            border:3px;
            border-color:green;
            border-style:solid;
            border-width:2px;
            height:60px;

        }
        
       
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div class="box">
        <form action="FarmerForgotPassword.php" method="post">
            <h1> FARMER'S  PROFILE</h1>
            
                <label class="two">$name</label><br>

               <label class="two">$phone</label> <br>
               <label class="three">$address</label> <br>
               <label class="two">$pan</label> <br>
               <label class="two">$bank</label> <br>
                
                
                
                <!-- <span style=" display:block;  margin-bottom: .75em; "></span> -->
                <input type = "submit" name="editProf" value= "Edit Profile">

                
            
        </form>
    </div>




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

    
</form>

</body>
</html>
