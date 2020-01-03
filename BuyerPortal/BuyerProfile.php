
<?php
    include("../Includes/db.php");
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];
    $sql="select * from buyerregistration where buyer_phone = '$sessphonenumber'";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['buyer_name'];
        // echo "Name :",$name,"<br>"; 
        $phone = $row['buyer_phone'];
        // echo "Phone :",$phone,"<br>"; 
        $address = $row['buyer_addr'];
        // echo "Address :",$address,"<br>"; 
        $pan = $row['buyer_pan'];
        // echo "Pan Number :",$pan,"<br>"; 
        $bank = $row['buyer_bank'];
        // echo "Account Number :",$bank,"<br>";
        $comp = $row['buyer_comp'];
        $license = $row['buyer_license'];
        $mail = $row['buyer_mail'];
        $user = $row['buyer_username'];
    }   
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buyer Profile</title>
    

    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer;
            /* font-size:20px; */
        }
        textarea{
            font-size:20px;
            border-radius:15px;
            text-align:center;
            border-color:green;
            background-color:transparent;
        }
        
        .box {
            color: rgb(6, 36, 7);
            width: 450px;
             line-height: 40px; 
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            /* border-width: 5px;
            border-radius: 16px; */
            border-color: green;
            /* font-size:20px; */
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
        .just{
          
            float:left;
            margin-left:1%;
            margin:20px;
            position:absolute;
            left:0;
            top:0px; 
            text-shadow: 1px 1px 1px black;
             
        }

       
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
<div class="just"><a  href="../BuyerHomepage.php"> <i  class="fa fa-home fa-3x"></i></a></div>
    <div class="box">
        <form action="BuyerEditProfile.php" method="post">
            <h1> BUYER'S  PROFILE</h1>
            <textarea rows="2" column="10" disabled> <?php echo $name?> </textarea><br>  
            <textarea rows="2" column="10" disabled> <?php echo $user?> </textarea><br>
            <textarea rows="3" column="56" disabled> <?php echo $phone?> </textarea><br>
            <textarea rows="2" column="10" disabled> <?php echo $address?> </textarea><br>
            <textarea rows="2" column="10"disabled> <?php echo $comp?> </textarea><br>
            <textarea rows="2" column="10" disabled> <?php echo $mail?> </textarea><br>
            <textarea rows="3" column="56" disabled> <?php echo $pan?> </textarea><br>
            <textarea rows="2" column="10" disabled> <?php echo $license?> </textarea><br>
            <textarea rows="2" column="10"disabled> <?php echo $bank?> </textarea><br>
               <!-- <label class="three">$address</label> <br> -->
               <!-- <label class="two">$pan</label> <br>
               <label class="two">$bank</label> <br>
                 -->
            
                <!-- <label class="two"><?php echo $name; ?></label><br>
               <label class="two"><?php echo $phone; ?></label> <br>
               <label class="three"><?php echo $address; ?></label> <br>
               <label class="two"><?php echo $pan; ?></label> <br>
               <label class="two"><?php echo $bank; ?></label> <br> -->
                
                
                
                <!-- <span style=" display:block;  margin-bottom: .75em; "></span> -->
                <input type = "submit" name="editProf" value= "Edit Profile">

        </form>
    </div>


</body>
</html>
