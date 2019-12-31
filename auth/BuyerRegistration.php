<!DOCTYPE html>
<html>
<head>
	<title>Buyer Registration</title>
</head>
<body>

<form action="BuyerRegistration.php" method = "post">

	<input type="text" name="name" placeholder="Enter Your Name" required>	<br>
	<input type="phonenumber" name="phonenumber" placeholder="Phone Number" required><br>
	<textarea rows="4" cols="25" name = "address" placeholder="Address"></textarea><br>

	<input type="text" name="company_name" placeholder="Company name"><br>
	<input type="text" name="license" placeholder="license"><br>
	<input type="text" name="account" placeholder="Bank Account number"><br>
	<input type="text" name="pan" placeholder="Pan number" required><br>

	<input type ="mail" name="mail" placeholder="Mail ID" ><br>
	<input type="text" name="username" placeholder="Username" required><br>
	<input type ="password" name="password" placeholder="Password" required><br>
	<input type ="password" name="confirmpassword" placeholder="Confirm Password" required><br><br>

	<input type="submit" name = "register" value="Register" >

</form>
</body>
</html>


<?php 

include("../Includes/db.php");
include("Functions/functions.php");

if (isset($_POST['register'])) {
	$name = $_POST['name'];
	$phonenumber = $_POST['phonenumber'];
	$address = $_POST['address'];
	$company_name = $_POST['company_name'];
	$license = $_POST['license'];
	$account = $_POST['account'];
	$pan = $_POST['pan'];
	$mail = $_POST['mail'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];

	if (strcmp($password,$confirmpassword) == 0){
		
		$query = "insert into buyerregistration (buyer_name,buyer_phone,buyer_addr,buyer_comp,
		buyer_license,buyer_bank,buyer_pan,buyer_mail,buyer_username,buyer_password,buyer_conf_pswd) 
		values ('$name','$phonenumber','$address','$company_name','$license','$account','$pan',
		'$mail','$username','$password','$confirmpassword')";
		
		$run_register_query = mysqli_query($con,$query);
		echo "<script>alert('SucessFully Inserted');</script>";
		echo "<script>window.open('BuyerLogin.php','_self')</script>";
	}
	else if (strcmp($password,$confirmpassword) != 0){
		echo "<script>
			alert('Password and Confirm Password Should be same');
		</script>";
	}	
}


?>