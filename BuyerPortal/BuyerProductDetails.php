<!-- <?php
     include("../Functions/functions.php");
     ?>  -->

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Buyer Product Detail</title>
     <!-- <link rel="stylesheet" type="text/css" href="../Styles/BuyerHomepage.css"> -->
     <!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
     <!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

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
          .ribbon{
              /* text-align: center; */
              height:200px;
              margin-left:10%;
              margin-top: 8%; 
          }
          .box{
            
            color: rgb(6, 36, 7);
            width: 350px;
             line-height: 40px; 
             float:center;
            margin: auto;
            text-align: center;
              margin-top: 50px;  
             padding: 5px; 
             border-style: outset; 
            /* border-width: 5px;
            border-radius: 16px; */
             border-color:lightgrey; 
            /* font-size:20px; */
            height: 400px;
            
        }
         .idk{
            /* text-align:center; */
             margin-top:10%; 
            
        }
        .textarea{
            width:50%;
            height:10%;
        }
        .one{
             /* width:35px; */
            text-align:center;
            background-color: #FFD700;
            /* float:left; */
            /* margin-right: 50%; */
        }
        .hen{
             float:right;
             margin-right: 
        }
        .newarrival{
             background:green;
             width:50px;
             color:white;
             font-size:12px;
             font-weight:bold;
        }
            .col-md-7 h2{
                 color:#555;
            }
            /* .col-md-7{
                 text-align: center;
            } */
            .price{
                 font-size:20px;
                 font-weight: bold;
                  padding-top: 20px; 
                 /* margin-left: 15%; */
                 color:darkolivegreen;

            }
            .some{
                 
                  font-weight: 10px; 
            } 
            .ri{
                 float:right;
            }
            input{
                 width:9%;
                 text-align: center;
            }
            .th{
                 background-color:#FFD700;
                 float:right;
            }
            .done{
                 float:left;
                 margin-left:10%;
            }
            .mid{
                 text-align:top;
                 
            }
            .bye{
margin-left:10%;
            }
            .happy{
                 float:right;
            }
            .doing{
            /* width:15px;    */
            text-align:center;
            background-color: #FFD700;
            float:right;
            /* float:left; */
            /* margin-right: 50%; */
            margin-bottom: 0px;
            bottom: 0px;
            margin-top:100px;
        
            }
            .mid{
                 text-align: center;
            }
            .midone{

            float:left;
            }
            .midd{
                 text-align: center;
                 /* margin-right:5%; */
                 float:right;

            }
            .nice{
                 border-color: gray;
                 border-width:5px;
                  border-style: outset; 
                  height: 400px;
                  margin-top: 50px;

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
				}
				else {
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= '../auth/BuyerLogin.php'><label class='makeitgreen'>Login</label></a></li>";
				}
			?>
		</div>
		<div class="proicon">
			<?php
		if (!isset($_SESSION['phonenumber'])) {
		 echo "<a href='../auth/BuyerLogin.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
		}
		else {
			echo "<a href='BuyerProfile.php'> <i class='far fa-user-circle' style='font-size:30px; color: white'></i></a>";
		}
		?>
		</div>
          <div class="icon2">
			<a href="CartPage.php"> <i class="fa" style="font-size:30px; color:white ;">&#61562;</i></a>
			<span id="icon"> <?php echo totalItems(); ?> </span>
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
     <div class="container">
          <div class="row">
               <div class="col-md-4">
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <div class="nice"> <img src="../FarmerPortal/logo.jpeg" class="d-block w-100" ></div>
    </div>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
               </div>
               <div class="col-md-4">
<label><p class="newarrival text-center">FRESH</p></label>
<div class="mid"><h2>Product title</h2></div><br>
<!-- <label class="price"> Price  </label><textarea class="some" disabled  rows="1" cols="7"></textarea> 
<div class="happy"><label class="price"> Stock  </label><textarea disabled  rows="1" cols="7"></textarea></div> <br>  -->

 <p class="price">Price<i class="fa fa-rupee fa-1x"></i> : 20 Rs</p>
<p class="price">Stock : 20 Kg</p>
<br><div class="mid"><label>Quantity</label>
<button class="one"> <i  class="fa fa-plus fa-1x"></i></button><input type="number" value="1"><button class="one"><i  class="fa fa-minus fa-1x"></i></button><br></div>





<br><button class="one">Save for Later<i class="fa fa-shopping-basket fa-2x"></i></button> <div class="ri">  <button class="one">Add to Cart<i  class="fa fa-cart-arrow-down fa-2x"></i> </button></div><br>
<br><br><i class="fa fa-truck fa-1x"></i><label>Delivery by farmer</label></div>
<div class="box"><br><h2> FARMER DETAILS </h2>

<br><label> Name: </label><label>name</label><br>
<label> Number: </label><label>name</label>
<br><label><div class="midd"><div class="midone"> Address:</div><textarea disabled cols="24" ></textarea> </div></label><label></label >
<button class="doing">Chat<i class="fa fa-comment fa-1x"></i></button></div>

<div class="col-md-4">


<br><div class="bye"><p class="some"><h2> Description</h2></p><br>
<p>this is description</p><br></div>
<!-- <label class="price"> Price  </label><textarea class="some" disabled  rows="1" cols="7"></textarea> <br>
<label class="price"> Stock  </label><textarea disabled  rows="1" cols="7"></textarea> <br> -->


               </div>
          </div>
          
     </div>
    <!-- <br><div class="bye"><p class="some"><h2> Description</h2></p><br>
<p>this is description</p><br></div>
<br><h3> FARMER DETAILS </h3>
<div class="box">
<br><label>Farmer Name: </label><label>name</label><br>
<label>Farmer Number: </label><label>name</label><div class="th" > <button>Message</button></div>
     </div> -->
<!-- <div class="box"><table column="2"> 
    <tr>
   <td rowspan="3" colspan="8"> <img class="ribbon" src="../FarmerPortal/logo.jpeg"> </td>
    <div class="idk"><td align="right"><label> title</label></td>
   <div class="hen">
   <tr ><td align="right">  <label> price:</label><textarea rows="1" cols="9">29</textarea ><label>Rs</label></td></tr>
   <tr ><td align="right" colspan="24"> <label> stock:</label><textarea rows="1" cols="9"></textarea><label>kg</label></td></tr></div>
   <tr><td  > <label> description</label></td></tr></div>
  <tr> <td><label>this is description</label></td></tr></table>
     <button class="one">add to cart</button><br><br>
     <h3><span> FARMER DETAILS </span></h3>
</div> 
     -->
    
     <!-- <div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Best Products </b></label></div><br>
     <hr> -->

 


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