<!DOCTYPE html>
<html>
<head>
	<title>Buyer Registration</title>
</head>
<body>

<form action="BuyerRegistration.php" method = "post">

	<input type="text" name="name" placeholder="Enter Your Name">	<br>
	<input type="phonenumber" name="phonenumber" placeholder="Phone Number"><br>

	<input type="text" name="company_name" placeholder="Company name"><br>
	<input type="text" name="license" placeholder="license"><br>
	<input type="text" name="accout" placeholder="Bank Account number"><br>
	<input type="text" name="pan" placeholder="Pan number"><br>

	<input type ="mail" name="mail" placeholder="Mail ID" required><br>
	<input type="text" name="username" placeholder="Username"><br>
	<input type ="password" name="password" placeholder="Password" required><br>
	<input type ="password" name="confirmpassword" placeholder="Confirm Password" required><br><br>

	<input type="submit" name = "register" value="Register" >

</form>
</body>
</html>


<?php 

include("Includes/db.php");
include("Functions/functions.php");

if (isset($_POST['register'])) {
	$name = $_POST['name'];
	$phonenumber = $_POST['name'];
	$company_name = $_POST['company_name'];
	$license = $_POST['license'];
	$accout = $_POST['accout'];
	$pan = $_POST['pan'];
	$mail = $_POST['mail'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['name'];

	$register_query = mysqli_query("insert into ");
}




?>