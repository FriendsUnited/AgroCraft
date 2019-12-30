<!DOCTYPE html>
<html>
<head>
	<title>Buyer login</title>
	<link rel="stylesheet" type="text/css" href="Styles/BuyerLogin.css">
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
				<input id="x" type="submit" name="LOGIN">
				<br><p></p>
			</div>
	</form>
	</body>
</html>

<?php 

$username = $_POST['']


?>