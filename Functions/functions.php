<?php
    

    $con = mysqli_connect("localhost","root" ,"","agrocraft");

    function getCrops(){

        global $con;

        $query = "select * from products where product_cat = 1";

        $run_query = mysqli_query($con,$query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_type = $row_cat['product_type'];

            // echo "<li><a href = '#'>$product_type</a></li>";
            echo $product_type;
        }
    }

    function getFruits(){

        global $con;

        $query = "select * from products where product_cat = 1";

        $run_query = mysqli_query($con,$query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_type = $row_cat['product_type'];

            // echo "<li><a href = '#'>$product_type</a></li>";
            echo $product_type;
        }
    }

    function getVegetables(){

        global $con;

        $query = "select * from products where product_cat = 1";

        $run_query = mysqli_query($con,$query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_type = $row_cat['product_type'];

            // echo "<li><a href = '#'>$product_type</a></li>";
            echo $product_type;
        }
    }
    function getFarmerProducts() {
        include("../Includes/db.php");
        global $con;
        
        }  
    

    function getProducts() {
        global $con;
        $query = "select * from products  order by RAND() LIMIT 0,4";
        $run_query = mysqli_query($con,$query);
        while($rows = mysqli_fetch_array($run_query)){
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_delivery = $rows['product_delivery'];

            echo "<div class='wrapper'>
                    <div class='inputwrapper'>
                        <img src='./Admin/product_images/$product_image' alt= 'Image Not Available' style='height: 100px; width: 100px;'><br><br>
                        <label>$product_title</label><br>
                        <label>PRICE:- $product_price Rs/kg</label><br>	
                        <label id='shop2'>Delivery by Farmer</label><br>Qty:-
                        <input class='numberinput' type='number' name='number'  >
            
                        <button class='addtocart'>ADD TO CART <i class='fas fa-shopping-cart' style=' background-color:#FFD700'></i></button>
                        <br><br>
                    </div >      
                </div><br><br>";

        }
    }

?>
