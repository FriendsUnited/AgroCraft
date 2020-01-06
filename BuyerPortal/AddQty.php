<?php
     include("../Functions/functions.php");
     if(isset($_GET['id'])) {
          $product_id = $_GET['id'];
          $sel_price = "select * from cart where product_id = '$product_id'";
          $run_price = mysqli_query($con,$sel_price);
          while ($p_price = mysqli_fetch_array($run_price)) {
              $qty = $p_price['qty'];
          }
          $qty +=1;
          $sel_price = "update cart set qty = '$qty' where product_id = '$product_id'";
          $run_price = mysqli_query($con,$sel_price);
          

          echo "<script>window.open('CartPage.php','_self')</script>";
     }
?>