<!DOCTYPE html>
<html>
<head>
	<title>Buyer login</title>
	<link rel="stylesheet" type="text/css" href="../Styles/BuyerLogin.css">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
	<body>
		<form action="BuyerLogin.php" method = "post">
			<div id= "a">
				<br>
				<i class="fas fa-user" style="font-size:70px"; ></i><br><br>
				<i class="fas fa-id-card-alt"  style='font-size:32px'></i>

				<input class="input" type ="number" name="phonenumber" placeholder="Phone Number" required><br><br>
				<i class="fas fa-key" style='font-size:32px' ></i>

				<input  class="input" type ="password" name="password" placeholder="Password" required><br><br>
				<input id="x" type="submit" name="login" value = "Login">
				<br><p></p>
				<div>
					<label id="forgotPassword" ><a id = 'link' href="BuyerForgotPassword.php" >Forgot your password ?</a></label>
					<label id="account" ><a id = 'link' href="BuyerRegistration.php" >Create New Account</a></label>
				</div>
			</div>
		</form>
	</body>
</html>


<?php 
	include("../Includes/db.php");
	session_start();
	if(isset($_POST['login'])){

		$phonenumber = mysqli_real_escape_string( $con, $_POST['phonenumber']);
		$password = mysqli_real_escape_string( $con,$_POST['password']);

		$query = "select * from buyerregistration where buyer_phone = '$phonenumber' and buyer_password = '$password'";
		$run_query = mysqli_query($con,$query);
		$count_rows = mysqli_num_rows($run_query);
		if ($count_rows == 0) {
			echo "<script>alert('Please Enter Valid Details');</script>";
			echo "<script>window.open('FarmerLogin.php','_self')</script>";
		}
		while($row = mysqli_fetch_array($run_query)){
			$id = $row['buyer_id'];
		}

		
		$_SESSION['phonenumber'] = $phonenumber;
		echo "<script>window.open('../BuyerPortal/BuyerHomepage.php','_self')</script>";
		
	}

?>