<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <style>
        #head {
            font-family: "Times New Roman";
            font-weight: bold;
            /* font-size: 50px; */
            font-style: italic;
            word-spacing: 20px;
            text-shadow: 2px 2px green;
            font-size: 40px;
            text-decoration-style: wavy;
        }

        * {
            margin: 0px;
        }

        img {
            height: 200%;
            width: 30%;
        }

        .first {
            background-color: red;
            height: 500%;
            width: 100%;
        }

        .item {
            font-size: 30px;
        }
        .item1{
            margin-top:-70px;
        }
        .text{
            padding-left: 30px;
            padding-right: 30px;
font-size: 30px;
font-weight: bold;
        }
        .tab1{
            text-align: center;
            width: 100%;
        }
        
    </style>
</head>

<body>

    <!-- <?php
            include("../includes/db.php");
            include("../Functions/functions.php");
            $sess_phone_number = $_SESSION['phonenumber'];
            getFarmerProductDetails();


            ?> -->
    <div>
        <h1 align="center" id="head"> GLADINA POTATOES </h1>
    </div>
   

    

    <table class="tab1" >
        <tr >
        <td rowspan=3><img src="Pota.jpg" style = "width:500px;" ></td>
        
            
            <td class="text" >Category :<label class="Category"> Vegetables</label> </td>
            <td class="text">Type : <label class="Product_Type">Patato</label></td>

        </tr>
        <tr><td class="text">MRP : <label class="mrp">$24</label></td>
        <td class="text">Base Price : <label class="bp">$10</label></td>
</tr>
      
    </tr>


    </table>
<div class="foot text">Stock :<label class="lab text">20kgs</label>
    

    </div>
</body>

</html>