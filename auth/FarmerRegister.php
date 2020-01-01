<!DOCTYPE html>
<html>
	<head>
		<title>Farmer Registration Portal</title>
	</head>
	<body>
		<form action="FarmerRegister.php" method = "post">
			<input type="text" name="name" placeholder="Name"><br>

			<input type="number" name="phonenumber" placeholder="Phone Number"><br>

			<textarea rows="4" cols="25" name = "address" placeholder="Address"></textarea><br>

			<input type="text" name="pan" placeholder="Pan Number"><br>

			<input type="text" name="account" placeholder="Bank Account number"><br>

			<input type ="password" name="password" placeholder="Password" required><br>

			<input type ="password" name="confirmpassword" placeholder="Confirm Password" required><br><br>

			<input type="submit" name="register" value = "Register">

		</form>

	</body>
</html>


<?php 

	include("../Includes/db.php");

	if (isset($_POST['register'])) {
		$name = $_POST['name'];
		$phonenumber = $_POST['phonenumber'];
		$address = $_POST['address'];
		$account = $_POST['account'];
		$pan = $_POST['pan'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];

		if (strcmp($password,$confirmpassword) == 0){
			
			$query = "insert into farmerregistration (farmer_name,farmer_phone,farmer_address,
			farmer_pan,farmer_bank,farmer_password,farmer_conf_pswd) 
			values ('$name','$phonenumber','$address','$pan','$account',
			'$password','$confirmpassword')";
			
			$run_register_query = mysqli_query($con,$query);
			echo "<script>alert('SucessFully Inserted');</script>";
			echo "<script>window.open('FarmerLogin.php','_self')</script>";
		}
		else if (strcmp($password,$confirmpassword) != 0){
			echo "<script>
				alert('Password and Confirm Password Should be same');
			</script>";
		}	
	}

?>
