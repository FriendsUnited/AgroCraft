<?php
    include("../Functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title></title>
    <meta charset="utf-8" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            /* background-image: url(images/Website/FarmerLogin.jpg); */
            background-size: cover;
            background-position: center;
            box-sizing: border-box;
        }
        
        .wrapper {
            /* width: 300px; */
            background-image: 100px;
        }
        .add_button{
             /* clear:left;
            margin-left:450px; */
            /* float:right; */
            /* margin-top:0; */
            text-align:center;
            background-color:red;
        }
         
        .dropdown {
            float: right;
            margin-right: 1em;
            margin-top:0; 
            /* margin-bottom: 52em; */
            color: white;
            /* background-color:green; */
           
        }
        /* ul li {
            display: none;
        } */
        
        ul li:hover ul li {
            display: block;
            /* width: 30px; */
        }
        
        ul li a {
            display: block;
            /* width: 30px; */
        }
        .products:last-child{
              
        }
        h1 {
            /* color: rgb(20, 83, 31); */
            font-family: 'Times New Roman', Times, serif;
            color:white;

        }
        .trans{
            clear:left;
            background-color:red;
        }
        h3 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
           color:white;
           text-align:center;
            margin-top:5em;
            background-color:green;
        }
        
        .dropdown-content {
            display: none;
             position: sticky; 
            background-color: transparent;
            /* min-width: 250px; */
            z-index: 1;
        }
        
        .dropdown-content a {
            color: rgb(12, 11, 11);
            padding: 30px 16px;
            text-align: center;
            text-decoration: none;
            display: block;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            font-size: 20px;
            background-color: white;
             /* width: 100px;  */
            font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
        }
        
        .dropdown-content a:hover {
            background-color: white;
            /* color: black; */
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
            background-color: white;
        }
        
        .dropdown:hover .dropbtn {
            background-color: #ffffff;
        }
        
        .new {
            /* display: table-cell;
            vertical-align: middle; */
            text-align: center;
        }
        
        /* .button {
            position: absolute;
             margin-left: 130px; 
            float:right; 
             margin-bottom:250px; 
             margin-top:3em;
            clear:left; 
         } 
         */
        h2 {
            color: white;
            margin-top:3em;
            /* background-color: green;
         */
        text-align:center;

            /* background-color: darkcyan; */
        
        }
        .hii{
            float:right;
            margin-right:5em;
             /* margin-top:254em;  */
             /* background-color:red; */
        }
        .ribbon {
            position: relative;
            top: -16px;
            right: -706px;
            float: left;
            top: 0px;
            left: 0px;
            height: 74px;
            background-color:green;
        }
        .over{
            background-color:green;
             border:1px; 
             width:100%; 
              white-space:nowrap; 
             
             height:70px; 
        
            
        }
        .idk{

        }
      
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="portal_files/bootstrap.min.css">
  	<script src="portal_files/jquery.min.js.download"></script>
  	<script src="portal_files/popper.min.js.download"></script>
  	<script src="portal_files/bootstrap.min.js.download"></script>


</head>

<body>


     <div class="over">  
     <!-- <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
  <i class="fa fa-user fa-2x">
    </i>
   <span class="caret"></span></button> -->
  <!-- <ul class="dropdown-content">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul> 
    </div>  -->

      <div class="dropdown">
       <i class="fa fa-user fa-2x">
    </i>
         <div class="dropdown-content">

            <a href="FarmerProfile.php">Profile <i class="fa fa-edit fa-2x"></i></a><br>
            <a href="#">Logout <i class="fa-sign-out fa-2x"></i></a>
        </div> 
        </div> 
    
     <!-- <div class="over"> -->
    
   
        
            <img class="ribbon" src="logo.jpeg"> 
            <div class="hii"> <h1>hello,user <i class="fa fa-user-circle fa-1x"></i></h1></div> 
            
            </div> 
            <!-- <div class="dropdown">
    <i class="fa fa-user fa-2x">
    </i>
        <div class="dropdown-content">

            <a href="FarmerProfile.php">Edit <i class="fa fa-edit fa-2x"></i></a><br>
            <a href="#">Logout <i class="fa-sign-out fa-2x"></i></a>
        </div>
<<<<<<< HEAD
    </div> -->
       
           
            
    <!-- <h3>Welcome to Agrocraft</h3>       -->
   
        <br>
       <br>


       <div class="add_button"> <h3>ALL PRODUCTS<button class="button"><i  class="fa fa-plus fa-2x"></i></button>  </h3></div>
        <!-- <div class="add_button"><button class="button"><i  class="fa fa-plus fa-3x"></i></button></div>                      -->

=======
    </div>
    <!-- </div> -->
    <h1>HELLO,user <i class="fa fa-user-circle fa-1x"></i></h1>
    <h3>Welcome to Agrocraft</h3>

    <div class="wrapper">
        <br>
       <br>
        <h2>ALL PRODUCTS</h2>
        <div class="add_button"><a href="../Admin/insert_product.php"><button class="button"><i  class="fa fa-plus fa-3x"></i></button></a></div>                     
>>>>>>> 20bf5c04bffd9f7f04bc86bfd6f3c1539fb94b5b
        <br>
        
        <div>
            <?php
                include("../Includes/db.php");
                $sess_phone_number=$_SESSION['phonenumber'];
                getFarmerProducts();
            ?>
    
            
        </div>
    </div>
    
       <div class="trans">
        

       <h3>TRANSACTION HISTORY</h3>
       </div> 
    
    
    <div>
    <br>
    <br>
    
    <table border="2">
    
        <tr>
                <th width=200px>Date</th>
                <th width=200px>Name</th>
                <th width=200px>Phone Number</th>
                <th width=200px>Address</th>
                <th width=200px>Quantity</th>
                <th width=200px>Price</th>

            </tr>
            <tr>
                <td>12-1-2000</td>
                <td>melissa</td>
                <td>1234567890</td>
                <td>sajgdkagdd</td>
                <td>500</td>
                <td>200</td>
            </tr>
            <tr></tr>
            <tr></tr>
        </table>
    </div>
    
</body>

</html>

