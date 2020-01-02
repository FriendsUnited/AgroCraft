<!DOCTYPE html>
<html>

	<head>
		<title>Farmer Login portal</title>
		<link rel="stylesheet" type="text/css" href="../Styles/FarmerLogin.css">
		<meta name="viewport" content="width=device-width,inital-scale=1">
		<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
	</head>

	<body>
		<form action="FarmerLogin.php" method = "post">
			<div id= "a"><div id="fs"><br>	
				<i class="fas fa-user"  style="font-size:80px"; ></i><br><br>
				<i class="fas fa-id-card-alt"  style='font-size:42px'></i>

				<input class="input" type ="text" name="phonenumber" placeholder="Phone Number" required><br><br>
				<i class="fas fa-key" style='font-size:42px' ></i>
				<input  class="input" type ="password" name="password" placeholder="Password" required><br><br>
			
			</div>
			
			<input id="x" type="submit" name="login" value = "Login"><br>
			
			<div>
				<label id="downlabel" for="forgot password" ><a id = 'link' href="FarmerForgotPassword.php" >Forgot your password ?</a></label>
				<label id="forgotlabel" for="create new account"><a id = 'link' href="FarmerRegister.php" >Create New Account</a></label>
			</div>
		</form>
	</body>
</html>

<?php 
	include("../Includes/db.php");
	session_start();
	if(isset($_POST['login'])){

		$phonenumber = $_POST['phonenumber'];
		$password = $_POST['password'];

		$query = "select * from farmerregistration where farmer_phone = '$phonenumber' and farmer_password = '$password'";
		$run_query = mysqli_query($con,$query);
		$count_rows = mysqli_num_rows($run_query);
		if ($count_rows == 0) {
			echo "<script>alert('Please Enter Valid Details');</script>";
			echo "<script>window.open('FarmerLogin.php','_self')</script>";
		}
		while($row = mysqli_fetch_array($run_query)){
			$id = $row['farmer_id'];
		}

		
		$_SESSION['phonenumber'] = $phonenumber;
		echo "<script>window.open('../portal.php','_self')</script>";
		
	}

?>