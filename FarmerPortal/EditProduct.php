<?php
    include("../Includes/db.php");
    session_start();
    $sessphonenumber = $_SESSION['phonenumber'];

    $sql = "select * from products 
                where product_id = 36";
    $run_query = mysqli_query($con, $sql);
        // echo $run_query;


        while ($row = mysqli_fetch_array($run_query)) {
            $title = $row['product_title'];
            $category = $row['product_cat'];
            $type = $row['product_type'];
            $stock = $row['product_stock'];
            $mrp = $row['product_mrp'];
            $base = $row['product_baseprice'];
            $desc = $row['product_desc'];
            $key = $row['product_keywords'];
            $delivery = $row['product_delivery'];
            // echo $delivery;
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>



    <title>Editing Product</title>





    <style>
        table {
            border: none;
        }


        tr td {
            border: none;
        }

        #protitle {
            font-size: 10px;

        }

        table {
            background-color: white;
            height: 650px;
            width: 100%;
            /* width: 98.5%;
            margin-left: 10px;
            margin-right: 10px; */
        }

        body {
            background-color: white;
        }

        .header {
            /* background-color:   #66ffff;
     */
            font-size: 30px;
            background-color: white;
            color: black;
            text-align: center;
        }

        * {
            box-sizing: border-box;
            margin: 0;
        }

        .col1 {
            font-size: 20px;
            background-color: #f5ca0a;

            border-style: solid;
            border-radius: 10px;
            padding: 10px;
            float: left;
            width: 250px;
            margin-left: 100px;

        }

        select {
            font-size: 20px;
            border-style: solid;
            width: 250px;
            /* margin-left: 40px; */
            border-radius: 10px;
            padding: 10px;
            border-width: 2px;
            border-color: black;

        }

        .col2 {
            float: left;
            margin-left: 20px;

        }

        .text1 {
            font-size: 20px;
            height: 50px;
            width: 300px;
            border-radius: 10px;
            border-style: solid;
            padding: 10px;
        }

        .grp2 {
            /* float: left; */
        }

        .col3 {
            background-color: #f5ca0a;

            font-size: 20px;
            border-style: solid;
            border-radius: 10px;
            padding: 10px;
            width: 250px;
            float: left;
            margin-right: 20px;
        }

        .col4 {
            /* margin-left: 20px; */
            float: left;

        }

        .t1 {
            text-align: center;
        }

        .foot {
            text-align: center;
            font-size: 20px;
            border-style: solid;
            border-radius: 10px;
            padding: 10px;
            margin-left: 40%;
            /* float: left; */
            width: 250px;
            background-color: #f5ca0a;

        }

        .footer {
            margin-left: 40%;
            margin-top: 10px;
            text-align: center;
            font-size: 20px;
            border-style: solid;
            border-radius: 10px;
            padding: 10px;
            /* float: left; */
            width: 250px;
            background-color: #f5ca0a;
            /* background-color: white; */
            border-color: black;
            font-weight: bold;
        }

        textarea {
            border-style: solid;
            border-color: black;
            border-width: 2px;
        }

        .inp {
            margin-top: 10px;
            font-size: 30px;
        }

        .danger {
            background-color: #00e600;
            border: 2px solid;
            border-style: outline;
            border-color: yellow;
        }

        .danger:hover {
            font-weight: bolder;
            width: 300px;
            height: 60px;
            transition: .7s;

        }

        .btn {
            border: 2px solid;
            border-style: outline;
            border-color: #f5ca0a;
            color: black;

            cursor: pointer;
            width: 250px;
        }
    </style>
</head>

