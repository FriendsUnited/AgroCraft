<?php
    
    session_start(); 
    $con = mysqli_connect("localhost","root" ,"","agrocraft");

    function getCrops(){

        global $con;

        $query = "select * from products where product_cat = 1";

        $run_query = mysqli_query($con,$query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_type = $row_cat['product_type'];

            
            echo "<option class='items1'>$product_type</option>";
        }
    }

    function getFruits(){

        global $con;

        $query = "select * from products where product_cat = 1";

        $run_query = mysqli_query($con,$query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_type = $row_cat['product_type'];

            echo "<option class='items1'>$product_type</option>";
        }
    }

    function getVegetables(){

        global $con;

        $query = "select * from products where product_cat = 1";

        $run_query = mysqli_query($con,$query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_type = $row_cat['product_type'];

            echo "<option class='items1'>$product_type</option>";
        }
    }


    

    function getProducts() {
        global $con;
        $query = "select * from products  order by RAND() LIMIT 0,10";
        $run_query = mysqli_query($con,$query);
        echo "<br>";
        while($rows = mysqli_fetch_array($run_query)){
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_delivery = $rows['product_delivery'];


            echo "
                  <div class='wrapper'>
                        <div class='inputwrapper'>
                            <br>
                            <a href='#'><img src='../Admin/product_images/$product_image' alt= 'Image Not Available' onerror=this.src='./Images/Website/noimage.jpg' style='height: 100px; width: 100px;'><br><br></a>
                            <label>$product_title</label><br>
                            <label>PRICE:- $product_price Rs/kg</label><br>	
<<<<<<< HEAD
                              </div>
=======
                            <label id='shop2'>Delivery by Farmer</label><br>Qty:-
                            <input class='numberinput' type='number' name='number'  >
                            <button class='addtocart'>ADD TO CART <i class='fas fa-shopping-cart' style=' background-color:#FFD700'></i></button><br><br>    
>>>>>>> d0fdd52d24eb4b35b79d40c7bbc4252729d883c7
                        </div></div> ";

        }
    }

    
    function getFruitsHomepage(){
        global $con;
        $query = "select * from products where product_cat = 3 and not (product_image = '') order by RAND() LIMIT 0,5";
        $run_query = mysqli_query($con,$query);
        while($rows = mysqli_fetch_array($run_query)){
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_delivery = $rows['product_delivery'];
            $product_cat = $rows['product_cat'];

            echo "<div class='veg'>
                    <a href='../index.html'><img src='Admin/product_images/$product_image' height='250px' width='300px'></a>
                    </div>";
            
            
        }
    }


    function getVegetablesHomepage(){
        global $con;
        $query = "select * from products where product_cat = 2 and not (product_image = '') order by RAND() LIMIT 0,4";
        $run_query = mysqli_query($con,$query);
        while($rows = mysqli_fetch_array($run_query)){
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_delivery = $rows['product_delivery'];
            $product_cat = $rows['product_cat'];

            echo "<div class='veg'>
                    <a href='#'><img src='Admin/product_images/$product_image' height='250px' width='300px' ></a>
                    </div>";
            
            
        }
    }

    function getCropsHomepage(){
        global $con;
        $query = "select * from products where product_cat = 1 and not (product_image = '') order by RAND() LIMIT 0,4";
        $run_query = mysqli_query($con,$query);
        while($rows = mysqli_fetch_array($run_query)){
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_delivery = $rows['product_delivery'];
            $product_cat = $rows['product_cat'];

            echo "<div class='veg'>
                    <a href='#'><img src='Admin/product_images/$product_image' height='250px' width='300px' ></a>
                    </div>";    
        }
    }

    function getProductDetails(){
        include("includes/db.php");
        global $con;
        if(isset($_GET['id'])){
            $prod_id = $_GET['id'];
            $query="select * from products where product_id=". $prod_id;
            $run_query = mysqli_query($con,$query);
            $resultCheck=mysqli_num_rows($run_query);
            if($resultCheck>0) {
                while($rows = mysqli_fetch_array($run_query)){
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_price = $rows['product_price'];
                    $product_delivery = $rows['product_delivery'];
                    $product_cat = $rows['product_cat'];
                    echo "<div>
                    <img src='Admin/product_images/$product_image' height='250px' width='300px' >
                    "." product title  :  ".$product_title."
                         </div>";
                    }
            }
    }
    }

    function getFarmerProducts() {
        include("../includes/db.php");
        global $con;
        $sess_phone_number=$_SESSION['phonenumber'];
        $query="select * from products where farmer_id in(select farmer_id from farmerregistration where farmer_phone=$sess_phone_number)";
        $run_query=mysqli_query($con,$query);
        $resultCheck=mysqli_num_rows($run_query);
        if($resultCheck>0) {   
            while($row=mysqli_fetch_assoc($run_query)){
                    $product_title =  $row['product_title'];
                    $image =  $row['product_image'];
                    $price =  $row['product_price'];
                    $id =     $row['product_id'];
                    $path = "../Admin/product_images/" . $image ;
        
                echo "
                    <div style = 'float:left;margin : 15px; margin-left:30px;padding :15px; border-style : outline; border:2px solid ;border-color:green; border-radius:10px;' >
                        <a href='../Details.php?id=$id'><img src='../Admin/product_images/$image' alt= 'Image Not Available' onerror=this.src='../Images/Website/noimage.jpg' 
                        style='height: 200px; width: 200px; border-style : double; border:2px solid ;border-color:brown;border-width:2px; border-radius:10px;'><br></a>
                        <div>
                        <p style='text-align:center; text-decoration:underline;'><b>$product_title</b></p>
                        <p style='text-align:center ;text-decoration:underline;'><b>Price : Rs $price</b></p>
                        </div>
                        </div> 
                        
                        ";
                }                     
           }       

    }    

?>
