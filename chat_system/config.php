<?php 
// $dbhost="localhost";
// $dbname="agrocraft";
// $dbuser="root";
// $dbpass='';
// try{
//     $db=("mysql:dbhost=$dbhost;dbname=$dbname","$dbuser","$dbpass");
// }
// catch(PDOException $e){
//     echo $e->getMessage();
// }
$con = mysqli_connect("localhost","root","","agrocraft");

        if (mysqli_connect_errno()) {
                echo "Failed to connect to MySql " . mysqli_connect_error();
        }


?>