<body>
    <div class="header">
        <form action="Editproduct.php" method="post" enctype="multipart/form-data">
            <br>
            <div>
                <label style="font-size :50px; text-shadow: 1px 1px 1px gray;"><b>Edit Product Here</b><i style="padding-left:1%;color:green;" class="fas fa-leaf "></i></label>
            </div>

    </div>
    <br>



    <table>
        <tr id="protitle">
            <td>
                <div class="grp1">
                    <div class="col1 t1"><b> Product Title:</b> </div>

                    <div class="col2"><input class="text1" type="text" name="product_title" value="<?php echo $title ?>" >
            </td>
            </div>
            </div>
            <td>
                <div class="grp2">

                    <div class="col3 t1"><b>Product Stock:(In kg</b>)</div>
                    <div class="col4">
                        <input type="text " class="text1" name="product_stock" value="<?php echo $stock ?>">
                    </div>

            </td>

            </div>

        </tr>

        <tr id="procat">
            <td>
                <div class="grp1">
                    <div class="col1 t1">
                        <b> Product Categories:</b></div>
                    <div class="col2">
                        <select name="product_cat" required>
                            <option>Select a Category</option>
                            <?php
                            $get_cats = "select * from categories";

                            $run_cats =  mysqli_query($con, $get_cats);

                            while ($row_cats = mysqli_fetch_array($run_cats)) {

                                $cat_id = $row_cats['cat_id'];
                                $cat_title = $row_cats['cat_title'];

                                echo "<option value='$cat_id'>$cat_title</option>";
                            }
                            ?>
                        </select>
            </td>
            </div>
            </div>
            <td>
                <div class="grp2">

                    <div class="col3 t1"><b> Product type :</b> </div>
                    <div class="col4"> <input type="text" class="text1" name="product_type" value="<?php echo $type ?>">
                    </div>
            </td>
            </div>
        </tr>

        <tr id="procalender">
            <td>
                <div class="grp1">
                    <div class="col1 t1"><b>Product Expiry :</b></div>
                    <div class="col2">
                        <input type="date" class="text1" name="bday">
            </td>
            </div>

            </div>
            <td>
                <div class="grp2">
                    <div class="col3 t1">
                        <b> Product Image :</b> </div>
                    <div class="col4">
                        <input type="file" class="text1" name="product_image"  value="<?php echo $title ?>">
            </td>
            </td>
            </div>

            </div>


        <tr id="proprice">
            <td>
                <div class="grp1">
                    <div class="col1 t1"><b> Product MRP : (Per kg) </b></div>
                    <div class="col2">
                        <input type="text" class="text1" name="product_mrp" value="<?php echo $mrp ?>">
            </td>
            </div>
            </div>
            <td>
                <div class="grp2">
                    <div class="col3 t1"> <b>Product Base Price:(Per kg) </b></div>
                    <div class="col4">

                        <input type="text" class="text1" name="product_baseprice" value="<?php echo $base ?>">
            </td>
            </td>
            </div>
            </div>


        <tr id="prodesc">
            <td>
                <div class="grp1">
                    <div class="col1 t1">

                        <b> Product Description:</b> </div>
                    <div class="col2">
                        <textarea name="product_desc" class="text1" cols="40" rows="8" ><?php echo $desc ?></textarea>
            </td>
            </div>
            </div>

            <td>
                <div class="grp2">
                    <div class="col3 t1"><b> Product Keywords:</b> </div>

                    <div class="col4"> <input type="text" class="text1" name="product_keywords" size="60" value="<?php echo $key ?>">
            </td>
            </td>
            </div>
            </div>
    </table>

    <div class="foot">
        <b> Delivery :</b>
       
        <input type="radio" name="product_delivery" checked=<?php $delivery=="Yes" ? "checked" : ""?> value="Yes">Yes
        <input type="radio" name="product_delivery" checked=<?php $delivery=="No" ? "checked" : ""?> value="No">No
        <!--<input type="radio" class="yes" name="product_delivery" value="yes"? checked : null/>Yes-->
        <!--<input type="radio" class="yes" name="product_delivery" value="no"/>No-->
    </div>
        <button class = "footer btn danger" id="insnow" name="insert_pro">
            Insert Product Now <i style="color: #f5ca0a;" class="fas fa-shopping-bag"></i></button>
    </form>

</body>

</html>

<?php


    if (isset($_POST['insert_pro'])) {
        $prod_title = mysqli_real_escape_string( $con, $_POST['product_title']);
        $prod_cat = mysqli_real_escape_string( $con, $_POST['product_cat']);
        $prod_type = mysqli_real_escape_string( $con, $_POST['product_type']);
        $prod_stock = mysqli_real_escape_string( $con, $_POST['product_stock']);
        $prod_mrp = mysqli_real_escape_string( $con, $_POST['product_mrp']);
        $prod_base = mysqli_real_escape_string( $con, $_POST['product_baseprice']);
        $prod_desc = mysqli_real_escape_string( $con, $_POST['product_desc']);
        $prod_key = mysqli_real_escape_string( $con, $_POST['product_keywords']);
        $prod_delivery = mysqli_real_escape_string( $con, $_POST['product_delivery']);


        $query = "update products 
                set product_title = '$prod_title', product_cat = '$prod_cat',
                product_type = '$prod_type', product_stock = '$prod_stock',
                product_mrp = '$prod_mrp',  product_baseprice = '$prod_base',
                product_desc = '$prod_desc',  product_keywords = '$prod_key',
                product_delivery = '$prod_delivery'
                where product_id = 36";
        // echo $query;
        $run = mysqli_query($con, $query);
    }
?>