<!DOCTYPE html>
<html>

	<head>
		<title>Farmer Login portal</title>
		<link rel="stylesheet" type="text/css" href="Styles/FarmerLogin.css">
		<meta name="viewport" content="width=device-width,inital-scale=1">
		<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
	</head>

	<body>
		<div id= "a"><div id="fs"><br>	
			<i class="fas fa-user"  style="font-size:80px"; ></i><br><br>
			<i class="fas fa-id-card-alt"  style='font-size:42px'></i>

			<input class="input" type ="text" name="phonenumber" placeholder="Phone Number" required><br><br>
			<i class="fas fa-key" style='font-size:42px' ></i>
			<input  class="input" type ="password" name="password" placeholder="Password" required><br><br>
		
		</div>
		
		<input id="x" type="submit" name="LOGIN"><br>
		
		<div>
			<label id="downlabel" for="forgot password" ><a id = 'link' href="FarmerForgotPassword.php" >Forgot your password ?</a></label>
			<label id="forgotlabel" for="create new account"><a id = 'link' href="FarmerRegister.php" >Create New Account</a></label>
		</div>
	</body>
</html>

<?php 
include("Includes/db.php");

?>