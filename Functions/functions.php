 <?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "agrocraft");

    function getUsername()
    {
        if (isset($_SESSION['phonenumber'])) {
            $phonenumber = $_SESSION['phonenumber'];
            global $con;

            $query = "select * from buyerregistration where buyer_phone = $phonenumber";
            $run_query = mysqli_query($con, $query);
            if ($run_query) {
                while ($row_cat = mysqli_fetch_array($run_query)) {
                    $buyer_name = $row_cat['buyer_name'];
                    $buyer_name = 'Hello ,' . $buyer_name;
                }

                echo @"<label>$buyer_name</label>";
            }
        } else {
            echo "<label><a href = '../auth/BuyerLogin.php' style = 'color:white' >Login/Sign up</a></label>";
        }
    }


    function getFarmerUsername()
    {
        if (isset($_SESSION['phonenumber'])) {
            $phonenumber = $_SESSION['phonenumber'];
            global $con;

            $query = "select * from farmerregistration where farmer_phone = $phonenumber";
            $run_query = mysqli_query($con, $query);
            if ($run_query) {
                while ($row_cat = mysqli_fetch_array($run_query)) {
                    $buyer_name = $row_cat['farmer_name'];
                    $buyer_name = "Hello ," . $buyer_name;
                    echo "<label style = 'color:white; padding-top:7px;'>$buyer_name</label>";
                }
            }
        } else {
            echo "<label><a href = '../auth/FarmerLogin.php' style = 'color:white; padding-top:20px;' >Login/Sign up</a></label>";
        }
    }

    function CheckoutIdentify()
    {
        if (isset($_SESSION['phonenumber'])) {
            echo "<script>window.open('CartPage.php','_self')</script>";
        } else {
            echo "<script>window.open('../auth/BuyerLogin.php','_self')</script>";
        }
    }


    function getCrops()
    {

        global $con;

        $query = "select * from products where product_cat = 1 order by RAND() LIMIT 0,10";

        $run_query = mysqli_query($con, $query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_type = $row_cat['product_type'];
            echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../BuyerPortal/Categories.php?type=$product_type'> 
                    <label class='crop_items'>$product_type</label></a></li>";
        }
    }

    function getFruits()
    {

        global $con;

        $query = "select * from products where product_cat = 3 order by RAND() LIMIT 0,10";

        $run_query = mysqli_query($con, $query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_type = $row_cat['product_type'];
            echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../BuyerPortal/Categories.php?type=$product_type'> 
                    <label class='crop_items'>$product_type</label></a></li>";
        }
    }

    function getVegetables()
    {

        global $con;

        $query = "select * from products where product_cat = 2 order by RAND() LIMIT 0,10";

        $run_query = mysqli_query($con, $query);

        while ($row_cat = mysqli_fetch_array($run_query)) {
            $product_type = $row_cat['product_type'];
            echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../BuyerPortal/Categories.php?type=$product_type'> 
                    <label class='crop_items'>$product_type</label></a></li>";
        }
    }




    function getProducts()
    {
        global $con;
        $query = "select * from products  order by RAND() LIMIT 0,8";
        $run_query = mysqli_query($con, $query);
        echo "<br>";
        while ($rows = mysqli_fetch_array($run_query)) {
            $product_id = $rows['product_id'];
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_delivery = $rows['product_delivery'];
            if ($product_delivery == "yes") {
                $product_delivery = "Delivery by Farmer";
            } else {
                $product_delivery = "Delivery by Farmer Not Available";
            }
            echo " <div class='inputwrapper'>
                            <br>
                            <a href='../BuyerPortal/BuyerProductDetails.php?id=$product_id'><img src='../Admin/product_images/$product_image' alt= 'Image Not Available' onerror=this.src='../Images/Website/noimage.jpg' style='height: 100px; width: 100px;'><br><br></a>
                            <label>$product_title</label><br>
                            <label>PRICE:- $product_price Rs/kg</label><br>	
                            <label id='shop2'></label>$product_delivery<br>Qty:-
                            <form action = ''  method = 'post'>
                            <input class='numberinput' type='number' name='quantity' value = '1' >
                            </form>
                            <a href='../BuyerPortal/BuyerHomepage.php?add_cart=$product_id'><button class='addtocart'>ADD TO CART <i class='fas fa-shopping-cart' style=' background-color:#FFD700'></i></button></a><br><br>    
                        </div> ";
        }
    }



    function getVegetablesHomepage()
    {
        global $con;
        $query = "select * from products where product_cat = 2 and not (product_image = '') order by RAND() LIMIT 0,4";
        $run_query = mysqli_query($con, $query);
        while ($rows = mysqli_fetch_array($run_query)) {
            $product_id = $rows['product_id'];
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_delivery = $rows['product_delivery'];
            $product_cat = $rows['product_cat'];

            echo "  <div class='veg'>
                        <a href='../BuyerPortal/BuyerProductDetails.php?id=$product_id'><img src='../Admin/product_images/$product_image' height='250px' width='300px' ></a>
                    </div>";
        }
    }

    function getCropsHomepage()
    {
        global $con;
        $query = "select * from products where product_cat = 1 and not (product_image = '') order by RAND() LIMIT 0,4";
        $run_query = mysqli_query($con, $query);
        while ($rows = mysqli_fetch_array($run_query)) {
            $product_id = $rows['product_id'];
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_delivery = $rows['product_delivery'];
            $product_cat = $rows['product_cat'];

            echo "  <div class='veg'>
                        <a href='../BuyerPortal/BuyerProductDetails.php?id=$product_id'><img src='../Admin/product_images/$product_image' height='250px' width='300px' ></a>
                    </div>";
        }
    }
    //function  which is link with FarmerProductDetails
    function getFarmerProductDetails()
    {
        include("../includes/db.php");
        global $con;
        if (isset($_GET['id'])) {
            $prod_id = $_GET['id'];
            $query = "select * from products where product_id=" . $prod_id;
            $run_query = mysqli_query($con, $query);
            $resultCheck = mysqli_num_rows($run_query);
            if ($resultCheck > 0) {
                while ($rows = mysqli_fetch_array($run_query)) {
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_type = $rows['product_type'];
                    $product_stock = $rows['product_stock'];
                    $product_description = $rows['product_desc'];
                    $product_price = $rows['product_price'];
                    $product_delivery = $rows['product_delivery'];
                    $product_cat = $rows['product_cat'];
                    echo "<div>
                    <img src='../Admin/product_images/$product_image' height='250px' width='300px' ><br>"
                        . " product title  :  " . $product_title . "<br>"
                        . " product type  :  " . $product_type . "<br>"
                        . " product stock  :  " . $product_stock . "<br>"
                        . " product Description  :  " . $product_description . "<br>"
                        . " product price  :  " . $product_price . "<br>"
                        . " product Delivery  :  " . $product_delivery . "<br>"
                        . " product category  :  " . $product_cat . "<br>"
                        . "</div>";
                }
            }
        } else {
            echo "<br><br><hr><h1 align = center>Product Not Uploaded !</h1><br><br><hr>";
        }
    }

    // Checkout System Functions
    function cart()
    {
        if (isset($_SESSION['phonenumber'])) {
            if (isset($_GET['add_cart'])) {

                global $con;
                if (isset($_POST['quantity'])) {
                    $qty = $_POST['quantity'];
                } else {
                    $qty = 1;
                }
                $sess_phone_number = $_SESSION['phonenumber'];
                $product_id = $_GET['add_cart'];

                $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

                $run_check = mysqli_query($con, $check_pro);

                if (mysqli_num_rows($run_check) > 0) {
                    echo "";
                } else {
                    $insert_pro = "insert into cart (product_id,phonenumber) values ('$product_id','$sess_phone_number')";
                    $run_insert_pro = mysqli_query($con, $insert_pro);
                }

                echo "<script>window.open('BuyerHomepage.php','_self')</script>";
            }
        } else {
            // echo "<script>alert('Please Login First! ');</script>";
        }
    }

    //function which is link with FarmerHomePage
    function getFarmerProducts()
    {
        include("../includes/db.php");
        global $con;
        $sess_phone_number = $_SESSION['phonenumber'];
        $query = "select * from products where farmer_fk in (select farmer_id from farmerregistration where farmer_phone=$sess_phone_number)";
        $run_query = mysqli_query($con, $query);
        if ($run_query) {
            while ($row = mysqli_fetch_assoc($run_query)) {
                $product_title =  $row['product_title'];
                $image =  $row['product_image'];
                $price =  $row['product_price'];
                $id =     $row['product_id'];
                $path = "../Admin/product_images/" . $image;

                echo "
                    <div  class = 'productbox'  >
                        <a href='../FarmerPortal/FarmerProductDetails.php?id=$id'><img src='../Admin/product_images/$image' alt= 'Image Not Available' onerror=this.src='../Images/Website/noimage.jpg'><br></a>
                        
                        <div>
                            <p><b>$product_title</b></p>
                            <p><b>Price : Rs $price</b></p>
                        </div>

                    </div>";
            }
        } else {
            echo "<br><br><hr><h1 align = center>Product Not Uploaded !</h1><br><br><hr>";
        }
    }
    //function which is linked with BuyerProductDetails
    function getBuyerProductDetails()
    {
        include("../includes/db.php");
        global $con;
        // $sess_phone_number = $_SESSION['phonenumber'];
        if (isset($_GET['id'])) {
            $prod_id = $_GET['id'];
            $query = "select * from products where product_id=" . $prod_id;
            $run_query = mysqli_query($con, $query);
            $resultCheck = mysqli_num_rows($run_query);
            if ($resultCheck > 0) {
                while ($rows = mysqli_fetch_array($run_query)) {
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_type = $rows['product_type'];
                    $product_stock = $rows['product_stock'];
                    $product_description = $rows['product_desc'];
                    $product_price = $rows['product_price'];
                    $product_delivery = $rows['product_delivery'];
                    $product_cat = $rows['product_cat'];
                    echo "<div>
                        <img src='../Admin/product_images/$product_image' height='250px' width='300px' ><br>"
                        . " product title  :  " . $product_title . "<br>"
                        . " product type  :  " . $product_type . "<br>"
                        . " product stock  :  " . $product_stock . "<br>"
                        . " product Description  :  " . $product_description . "<br>"
                        . " product price  :  " . $product_price . "<br>"
                        . " product Delivery  :  " . $product_delivery . "<br>"
                        . " product category  :  " . $product_cat . "<br>"
                        . "<button href=''>ADD TO CART</button>"
                        . "</div>";

                    if (isset($_SESSION['phonenumber'])) {
                        $query = "select * from products where product_id=" . $prod_id;
                        $run = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($run)) {
                            $farmerid = $row['farmer_fk'];
                        }

                        $query = "select * from farmerregistration where farmer_id = $farmerid";
                        $run = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($run)) {
                            $farmer_name = $row['farmer_name'];
                            $farmer_phone = $row['farmer_phone'];
                            $farmer_address = $row['farmer_address'];
                        }
                        echo "farmer Name : " . $farmer_name . "<br>farmer Phone Number : " . $farmer_phone . "<br> Farmer Address" . $farmer_address;
                    }
                }
            }
        }
    }


    function totalItems()
    {
        global $con;
        if (isset($_SESSION['phonenumber'])) {
            $sess_phone_number = $_SESSION['phonenumber'];

            $get_items = "select * from cart where phonenumber = '$sess_phone_number'";
            $run_items =  mysqli_query($con, $get_items);
            $count_items =  mysqli_num_rows($run_items);
            return $count_items;
        } else {
            echo 0;
        }
    }


    function emptyCart()
    {
        global $con;
        $sess_phone_number = $_SESSION['phonenumber'];

        $get_items = "Delete from cart where phonenumber = '$sess_phone_number'";
        $run_items =  mysqli_query($con, $get_items);
        $count_items =  mysqli_num_rows($run_items);
    }


    function bestSeller()
    {
        global $con;
        
    }
    ?>

