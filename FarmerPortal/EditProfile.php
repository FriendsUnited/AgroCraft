<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile</title>
</head>
<body>
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
    Phone :<input type="number" name="phonenumber" value="<?php echo $phone;?>" /> <br><br>
    Address :<input type="text" name="address" value="<?php echo $address;?>" />   <br><br>
    Account No. :<input type="number" name="bank" value="<?php echo $bank;?>" />   <br><br>
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
        
        $query = "update farmerregistration 
                  set farmer_phone = '$phone',
                  farmer_address = '$address', farmer_bank = '$bank' where farmer_id 
                  in (select farmer_id from farmerregistration 
                  where farmer_phone='$sessphonenumber')"; 
        $run = mysqli_query($con, $query);
        $_SESSION['phonenumber'] = $phone;
        echo "<script>window.open('FarmerProfile.php','_self')</script>";
    }
?>