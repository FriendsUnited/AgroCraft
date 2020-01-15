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
			<i class="fas fa-user" style="font-size:100px; "></i>
		</div>
		<form action="BuyerRegistration.php" method="post">

			<input class="box" id="name" type="text" name="name" placeholder="Enter Your Name" required> <br>
			<input class="box" id="phone" type="phonenumber" name="phonenumber" placeholder="Phone Number" required><br>
			<textarea class="box" rows="4" cols="25" name="address" placeholder="Address"></textarea><br>

			<input class="box" type="text" name="company_name" placeholder="Company name"><br>
			<input class="box" id="lisc" type="text" name="license" placeholder="license"><br>
			<input class="box" type="text" name="account" placeholder="Bank Account number"><br>
			<input class="box" type="text" name="pan" placeholder="Pan number" required><br>

			<input class="box" type="mail" name="mail" placeholder="Mail ID"><br>
			<input class="box" type="text" name="username" placeholder="Username" required><br>
			<input class="box" type="password" name="password" placeholder="Password" required><br>
			<input class="box" type="password" name="confirmpassword" placeholder="Confirm Password" required><br><br>

			<input id="button" type="submit" name="register" value="Register">

		</form>
	</div>
</body>

</html>


<?php

include("../Includes/db.php");

if (isset($_POST['register'])) {

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$company_name = mysqli_real_escape_string($con, $_POST['company_name']);
	$license = mysqli_real_escape_string($con, $_POST['license']);
	$account = mysqli_real_escape_string($con, $_POST['account']);
	$pan = mysqli_real_escape_string($con, $_POST['pan']);
	$mail = mysqli_real_escape_string($con, $_POST['mail']);
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

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

		$query = "insert into buyerregistration (buyer_name,buyer_phone,buyer_addr,buyer_comp,
		buyer_license,buyer_bank,buyer_pan,buyer_mail,buyer_username,buyer_password) 
		values ('$name','$phonenumber','$address','$company_name','$license','$account','$pan',
		'$mail','$username','$encryption')";

		$run_register_query = mysqli_query($con, $query);
		echo "<script>alert('SucessFully Inserted');</script>";
		echo "<script>window.open('BuyerLogin.php','_self')</script>";
	} else if (strcmp($password, $confirmpassword) != 0) {
		echo "<script>
			alert('Password and Confirm Password Should be same');
		</script>";
	}
}


?>