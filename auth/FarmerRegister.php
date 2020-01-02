<!DOCTYPE html>
<html>
	<head>
		<title>Farmer Registration Portal</title>
		<style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }
        
        .box {
            color: rgb(6, 36, 7);
            width: 350px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style : outset;
            border-width: 5px;
            border-radius: 16px;
            border-color:green;
        }
        
        body {
             
			/* background: black; */
			background-image: url(../Images/Website/FarmerLogin.jpg); 
			text-align: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            /*background-image:url(../Images/Website/forgotpassword.jpg);*/
            border: chartreuse;
        }
        
        form {
			
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);
            
        }
        
        input {
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            border-radius: 16px;

        }
        textarea{
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            border-radius: 16px;

        
            
        }
        
        input[type="submit"] {
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            /*border-radius: 0px;*/
            border-color: rgb(3, 66, 34);
            width: 25%;
        }
        
        input[type="submit"]:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            /*border-radius: 0px;*/
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 29%;
            font-size: 18px;
            
           
        }
        .box {
            color: rgb(6, 36, 7);
            width: 400px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            background-color: white;
            border-radius: 16px;
            border-color:green;
        }
    </style>
	</head>
	<body>
    <div class="box">
		<form action="FarmerRegister.php" method = "post">
			<h1> FARMER REGISTRATION </h1> <input type="text" name="name" placeholder="Name"><br>

			<input type="number" name="phonenumber" placeholder="Phone Number"><br>

			<textarea rows="3" cols="20" name = "address" placeholder="Address"></textarea><br>

			<input type="text" name="pan" placeholder="Pan Number"><br>

			<input type="text" name="account" placeholder="Bank Account number"><br>

			<input type ="password" name="password" placeholder="Password" required><br>

			<input type ="password" name="confirmpassword" placeholder="Confirm Password" required><br>

			<input type="submit" name="register" value = "Register">

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
