<!DOCTYPE html>

<?php
include("includes/db.php");  // db connections
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Script for Advance TextArea  -->
    <!-- 
    <script src="http://tinymce.cachefly.net/4.0/tinymce.min.js"></script>
    <script type="application/x-javascript">
    tinymce.init({selector:'textarea'});
    </script> -->

    <title>Inserting Product</title>
</head>
<body >
    
    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <table align="center" width="750" border ="2">
            <tr align="center">
                <td colspan = 4><h2>Insert New Product Here</h2></td>
            </tr>

            <tr>
                <td align="center"><b>Product Title:</b></td>
                <td colspan = 2><input type="text" name="product_title" size = "60" required></td>
            </tr>

            <tr>
                <td align="center"><b>Product Categories:</b></td>
                <td colspan = 2>
                    <select name="product_cat" required>
                        <option>Select a Category</option>
                        <?php 
                                $get_cats = "select * from categories";

                                $run_cats =  mysqli_query($con,$get_cats);

                                while ($row_cats=mysqli_fetch_array($run_cats)){

                                    $cat_id = $row_cats['cat_id'];
                                    $cat_title = $row_cats['cat_title'];

                                    echo "<option value='$cat_id'>$cat_title</option>";
                                }
                        ?>
                    </select>
                    </td>
            </tr>

            <tr>
                <td align="center"><b>Product Image :</b></td>
                <td colspan = 2><input type="file" name="product_image" ></td>
            </tr>

            <tr>
                <td align="center"><b>Product Stock : <br>(In kg)</b></td>
                <td colspan = 2><input type="text" name="product_stock" required ></td>
            </tr>

            <tr>
                <td align="center"><b>Product Price : <br>(Per kg)</b></td>
                <td colspan = 2><input type="text" name="product_price" required ></td>
            </tr>

            <tr>
                <td align="center"><b>Product Description:</b></td>
                <td colspan = 2><textarea name="product_desc" id="" cols="40" rows="8" ></textarea></td>
            </tr>

            <tr>
                <td align="center"><b>Product Keywords:</b></td>
                <td colspan = 2><input type="text" name="product_keywords" size = "60" ></td>
            </tr>
            
            <tr>
                <td align="center"><b>Delivery :</b></td>
                <td ><input type="radio" name="product_delivery" value = "yes" >Yes</td>
                <td ><input type="radio" name="product_delivery" value = "no" >No</td>
            </tr>

            <tr align ="center">
                <td colspan = 4><input type="submit" name="insert_post" value="Insert Product Now"></td>
            </tr>
        </table>
    </form>

</body>
</html>

<?php 

if(isset($_POST['insert_post'])){    // when button is clicked
   
    // getting the text data from fields
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_stock = $_POST['product_stock'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_delivery = $_POST['product_delivery'];
    
    // getting image
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];  // for server

    move_uploaded_file($product_image_tmp,"product_images/$product_image");

    $insert_product = "insert into products (product_cat,product_title,product_stock,product_price,
                        product_desc,product_image,product_keywords,product_delivery) 
                        values ('$product_cat','$product_title','$product_stock','$product_price'
                                ,'$product_desc','$product_image','$product_keywords','$product_delivery')";
    
    $insert_pro = mysqli_query($con,$insert_product);

    if($insert_pro){
       echo "<script>alert('Product has been added')</script>";
       echo "<script>window.open('insert_product.php','_self')</script>";
    }



}


?>