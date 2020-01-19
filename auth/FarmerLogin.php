<!-- <?php
	include("../Includes/db.php");
	//session_start();
	include("../Functions/functions.php");
	?> 
	  -->

<!DOCTYPE html>
<html>

<head>
	<title>Farmer Login portal</title>
	<!-- <link rel="stylesheet" type="text/css" href="../Styles/FarmerLogin.css"> -->
	<meta name="viewport" content="width=device-width,inital-scale=1">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
	<style>
		#a {
			text-align: center;
			/*font-size: 35px;*/
			/*border-style: solid;*/
			/*margin-border-top: 8%;*/
			margin-top: 5%;
			margin-left: 28%;
			margin-right: 20%;
			margin-bottom: 18%;
			max-width: 40%;
			min-width: 20%;

		}

		body {
			position: relative;
			background-image: url(../Images/Website/FarmerLogin.jpg);
			/*ckground-repeat:no-repeat;*/
			/*background-position: center center;*/
			text-align: center;
			background-size: 100% 100%;
			background-attachment: fixed;
		}

		#x {
			font-size: 30px;
			border-radius: 25%;
			cursor: pointer;
			font-weight: bold;
			color: rgb(246, 248, 246);
			background-color: green;
			/* display: inline-block; */
			border-color: rgb(3, 66, 34);
			width: 20%;
		}

		#x:hover {
			box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
			font-size: 35px;
			background-color: rgb(97, 16, 33);
			outline: none;
			border-color: blanchedalmond;
			color: rgb(155, 248, 4);
			border-radius: 20%;
			border-style: outset;
			border-color: rgb(155, 248, 4);
			font-weight: bolder;
			width: 30%;

		}

		input {
			font-size: 30px;
			padding: auto;
			background-color: transparent;
			border-left: none;
			border-top: none;
			border-right: none;
			border-color: black;
		}

		#forgotPassword {
			margin: auto;
			float: left;
			font-size: 17px;
			color: lightgreen;
			text-decoration: none;
			cursor: pointer;

			font-weight: bold;
			color: rgb(246, 248, 246);
			background-color: green;
			/* display: inline-block; */
			border-radius: 20px;
			border-color: rgb(3, 66, 34);
			width: 47%;
		}

		#link1 {
			font-size: 30px;
			border-radius: 25%;
			background-color: transparent;
			color: black;
			text-decoration: none;
			margin-top: 30px;
			padding-top: 30%;
			line-height: 30px;
			/* float:left; */
		}


		#link2 {
			font-size: 30px;
			border-radius: 25%;
			background-color: transparent;
			color: black;
			text-decoration: none;
			float: right;
		}

		.ansh {
			/* background-color: red; */
			height: 200px;
			width: 1000px;
			/* padding-right: 200px; */
			/* margin-right:600px; */
		}

		.ansh1 {
			float: left;
		}
	</style>
</head>

<body>
	<form action="FarmerLogin.php" method="post">
		<br><br>
		<div id="a">
			<br><br>
			<div id="fs"><br>
				<i class="fas fa-user" style="font-size:80px" ;></i><br><br>
				<i class="fas fa-id-card-alt" style='font-size:42px'></i>

				<input class="input" type="text" name="phonenumber" placeholder="Phone Number" required><br><br>
				<br>
				<i class="fas fa-key" style='font-size:42px'></i>
				<input class="input" type="password" name="password" placeholder="Password" required><br><br>

			</div>
			<br><br>
			<input id="x" type="submit" name="login" value="Login"><br>
			<br><br>
			<div class="ansh">
				<div class="ansh1"> <label id="downlabel abcd" for="forgot password"><a id='link1' href="FarmerForgotPassword.php">Forgot your password ?</a></label>
				</div> <label id="forgotlabel" for="create new account"><a id='link2' href="FarmerRegister.php">Create New Account</a></label>
			</div>
	</form>
</body>

</html>

<?php
if (isset($_POST['login'])) {

	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

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
	// echo $encryption;

	$query = "select * from farmerregistration where farmer_phone = '$phonenumber' and farmer_password = '$encryption'";
	echo $query;
	$run_query = mysqli_query($con, $query);
	$count_rows = mysqli_num_rows($run_query);
	if ($count_rows == 0) {
		echo "<script>alert('Please Enter Valid Details');</script>";
		echo "<script>window.open('FarmerLogin.php','_self')</script>";
	}
	while ($row = mysqli_fetch_array($run_query)) {
		$id = $row['farmer_id'];
	}

	$_SESSION['phonenumber'] = $phonenumber;
	echo "<script>window.open('../FarmerPortal/Homepage.php','_self')</script>";
}

?>