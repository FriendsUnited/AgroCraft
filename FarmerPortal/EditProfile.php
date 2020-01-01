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
    $sql="select * from farmerregistration where farmer_phone = 1234567890 and farmer_password  = 'qwerty'";
    $run_query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($run_query))
    {
        $name = $row['farmer_name'];
        echo "Name :",$name,"<br><br>"; 
        $pan = $row['farmer_pan'];
        // echo "Pan Number :",$pan,"<br><br>"; 
        $phone = $row['farmer_phone'];
        $address = $row['farmer_address'];
        $bank= $row['farmer_bank']; 
    }
    
?>
<form action="FarmerProfile.php" method="post">
    
    <input type="number" name="phonenumber" value="<?php echo $phone;?>" /> <br><br>
    <input type="text" name="address" value="<?php echo $address;?>" />     <br><br>

    <?php echo "Pan Number :",$pan,"<br><br>"; ?>

    <input type="number" name="bank" value="<?php echo $bank;?>" />         <br><br>
    <input type="submit" name="confirm," value = "Confirm">                
    
    </form>


</body>
</html>