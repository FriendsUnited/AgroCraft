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
        
        #logo {
            float: right;
            margin-right: 2em;
            margin-bottom: 52em;
        }
        /* ul li {
            display: none;
        } */
        
        ul li:hover ul li {
            display: block;
        }
        
        ul li a {
            display: block;
        }
        
        #header {
            background-color: cadetblue;
            font-family: 'Times New Roman', Times, serif;
        }
        .trans{
            clear:left;
            background-color:red;
        }
        h3 {
            /* background-color: darkcyan; */
        
        
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div id="header">
        <div id="logo">

            <i class="fa fa-user fa-3x"></i>
            <ul>
                <li>
                    <a>log out</a>
                </li>
                <li><a>edit</a></li>
            </ul>
        </div>
        <h1>HELLO,USER</h1>
    </div>
<div>
<h3>ALL PRODUCTS</h3> </div>       


    <div class="wrapper">
        
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
