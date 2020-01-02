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
        
        .dropdown {
            float: right;
            margin-right: 2em;
            margin-bottom: 52em;
            color: darkolivegreen;
            background-color: transparent;
        }
        /* ul li {
            display: none;
        } */
        
        ul li:hover ul li {
            display: block;
            width: 30px
        }
        
        ul li a {
            display: block;
            width: 30px
        }
        
        h1 {
            color: rgb(20, 83, 31);
            font-family: 'Times New Roman', Times, serif;
        }
        .trans{
            clear:left;
            background-color:red;
        }
        h3 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(8, 116, 53);
        }
        
        .dropdown-content {
            display: none;
            position: sticky;
            background-color: transparent;
            min-width: 250px;
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
            background-color: transparent;
            width: 100px;
            font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, "sans-serif";
        }
        
        .dropdown-content a:hover {
            background-color: transparent;
            /* color: black; */
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
            background-color: transparent;
        }
        
        .dropdown:hover .dropbtn {
            background-color: #ffffff;
        }
        
        .new {
            /* display: table-cell;
            vertical-align: middle; */
            text-align: center;
        }
        
        .button {
            position: absolute;
            margin-left: 130px;
            float:right;
        }
        
        h2 {
            color: darkgreen;
            /* background-color: darkcyan; */
        
        
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

    <!-- <div id="logo"> -->
    <div class="dropdown">

        <i class="fa fa-user fa-3x"></i>
        <div class="dropdown-content">

            <a href="#">Edit <i class="fa fa-edit fa-2x"></i></a><br>
            <a href="#">Logout <i class="fa-sign-out fa-2x"></i></a>


            <!-- <ul>
            <li>
                <a>log out</a>
            </li>
            <li><a>edit</a></li>
        </ul> -->
        </div>
    </div>
    <!-- </div> -->
    <h1>HELLO,user <i class="fa fa-user-circle fa-1x"></i></h1>
    <h3>Welcome to Agrocraft</h3>


<div>
<h3>ALL PRODUCTS</h3> </div>       


    <div class="wrapper">


        <br>
        <h2>ALL PRODUCTS</h2>
        <table border="1">

            <tr>
                <td><img src="../Images/Crops/Coffee.jpg" alt="#" height=180 width=300 border="3"></td>
                <td><img src="../Images/Crops/Coconut.jpg" alt="#" height=180 width=300 border="3"></td>
                <td><img src="../Images/Crops/Maize.jpg" alt="#" height=180 width=300 border="3"></td>
                <div class="new">
                    <td width=300> <button class="button"><i  class="fa fa-plus fa-3x"></i></button></td>
                </div>
            </tr>

            <tr>
                <th>Coffee 12/-kg</th>
                <th>Coconut 13/-kg</th>
                <th>maize 13/-kg</th>

            </tr>

        </table>
        <br>


        <h2>TRANSACTION HISTORY</h2>
        <table border="2">

            <tr>
        
        <br>
        
        <div>
            <?php
                include("../Includes/db.php");
                include("../Functions/functions.php");
                getFarmerProducts(); 
                //echo "<button>Add product</button>";
            ?>
            <br>
            
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
                <th width=200px>date</th>
                <th width=200px>name</th>
                <th width=200px>phone no</th>
                <th width=200px> address</th>
                <th width=200px>quantity</th>
                <th width=200px>price</th>

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
