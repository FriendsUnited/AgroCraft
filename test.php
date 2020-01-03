<!-- <?php 
	include("Functions/functions.php");
?> -->

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>PORTAL</title>
	<link rel="stylesheet" type="text/css" href="Styles/FarmerHomepage.css">
	<!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
	<!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="portal_files/bootstrap.min.css">
  	<script src="portal_files/jquery.min.js.download"></script>
  	<script src="portal_files/popper.min.js.download"></script>
  	<script src="portal_files/bootstrap.min.js.download"></script>
 </head>
<body>
	<!-- <div class="navbar"> -->
	<!-- <div class="flex-container"> -->
<div class="div">
	<img id="logo" src="portal_files/logo.jpg">

<ul id="list">
<!-- <li>	</li> -->
	
	<li id="list3"><i class="far fa-user-circle" style="font-size:30px; color: red"></i>
	</li>

	<li id="list2"> 
		<i class="fa" style="font-size:30px; color: red">&#61562;</i>
    <span id="icon"> 5 </span>

</li>

<li id="list1">
	<!-- <i class="fas fa-search" style="font-size:20px;color:red " ></i> -->
<div id="a">	<i class="fas fa-search" style="font-size:20px;color:red "></i>
</div>
<div id="b">
<input type="text" id="input1" name="search" placeholder="Search.."></div>
	
</li>
<li id="newlabel"><label id="login">Login/Sign up</label></li>



</ul>

</div>

<div id="opt">
<select id="bas" name="crops">
	<option class="items1" value="0" selected="" disabled="">crops</option>
	<option class="items1">rice </option>
	<option class="items1">bajra</option>
	<option class="items1">bajra</option>
</select>
<select id="cde" name="crops">
	<option class="items" value="0" selected="" disabled="">fruits</option>
</select>
<select id="abc" name="crops">
	<option class="items" value="0" selected="" disabled="">vegetables</option>
	
</select>


</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
  
    <div class="carousel-item">
      <img class="images1" src="portal_files/same1.jpg" height="500px" width="1300px" alt="...">
    </div>

   
    <div class="carousel-item active">
      <img class="images1" src="portal_files/same6.jpg" height="500px" width="1300px" alt="...">
    </div>
    <div class="carousel-item">
      <img class="images1" src="portal_files/same3.jpg" height="500px" width="1300px" alt="...">
    </div>
  
  </div>
</div>

  <a class="carousel-control-prev" href="file:///C:/Users/Ansh/Desktop/gitttttt/AgroCraft/AgroCraft/portal.html#carouselExampleIndicators" role="button" data-slide="prev">

    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="file:///C:/Users/Ansh/Desktop/gitttttt/AgroCraft/AgroCraft/portal.html#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>






























  <!-- <img src="portal_files/pic1.jpg"> -->
<!-- <table>
	<tr>
		<td>a<img src="portal_files/pic1.jpg"></td>
		<td><img src="portal_files/pic1.jpg"></td>
</tr>
<tr>
	<td><img src="portal_files/pic1.jpg"></td>
	<td><img src="portal_files/pic1.jpg"></td>

</tr>
</table>
 -->
<!-- <div class="picha">
	<img id="picha1 " src="portal_files/pic1.jpg">
	<img id="picha2 " src="portal_files/pic1.jpg">
</div> -->
<table class="tabless" > 
	<tr>
		<th rowspan="2" colspan="2"><a href="#"><img class="images "src="portal_files/pic1.jpg" ></a></th>
		<td><a href="#"><img class="images " src="portal_files/pic2.jpg" height="300px" width="400px"></a></td>
		<td><a href="#"><img class="images " src="portal_files/pic3.jpg" height="300px" width="400px" ></a></td>
	</tr>
		<td><a href="#"><img class="images "src="portal_files/Cherry-Heart.jpg" height="300px" width="400px"></a></td>
		<td><a href="#"><img class="images "src="portal_files/pic1.jpg"height="300px" width="400px"></a></td>
	<tr>
		
	</tr>
</table>


</table><br>
<div class=content_item><label>VEGETABLES</label></div>
	<div id="vegs">
<!-- 	<?php getVegetablesHomepage(); ?> -->
	<div class="veg">
		<img src="Images/Vegetables/patato.jpg" height="250px" width="300px" >
	</div>
	<div class="veg">
		<img src="Images/Vegetables/veg1.jpg" height="250px" width="300px">
	</div>
	<div class="veg">
		<img src="Images/Vegetables/brocoli.jpg"height="250px" width="300px">
	</div>
	<div class="veg">
		<img src="Images/Vegetables/Green Capsicum.jpg"height="250px" width="300px">
	</div>
</div>


<br>


<div class=content_item><label>CROPS </label></div>
<div id="crops">
<!-- <?php getCropsHomepage(); ?> -->
<div class="crop">
<img src="Images/Vegetables/patato.jpg" height="250px" width="300px" >
</div>
<div class="crop">
<img src="Images/Vegetables/veg1.jpg" height="250px" width="300px">
</div>
<div class="crop">
<img src="Images/Vegetables/brocoli.jpg"height="250px" width="300px">
</div>
<div class="crop">
<img src="Images/Vegetables/Green Capsicum.jpg"height="250px" width="300px">
</div>
</div>



<!-- <div class = "ProductItems">
	<div class="example"> -->
		<div class="wrapper">
		<div class="inputwrapper">
        	<img src="portal_files/Coconut.jpg" style="height: 100px; width: 100px;"><br><br>
        	
        	<label>Ramlal patotoes</label><br>
        	<label>PRICE:- 100 Rs/kg</label><br>
        		
        	<label id="shop2">Delivery by Farmer</label><br>Qty:-
        	
            <input class="numberinput" type="number" name="number"  >

            <button class="addtocart">ADD TO CART <i class="fas fa-shopping-cart "style=" background-color:#FFD700"></i></button><br>
       </div>   
       <div class="inputwrapper">
        	<img src="portal_files/Coconut.jpg" style="height: 100px; width: 100px;"><br><br>
        	
        	<label>Ramlal patotoes</label><br>
        	<label>PRICE:- 100 Rs/kg</label><br>
        		
        	<label id="shop2">Delivery by Farmer</label><br>Qty:-
        	
            <input class="numberinput" type="number" name="number"  >

            <button class="addtocart">ADD TO CART <i class="fas fa-shopping-cart "style=" background-color:#FFD700"></i></button><br>
       </div>     
         <div class="inputwrapper">
        	<img src="portal_files/Coconut.jpg" style="height: 100px; width: 100px;"><br><br>
        	
        	<label>Ramlal patotoes</label><br>
        	<label>PRICE:- 100 Rs/kg</label><br>
        		
        	<label id="shop2">Delivery by Farmer</label><br>Qty:-
        	
            <input class="numberinput" type="number" name="number"  >

            <button class="addtocart">ADD TO CART <i class="fas fa-shopping-cart "style=" background-color:#FFD700"></i></button><br>
       </div>       
         <div class="inputwrapper">
        	<img src="portal_files/Coconut.jpg" style="height: 100px; width: 100px;"><br><br>
        	
        	<label>Ramlal patotoes</label><br>
        	<label>PRICE:- 100 Rs/kg</label><br>
        		
        	<label id="shop2">Delivery by Farmer</label><br>Qty:-
        	
            <input class="numberinput" type="number" name="number"  >

            <button class="addtocart">ADD TO CART <i class="fas fa-shopping-cart "style=" background-color:#FFD700"></i></button><br>
       </div>            
	</div>
<!-- </div>
</div> -->
<!-- <div>
	<?php 
		
		getProducts(); ?>
</div> -->




</body></html>