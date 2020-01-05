<?php
     session_start();

     $sess_phone_number = $_SESSION['phonenumber'];
     $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
     $run_price = mysqli_query($con,$sel_price);
     
     while ($p_price = mysqli_fetch_array($run_price)) {
         $product_id = $p_price['product_id'];
         $qty = $p_price['qty'];
     }
     if(isset($_SESSION['productcart']))
     {
          $currentNo = $_SESSION['counter']+1;

         $_SESSION['cart'][$currentNo] =   $product_id;
         $_SESSION['qtycart'][$currentNo] =   $qty;
         $_SESSION['counter'] = $currentNo;

     }
     else
     {
         $cart = array();
         $qtycart = array();

         $_SESSION['cart'][0] =   $product_id;
         $_SESSION['qtycart'][0] =   $qty;
         $_SESSION['counter'] = 0;

     }


?>