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

        function getFarmerProducts() {
            $query="select product_type,product_image,product_price from products where farmer_id in(select farmer_id from farmerregistration where farmer_phone=128071232 and farmer_password='pass')";
            $run_query=mysqli_query($con,$query);
            $resultCheck=mysqli_num_rows($run_query);
            if($resultCheck>0) {   
                while($row=mysqli_fetch_assoc($run_query)){
                    $type =  $row['product_type'];
                    $image =  $row['product_image'];
                    $price =  $row['product_price'];
                    
                    $path = "../Admin/product_images/" . $image ;
        
                    
                    //printf('<table border=1><td><img src = ' . $path . ' alt="Image Not Found" height=180 width=300 border="5"></td>');
                
                echo "
                    <div style = 'float:left; margin-left:30px;padding :10px; ' >
                        <img src=' . $path . '  alt='Image Not Found' width=180 height=300 border=5/>
                        <p>Price : Rs $price</p>
                        </div> "; 
                        //$s = trim($s); 
                }      
            }  
        }
    }








?>
