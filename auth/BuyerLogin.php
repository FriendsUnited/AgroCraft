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
				<input class="input" type ="text" name="username" placeholder="Username" required><br><br>
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
	if(isset($_POST['login'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "select * from buyerregistration where buyer_username = '$username' and buyer_password = '$password'";
		$run_query = mysqli_query($con,$query);
		$count_rows = mysqli_num_rows($run_query);

		if ($count_rows == 0) {
			echo "<script>alert('Please Enter Valid Details');</script>";
			echo "<script>window.open('BuyerLogin.php','_self')</script>";
		}

		echo "<script>window.open('../Homepage.php','_self')</script>";
	}

?>