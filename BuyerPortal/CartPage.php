<?php
     include("../Functions/functions.php");
?> 

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Cart Page</title>
     <!-- <link rel="stylesheet" type="text/css" href="../Styles/BuyerHomepage.css"> -->
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>

     <style>
          * {
               margin: 0;
               box-sizing: border-box;
          }


          .header {
               position: sticky;
               z-index: 100;
               top: 0rem;
               height: 69px;
               width: 100%;
               background-color: #00b300;
          }

          .select_element {
               width: 20px;
               background-color: transparent;
               border: none;
               text: none;
          }


          #logo {
               height: 66px;
               width: 100px;
               text-align: left;
               float: left;
          }

          .search_input {
               float: left;
               margin-left: 50px;
               margin-top: 20px;

          }

          .proicon {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          .dropdown {
               float: right;
               margin-right: 10px;
               margin-top: 20px;
          }

          .options {
               color: yellow;
               margin-left: 20px;
               width: 25px;
               margin-right: 50px;

          }

          .icon2 {
               float: right;
               margin-right: 10px;
               margin-top: 20px;

          }

          .loginz {
               float: right;
               margin-right: 20px;
               margin-top: 20px;
          }

          .headerdown {
               height: 50px;
               width: 100%;
          }

          .makeitgreen {
               color: #00b300;
          }

          .sel1 {
               color: green;
               float: left;
               margin-top: 3px;
          }

          .sel2 {
               border-color: green;
               color: green;
               float: left;
               margin-left: 600px;
               margin-top: 3px;
          }

          .sel3 {
               font-size: 20px;
               margin-top: 3px;
               float: right;
               margin-right: 5px;
          }



          #input1 {
               width: 220px;
               border: none;
          }


          #input1:active {
               background-color: tomato;
          }


          .wrapper {
               display: grid;
               grid-template-columns: 20% 20% 20% 20%;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               grid-column-gap: 20px;
               grid-row-gap: 10px;
               margin-left: 30px;
          }
            .icon{
                background-color: #FFD700;
                border-style:groove;
                border-width: 1px;
                font-size:15px;
                border-color:#000;
                /* border-start-end-radius: 25%; */
                 }
                
          
           button:focus {outline:0;}
           .left{
                margin-left:-7px;
                
           }
           .right{
                margin-left:-7px;
           }
           .add{
               background-color: transparent; 
                border:none;
               width:5px;
               margin-left:8px;
               height:20px;
          }
          
          .ladd{
               margin-right:10px;
          }
          .inputwrapper {
               float: left;
               border-style: double;
               text-align: center;
               margin-left: 80px;
               width: 280px;
               margin-bottom: 20px;
               clear: auto;
          }


          .inputwrapper:last-child {
               margin-right: 30px;
          }

          .addtocart {
               background-color: #FFD700;
          }

          .numberinput {
               width: 35px;
          }

          .content_item {
               text-align: center;
               justify-content: center;
          }

          .etc {
               margin-left: -40px;
               min-width: 90px;
               font-size: 20px;
          }

          .crop_items {
               color: green;
          }

          .footer {
               height: 70px;
               width: 100%;
               clear: both;
          }

          .payment {
               float: left;
               margin-left: 520px;
               font-size: 20px;
               margin-top: 25px;
          }

          .cash {
               float: left;
               margin-top: 0px;
               margin-left: 20px;
               margin-right: 20px;
          }

          .paytm {
               float: left;
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
               margin-left: 735px;
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

          * {
               box-sizing: border-box;
          }

          .tabley {
               width: 100%;

               border-style: solid;
               border-width: 2px;
               padding: 2px;
               /* margin:5px; */
          }

          .tabley th {
               text-align: center;
               border-style: solid;
               border-width: 2px;
               padding: 5px;
               margin: 5px;
          }

          .tdy {
               text-align: center;
               border-style: solid;
               border-width: 2px;
               padding: 10px;

          }

          .thy {
               background-color: #555;
               color: white;
          }

          .des {
               border-style: solid;
               border-width: 2px;
               /* border:ridge; */
          }

          .rs {
               margin-left: 10px;
               float: right;
          }

          .boxy {
               height: 150px;
               width: 20%;
               float: right;
               /* background-color:yellow;

 */
               border-style: ridge;
               border-color: #00b300;
               margin-top: 20px;
               margin-right: 20px;
               border-radius: 25%;
          }

          .totaly {
               float: left;
               text-align: left;
               font-size: 25px;
               padding: 20px;
               /*margin-top:120px;
     margin-left:20px; */
          }

          .checkout {
               border-radius: 25%;
               /* text-align:center; */
               background-color: #FFD700;

               margin-right: 75px;
               border-color: black;
               float: right;
               margin-top: -20px;
               /* margin-top:20px; */
               /* padding-top:10px; */
               width: 150px;
               height: 50px;
              transition:1s;
          }
          .checkout:hover{
               transition:1s;
               width: 170px;
               height: 70px;
               font-size:25px;
          }

          .empty {
               border-radius: 25%;
               border-style: solid;
               background-color: #FFD700;
               padding: 10px;
               margin-top: 20px;
               transition:1s;
               margin-left: 20px;
          }
          .empty:hover{
               transition:1s;
               width:170px;
               padding-top:7px;
               font-size:20px;

          
          }
          .cont {
               border-radius: 25%;
               border-style: solid;
               background-color: #FFD700;
               padding: 10px;
               margin-top: 40px;
               /* margin-left:46%; */
               transition:1s;
               
               

          }
          
  
          .cont:hover{
               padding-top:15px;
               padding-bottom:20px;
               transition:1s;
               width: 270px;
               height: 70px;
               font-size:22px;
          }

          #Deletionlink {
               color:#000;
          }
          #Deletionlink:hover {
               color: red;
               font-size: 22px;

          }
     </style>

