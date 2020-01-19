<?php
include('../Functions/functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
  <title>checkout </title>
  <style>
    .tabley {
      width: 100%;
      /* margin-right: 20px; */
    }

    .tabley th {
      text-align: center;
      border-style: solid;
      padding: 5px;
      margin: 5px;
    }

    .tdy {
      text-align: center;
      border-style: solid;
      border-width: 2px;
      padding: 10px;
    }

    th {
      background-color: #555;
      color: white;
    }

    * {
      margin: 0;
    }

    .add {
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-radius: 25%;
      padding: 20px;
      margin-left: 10px;
      margin-top: 5px;
      width: 100px;
      clear: both;
      text-align: center;

    }

    .edit {
      margin-left: 550px;
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-color: black;
      border-radius: 25%;
      padding: 20px;
      text-align: center;
      margin-bottom: 18px;
    }

    .place_odder {
      text-align: center;
      margin-top: 20px;
    }

    .lang {
      width: 20%;
      text-align: center;
      height: 100px;
      background-color: white;
      margin-left: 195px;
      margin-top: -120px;
      border-style: solid;
      border-width: 2px;
      padding: 10px;
      justify-content: center;
      border-radius: 5%;
      border-color: black;
    }

    .item {
      float: left;
      margin-top: -70px;
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-radius: 25%;
      padding: 20px;
      margin-left: 10px;
    }

    .payment {
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-color: black;
      border-radius: 25%;
      padding: 20px;
      text-align: center;
      float: left;
      clear: both;
      margin-left: 0px;
      font-size: 20px;
      margin-top: 20px;
    }

    .cash {
      clear: both;

      float: left;
      margin-top: 10px;
      margin-left: 220px;
      margin-right: 20px;
    }

    .patym {
      margin-top: 10px;
      margin-left: 20px;

      float: left;

    }

    .del_options {
      margin-left: 130px;
      margin-right: 25px;

    }

    .footer {
      height: 100px;
      width: 100%;
    }

    .a {
      height: 100px;
      width: 100%;
    }

    .selly {
      text-align: center;
      width: 100%;
      height: 40px;
    }

    .place_odder {
      float: right;
      border-color: black;
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-radius: 25%;
      padding: 20px;
      margin-left: 10px;
      margin-right: 20px;
    }

    .boxy {
      height: 150px;
      width: 20%;
      float: right;
      margin-top: -800px;
      margin-right: 20px;
    }

    .totaly {
      background-color: #f5ca0a;
      border-style: solid;
      border-width: 2px;
      color: black;
      border-radius: 25%;
      float: left;
      text-align: center;
      font-size: 25px;
      padding: 20px;
    }

    .rs {
      margin-left: 10px;
      float: right;
    }

    h3 {
      width: 100%;
      text-align: center;
      border-bottom: 1px solid #000;
      line-height: 0.1em;
      margin: 10px 0 20px;
    }

    h3 span {
      background: #fff;
      padding: 0 10px;
    }

    .morefooter {
      height: 100px;
      width: 100%;
      background-color: white;

    }

    .call {
      float: left;
      font-size: 20px;
      margin-left: 150px;
      margin-top: 25px;
    }

    .gmail {
      margin-top: 10px;
      float: right;
      margin-right: 150px;

    }

    .instagram {
      margin-top: 10px;
      float: left;
      margin-left: 420px;
    }

    .instaid {
      height: 10px;
      width: 100%;

    }

    .text {
      float: left;
      margin-left: 720px;
      margin-top: -50px;
    }

    .gmailid {
      float: right;
      margin-right: 80px;
      margin-top: -60px;
    }

    .copy {
      float: left;
      margin-top: -65px;
    }

    .bott {
      height: 100px;

      width: 100%;
    }

    .scam {
      margin-top: 20px;
      margin-left: 30px;
    }

    .header {
      font-family: 'Courgette', cursive;
      font-size: 50px;
      text-align: center;
    }

    .leaf {
      color: #00b300;
    }

    .images {
      height: 100px;
      width: 100px;
      margin-top: 10px;
    }

    .pay {
      font-size: 20px;
    }

    .hypher {
      margin-right: 20px;
    }

    input[type=radio] {
      border: 0px;
      width: 1.5%;
      height: 35px;
      margin-left: 100px;

    }
    

    .radios {
      margin-top: -30px;
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
</head>

<body>
  <div class="header">AGROCRAFT <i class="fas leaf fa-leaf"></i></div>
  <br>
  <div class="add">
    <label>1.</label><label class="del_add">DELIVERY ADDRESS</label></div>
  <form action="" method="post">
    <div class="sam"> <button name="change" class="edit">CHANGE ADDRESS</button></div>
    <?php
    if (!isset($_POST['change'])) {
      $sess_phone_number = $_SESSION['phonenumber'];
      $query = "select * from buyerregistration where buyer_phone = $sess_phone_number";
      $run_register_query = mysqli_query($con, $query);
      $row = mysqli_fetch_array($run_register_query);
      $addr  = $row['buyer_addr'];
      $_SESSION['deliveryaddress'] = $addr;
    }
    ?>
    <div class="lang">
      <textarea rows=5 cols=40 name="addr"><?php echo $addr ?></textarea>
    </div>

    <br>

    <?php
    if (isset($_POST['change']) && isset($_POST['addr'])) {
      $addr = $_POST['addr'];
      $sess_phone_number = $_SESSION['phonenumber'];
      $query1 = "update buyerregistration set buyer_addr = '$addr' where buyer_phone = $sess_phone_number";
      $run_register_query1 = mysqli_query($con, $query1);
      $_SESSION['deliveryaddress'] = $addr;
      if ($run_register_query1) {
        echo "<script>alert('address successfully updated');</script>";
        echo "<script>window.open('Checkout.php','_self')</script>";
      }
    }
    ?>


    <br><br><br><br><br>



    <label class=" item">2.ITEMS</label>

    <div class="del_options">

      <table class="tabley">
        <thead>
          <th class="thy">Sr no</th>
          <th class="thy">Item Name</th>
          <th class="thy">Quantity</th>
          <th class="thy">SubTotal</th>
          <!-- <th class="thy">Delivary Options</th> -->
d        </thead>
        <?php
        global $con;
        $del = 0;
        if (isset($_SESSION['phonenumber'])) {

          $sess_phone_number = $_SESSION['phonenumber'];
          $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
          $run_price = mysqli_query($con, $sel_price);
          $i = 1;
          while ($p_price = mysqli_fetch_array($run_price)) {
            $product_id = $p_price['product_id'];
            $qty = $p_price['qty'];
            $subtotal = $p_price['subtotal'];
            $pro_price = "select * from products where product_id='$product_id'";
            $run_pro_price = mysqli_query($con, $pro_price);
            while ($pp_price = mysqli_fetch_array($run_pro_price)) {
              $product_title = $pp_price['product_title'];
              $product_price = $pp_price['product_price'];
              $product_delivery = $pp_price['product_delivery'];
              if ($product_delivery == "no") {
                $del = 1;
              }
        ?>
              <tr>
                <td class="tdy" data-label="Sr no"><?php echo $i; ?></td>
                <td class="des tdy" data-label="Item Name"><?php echo $product_title; ?> </td>
                <td class="tdy" data-label="Quantity"><?php echo $qty; ?></td>
                <td class="tdy" data-label="Unit Price">Rs <?php echo $product_price * $qty; ?></td>

              </tr>


        <?php
            }
            $i++;
          }
        } ?>
      </table>

    </div>


    <br><br><br>


    <div class="delivary">
      <label class="totaly pay">3.Delivery Options :</label>
      <?php
      if ($del == 0) {
        echo "<input type='radio' class='radios' name='delivery' value='Self'><i style=' padding-left:15px;' class='fa fa-male fa-4x' aria-hidden='true'></i><label style='font-size:30px;padding-left:15px;'>Self</label>";
        echo "<input type='radio' class='radios' name='delivery' value='Farmer'><i style=' padding-left:15px;' class='fa fa-leaf fa-3x' aria-hidden='true'></i><label style='font-size:30px;padding-left:15px;'>Farmer</label>";
        echo "<input type='radio' class='radios' name='delivery' value='Courier'><i style=' padding-left:15px;' class='fa fa-truck fa-3x' aria-hidden='true'></i><label style='font-size:30px;padding-left:15px;'>Courier</label>";
      } else {
        echo "<input type='radio' class='radios' name='delivery' value='Self'><i style=' padding-left:15px;' class='fa fa-male fa-4x' aria-hidden='true'></i><label style='font-size:30px;padding-left:15px;'>Self</label>";
        echo "<input type='radio' class='radios' name='delivery' value='Courier'><i style=' padding-left:15px;' class='fa fa-truck fa-3x' aria-hidden='true'></i><label style='font-size:30px;padding-left:15px;'>Courier</label>";
      }
      ?>
    </div>

    <br><br><br>
    <div class="delivary">
      <label class="totaly pay">4.Payment Options :</label>
      <input type="radio" class="radios" name="payment" value="cod"> <img class="images" src="../Images/Website/cash.jpg">
      <input type="radio" class="radios" name="payment" value="paytm"> <img class="images" src="../Images/Website/petm.jpg ">
    </div>


    <div class="bott">
      <button name='order' class="place_odder">PLACE ORDER</button>
  </form>
  <?php
  if (isset($_POST['order'])) {
    $cart = "select * from cart where phonenumber = $sess_phone_number";
    $run_cart = mysqli_query($con, $cart);
    if ($run_cart) {
      while ($row = mysqli_fetch_array($run_cart)) {

        $id = $row['product_id'];
        $qty = $row['qty'];
        $product_total = $row['subtotal'];

        $payment = $_POST['payment'];

        $delivery = $_POST['delivery'];
        // $total = $_SESSION['grandtotal'];
        $address = $addr;

        $query = "insert into orders (product_id,qty,address,delivery,phonenumber,total,payment) values (
          '$id','$qty','$address','$delivery','$sess_phone_number','$product_total','$payment') ";
        $run_query = mysqli_query($con, $query);

        $del_query = "Delete from cart where phonenumber = $sess_phone_number";
        $run_del = mysqli_query($con, $del_query);
      }
      if ($run_del) {
        if ($_POST['payment'] == "paytm") {
          echo "<script>window.open('../Paytm/PaytmKit/TxnTest.php','_self')</script>";
        } else {
          echo "<script>alert('Product Ordered successfully !')</script>";
          echo "<script>window.open('BuyerHomepage.php','_self')</script>";
        }
      }
    }
  }
  ?>


  </div>



  <div class="up">

    <div class="boxy">
      <label class="totaly"> GRAND TOTAL : <label class="rs">Rs <?php echo $_SESSION['grandtotal'] ?></label></label>

      <label class="totaly scam">TOTAL ITEMS :<label class="rs"><?php echo totalItems(); ?></label></label>
    </div>



  </div>

  <h3><span> GET SOCIAL WITH US </span></h3>
  </div>

  <div class="morefooter">
    <div class="call">
      <i class="fas fa-phone-alt call_color"></i>
      <a href="#" style="color:black;">+91-8191046421</a>
    </div>

    <div class="instagram"><img src="../Images/Website/Insta.jpg" height="45px" width="60px">
    </div>

    <div class="gmail">
      <img src="../Images/Website/gmail.jpg" height="30px" width="50px">
    </div>

  </div>
  <div class="instaid">
    <div class="text"><a href="#" style="color:black;">@AgroCraft</a></div>
    <div class="gmailid">
      <a href="#" class="hypher" style="color:black;">agrocraft6@gmail.com</a></div>

  </div>


  <div class="copy">
    <h5 style="test-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2022 by www.AgroCraft.com</h5>
  </div>





</body>

</html>