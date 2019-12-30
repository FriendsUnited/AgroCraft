<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Forgot Password</title>
    </head>
    <body>
        <form action="FarmerForgotPassword.php" method = "post">
            <input type="text" name = "phonenumber" placeholder = "Phone Number"><br>
            <input type="text" name = "pan" placeholder = "Pan Number"><br>
            
            <input type ="password" name="password" placeholder="Password" required><br>
		    <input type ="password" name="confirmpassword" placeholder="Confirm Password" required><br><br>
            
            <input type="submit" name="register" value = "Update Password">
        </form>
    </body>
</html>