</head>

<body>

     <div class="header">

          <a href="BuyerHomepage.php"><img id="logo" src="../portal_files/logo.jpg"></a>

          <div class="search_input">
               <form action="SearchResults.php" method="get" enctype="multipart/form-data">
                    <i class="fas fa-search" style="font-size:20px;color:white; "></i>
                    <input type="text" id="input1" name="search" placeholder="Search...">
               </form>
          </div>

          <div class="dropdown">
               <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" style="margin-top:-5px;"> </span></button>
               <ul class="dropdown-menu etc">
                    <?php
                    if (isset($_SESSION['phonenumber'])) {
                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../Includes/BuyerProfile.php'><label class='makeitgreen'>Profile</label></a></li>";

                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href='../Includes/logout.php'><label class='makeitgreen'>Logout</label></a></li>";
                    } else {
                         echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
                    }
                    ?>
          </div>
          <div class="proicon">
               <?php
                    if (!isset($_SESSION['phonenumber'])) {
                         echo "<a href='../auth/BuyerLogin.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
                    } else {
                         echo "<a href='BuyerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
                    }
                    ?>
          </div>


          <div class="icon2">
			<a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white ;">&#61562;</i></a>
			<span id="icon"> 5 </span>
		</div>

          <div class="loginz">
               <?php getUsername(); ?>
          </div>
     </div>

     <div class="headerdown">
          <div class="sel1 sel">
               <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">CROPS
                    <span class="caret"></span></button>
               <ul class="dropdown-menu  ">
                    <?php getCrops(); ?>
               </ul>
          </div>
          <div class="sel2 sel">
               <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">VEGETABLES </i>
                    <span class="caret"></span></button>
               <ul class="dropdown-menu ">
                    <?php getVegetables(); ?>
               </ul>
          </div>
          <div class="sel3 sel">
               <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">FRUITS </i>
                    <span class="caret"></span></button>
               <ul class="dropdown-menu ">
                    <?php getFruits(); ?>
               </ul>
          </div>
     </div>


     <!-- <div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Best Products </b></label></div><br>
     <hr>

     <div>
           <?php getProducts(); ?> 
     </div> -->
     <h2 class="item_heading">YOUR ITEMS : <?php totalItems();?></h2>

     <hr>
     <table class="tabley">
          <thead>
               <th class="thy">Sr no</th>
               <th class="thy"> Item Name</th>
               <th class="thy"> Unit Price</th>
               <th class="thy qua"> Quantity</th>
               <th class="thy">Subtotal</th>
               <th class="thy">Delete</i></th>
          </thead>

          <?php
               $total =0;
               global $con;
               $sess_phone_number = $_SESSION['phonenumber'];
               $sel_price = "select * from cart where phonenumber = '$sess_phone_number'";
               $run_price = mysqli_query($con,$sel_price);
    
               $qtycart = array();
               $i=0;
               while ($p_price = mysqli_fetch_array($run_price)) {
                   $product_id = $p_price['product_id'];
                   $_SESSION['qtycart'][$i] = $p_price['qty'];
               
                   $pro_price = "select * from products where product_id='$product_id'";
                   $run_pro_price = mysqli_query($con, $pro_price);
                   while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                       $product_title = $pp_price['product_title'];
                       $product_price = $pp_price['product_price'];
                       $subtotal = $_SESSION['qtycart'][$i]*$product_price;
           ?>


          <tr>
               <td class="tdy" data-label="Sr no"><?php echo $i+1 ; ?></td>
               <td class="des tdy" data-label="Item Name"><?php echo $product_title ; ?></td>
               <td class="tdy" data-label="Unit Price"><?php echo $product_price ; ?></td>
               <td class="tdy qua" data-label="quantity">
                    <form action="CartPage.php" method = "post">
                   
                         <input type="number" name = 'qty' value = '<?php echo $_SESSION['qtycart'][$i] ; ?>' style="width:60px;">
                         <input type="submit" name = "refresh" style="  background-color: #FFD700; border-style:solid; border-color:#000;border-radius:25% " value = "Refresh">
                         <?php 
   
                         ?>
                    </form>
                   
               </td>
               
               <td class="tdy" data-label="Subtotal"><?php echo $subtotal ; ?></td><?php $subtotal = 1;?>
               <td class="tdy" data-label="Deletion"><a href="#" id = "Deletionlink" ><i class="far fa-times-circle"></i></a></td>

          </tr>

          <?php  }$i++;} ?>
          <tr>
               <td class="tdy" data-label="Sr no">1</td>
               <td class="des tdy" data-label="Item Name">Best Patato of the world               </td>
               <td class="tdy" data-label="Unit Price">rs 2</td>
               <td class="tdy" data-label="quantity"><button class="add ladd"><i class=" icon left  fas fa-minus"></button ></i><input type="number" style="width:40px; "><button class="add radd"><i class="icon right  fas fa-plus"></button></i></td>
               <td class="tdy" data-label="Subtotal">4</td>
               <td class="tdy" data-label="Deletion"><a href="#" id = "Deletionlink" ><i class="far fa-times-circle"></i></a></td>

          </tr>
          <tr>
               <td class="tdy" data-label="Sr no">1</td>
               <td class="des tdy" data-label="Item Name">Best Patato of the world
               </td>
               <td class="tdy" data-label="Unit Price">rs 2</td>
               <td class="tdy" data-label="quantity"><input type="number" style="width:40px; "></td>
               <td class="tdy" data-label="Subtotal">4</td>
               <td class="tdy" data-label="Deletion"><a href="#" id = "Deletionlink" ><i class="far fa-times-circle"></i></a></td>

          </tr>
     </Table>
     <div class="up">

          <div class="boxy">
               <label class="totaly"> GRAND TOTAL : <label class="rs">Rs 35</label></label>
               <!-- <button class='checkout'> <i class='fas fa-shopping-cart' style=' background-color:#FFD700'></i></button> -->
               <a href="Checkout.php" style = "color:black;"><button class="checkout"><span>CHECKOUT</span> <label class="arrow"><i class="fas fa-arrow-right"></i></label></a>

          </div>

          <a href="emptyCart.php" style = "color:black;"><label class="empty">EMPTY CART <i class="fas fa-shopping-cart"></i></label></a>
          <br>
          <a href="BuyerHomepage.php" style = "color:black;"><label class="cont">CONTINUE SHOPING <i class="fas fa-shopping-bag"></i></label></a>


     </div>

























     <div class="footer">
          <hr>
          <label class="payment">Payment Options:-</label>
          <div class="cash"><img src="../Images/Website/cash.jpg" height="75px" width="125px"></div>
          <div class="patym"><img src="../Images/Website/petm.jpg" height="75px" width="125px"></div>
     </div><br><br>
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
               <a href="#" class="hypher" style="color:black;">agrocraft6@gmail.com</a>
          </div>

     </div>
     <div class="copy">
          <h5 style="test-align:center; padding-top:40px;margin-left:650px; background-color:'grey';">Copyright &copy; 2022 by www.AgroCraft.com</h5>
     </div>

</body>

</html>