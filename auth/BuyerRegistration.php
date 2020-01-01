<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../Styles/buyer_reg.css">	
		<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
		<title>Buyer Registration</title>
	</head>
	<body>
		<div class="flex-container">
			<div class="box">
				<i class="fas fa-user"  style="font-size:100px; "></i>	
			</div>
			<form action="BuyerRegistration.php" method = "post">

				<input class="box" id="name" type="text" name="name" placeholder="Enter Your Name" required>	<br>
				<input class="box" id="phone" type="phonenumber" name="phonenumber" placeholder="Phone Number" required><br>
				<textarea class="box" rows="4" cols="25" name = "address" placeholder="Address"></textarea><br>

				<input class="box" type="text" name="company_name" placeholder="Company name"><br>
				<input class="box" id="lisc" type="text" name="license" placeholder="license"><br>
				<input class="box" type="text" name="account" placeholder="Bank Account number"><br>
				<input class="box" type="text" name="pan" placeholder="Pan number" required><br>

				<input class="box" type ="mail" name="mail" placeholder="Mail ID" ><br>
				<input class="box" type="text" name="username" placeholder="Username" required><br>
				<input class="box" type ="password" name="password" placeholder="Password" required><br>
				<input class="box" type ="password" name="confirmpassword" placeholder="Confirm Password" required><br><br>

				<input id="button" type="submit" name = "register" value="Register" >

			</form>
		</div>
	</body>
</html>


<?php 

include("../Includes/db.php");

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