<!-- <?php 
	 include("../Functions/functions.php");
?>  -->

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Agrocraft Homepage</title>
	<!-- <link rel="stylesheet" type="text/css" href="../Styles/BuyerHomepage.css"> -->
	<!-- <link rel="stylesheet" href="portal_files/font-awesome.min.css"> -->
	<!-- <script src="../portal_files/c587fc1763.js.download" crossorigin="anonymous"></script> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="../portal_files/bootstrap.min.css">
  	<script src="../portal_files/jquery.min.js.download"></script>
  	<script src="../portal_files/popper.min.js.download"></script>
	<script src="../portal_files/bootstrap.min.js.download"></script>
	  
	<style>
			*{
			margin: 0;
			box-sizing:border-box;
		}
		

		.header{
			position: sticky;
			z-index:100;
			top :0rem;
		height: 69px;
		width: 100%;     
		background-color:  #00b300  ;
		}
		.select_element{
		width:20px;
		background-color:transparent;
		border:none;
		text:none;
		}

	
		#logo {
			height: 66px;
			width: 100px;
			text-align: left;
			float: left;
		}
		.search_input{
		float:left;
		margin-left: 50px;
		margin-top: 20px;
		
		}
		.proicon{
		float: right;
		margin-right: 10px;
		margin-top: 20px;
		}
		.dropdown{	float: right;
		margin-right: 10px;
		margin-top: 20px;


		}
		.options{
			/* font-weight:bold; */
			color:yellow;
			margin-left:20px;
			width:20px;
			
		 } 
		.icon2{
		float: right;
		margin-right: 10px;
		margin-top: 20px;

		}
		#login{
			float:left ;
		/* margin-right: -70px; */
		
		margin-left: 870px;
		/* margin-right: 10px; */
		margin-top: 20px;
		

		}
		 .headerdown{
			height:50px;
			width:100%;
			/* background:red; */
			
		}
		.makeitgreen{
			color:  #00b300;
		}

.sel1{
	/* border-style:groove; */
    color:green;
	float:left;
	/* border-color: #00b300; */
	/* border-radius:25%; */
	margin-top:3px;
}
	.sel2{
		border-color:green;
		color:green;
		float:left;
		margin-left:600px;
		/* border-style:groove; */
		/* border-color: #00b300; */
		/* border-radius:25%; */
		margin-top:3px;
	}
	
	.sel3{
		font-size:20px;
		margin-top:3px;
		float:right;
		margin-right:5px;
		/* border-style:groove; */
		/* border-color: #00b300; */
		/* border-radius:25%; */
		
	}

		.slideshow{
			margin-top: 10px;
			margin-left: 100px;
			margin-bottom: 20px;
			/*background-color: black;*/
		}


		#input1 {
			width:220px;
			border:none;

			}


		#input1:active {
			background-color: tomato;

		}

		#opt {
			height: 50px;
			width: 100%;
			background-color: red;
			padding-top: 0px;
			margin-top: 0px;
		}

		#bas {
			float: left;
			/*margin-top: 15px;*/
			background-color: #FFD700;
			height: 50px;
		}



		#abc {
			float: right;
			/*margin-top: 15px;*/
			background-color: #FFD700;
			height: 50px;
		}
		#cde {
			float: left;
			margin-left: 680px;
			/*margin-top: 15px;*/
			background-color: #FFD700;
			height: 50px;
		}


		.carousel-indicators {
			list-style: none;
			background-color: transparent;
		}

		.carousel-item {
			/* margin-left: 110px;
		margin-top: 25px;
			align-items: center;
		justify-content: center;
			padding-left: 110px;
			padding-top: 100px;
			overflow: hidden;
			display: grid;
			grid-template-columns: 80%; */
		}

		.carousel-control-prev {
			margin-left: 60px;
			/*color: red;*/
			margin-top: 10px;
		}

		.carousel-control-next{
			margin-right: 60px;
		}

		.wrapper
		{
			display: grid;
			grid-template-columns: 20% 20% 20% 20%;


			grid-column-gap: 20px;
			grid-row-gap: 10px;
		grid-column-gap: 20px;
		grid-row-gap: 10px;
		margin-left: 30px;

		}

		.inputwrapper{


		float: left;
		border-style: double;
		text-align: center;
		margin-left: 80px;
		width: 300px;
		margin-bottom:20px;
		clear:auto;
		}
		.inputwrapper:last-child{
			grid-column-gap: 20px;
			grid-row-gap: 10px;
			margin-left: 30px;
		}

		.inputwrapper{
			float: left;
			border-style: double;
			text-align: center;
			margin-left: 80px;
			width: 300px;
			margin-bottom:20px;
			clear:auto;
			}


		.inputwrapper:last-child
		{
		margin-right:30px; 
			/*background-color: red;*/
		}

		.carousel-control-next {
			margin-right: 60px;
		}



		.addtocart{
			background-color: #FFD700;
		}

		.numberinput{
		width:35px;

		}

		.tabless{
			border-collapse: separate ;
			border-spacing: 20px;
			padding: 20px;
			border-style: solid;
			margin: 10px;
			/*background-color: red;*/
			border-width: 5px;
					border-radius: 16px;
					border-color:black;
					text-align: center;
					align-items: center;
		min-width: 500px;
		margin-left:100px;
		}


		.picha{
			height: 300px;
		width: 500px;
		background-color: red;
		}
		.images{
		min-width: 400px;
			box-shadow: 5px 5px 10px grey;
		}

		.images1{

		}
		#heading {
			font-size: 20px;
			color: white;
			text-align: center;
			background-color: black;
			justify-content: center;
		}

		.head1 {}

		.addtocart {
			background-color: #FFD700;
		}
		.bestselers{
			background-color: red;
			border-style: solid;
			float: left;
			margin-top: 10px;
			/*margin: 20px;*/
		margin-bottom: 10px;
			margin-right: 40px;
			margin-left: 45px;}
		.bestselers:last-child{
		margin-right: 50px;
		}


		#fruits{
			text-align: center;
		}
		.veg{
		
			float:left;

			margin-left: 30px;
			border-style: solid;
			margin-top: 10px;
		}
		#vegs{
		height: 270px;
			width: 1498px;
			/*margin: 20px;*/
			margin-right: 10px;
			margin-left: 10px;
			/*background-color: blue;*/
			border-style: double;
			margin-top: 20px;

		}
		.veg:first-child{
			margin-left:80px;
		}
		.veg:last-child{
			margin-right: 20px;
		}
		#crops{
		height: 270px;
			width: 1498px;
			/*margin: 20px;*/
			margin-right: 10px;
			margin-left: 10px;
			/*background-color: blue;*/
			border-style: double;
			margin-top: 20px;

		}
		.crop:first-child{
			margin-left:80px;
		}
		.crop:last-child{
			margin-right: 20px;
		}
		.crop{
		/*    height: 210px;
			width: 300px;
		*/
			float:left;
		/*  height: 200px;
			width: 300px;*/
			margin-left: 30px;
			border-style: solid;
			margin-top: 10px;
		}
		.content_item{
		text-align: center;
		justify-content: center;

		}
		.etc{
		margin-left:-40px;
			min-width:90px;
			font-size:20px;
			
		}
		.crop_items{
			color:green;
		}
		
			</style>
</head>
<body>







<div class="header" >
	
	<a href="BuyerProfile.php"><img id="logo" src="../portal_files/logo.jpg"></a>
	    
	<div class="search_input">
		<i class="fas fa-search" style="font-size:20px;color:white; " ></i>
		<input type="text" id="input1" name="search" placeholder="Search..">
	</div>
	<div class="dropdown">
		<!-- <select class="select_element" name="drop">
			 <option class="options option1" value="0"></option> -->
			<!-- <option  class="options " value="profle"><label class="abcde">PROFILE</label></option>
			<option class="options "value="logout">LOGOUT</option>
			 -->
		<!-- </select>  -->

		<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">	</span></button>
    <ul class="dropdown-menu etc" >
      <li  class="options" role="presentation"><a role="menuitem" tabindex="-1" href="#"><label class="makeitgreen" >Profile</label></a></li>
      <li class="options" role="presentation"><a role="menuitem" tabindex="-1" href="#"><label class="makeitgreen">Logout</label></a></li>
      
	</div>	
	<div class="proicon">
		
    <i class="far fa-user-circle" style="font-size:30px; color: white"></i>


		<!-- <a href="BuyerProfile.php"> <i class="far fa-user-circle" style="font-size:30px; color: white"></i></a> -->
	</div>

	<div class="icon2">
		<a href="#"> <i class="fa" style="font-size:30px; color:white">&#61562;</i></a>
		<span id="icon"> 5 </span>
	</div>
	
	
	<div class="loginz">
	<!-- <?php getUsername(); ?> -->
		<label id="login">Login/Sign up</label>
	</div>
</div>

<div class="headerdown">
<div class="sel1 sel">
<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">	CROPS
     <span class="caret"></span></button>
   	 <ul class="dropdown-menu  " >
      	<li  class="options crop_items" role="presentation"><a role="menuitem" tabindex="-1" href="#">
			  <label class="crop_items">Rice</a></li></label>
		 <li class="options" role="presentation"><a role="menuitem" tabindex="-1" href="#"> <label class="crop_items">Bajra</label></a></li>
		 </div>
<div class="sel2 sel">
		 <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">VEGETABLES	</i>
	 <span class="caret"></span></button>
   	 <ul class="dropdown-menu " >
     	<li  class="options" role="presentation"><a role="menuitem" tabindex="-1" href="#"> <label class="crop_items">POTAT0</label></a></li>
		  <li class="options" role="presentation"><a role="menuitem" tabindex="-1" href="#"> <label class="crop_items">BROCOLI</label></a></li></ul>
</div>	
<div class="sel3 sel"	>  
         <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">FRUITS	</i>
   	   <span class="caret"></span></button>
   	   <ul class="dropdown-menu " >
         <li  class="options" role="presentation"><a role="menuitem" tabindex="-1" href="#"> <label class="crop_items">CHICKOO</label></a></li>
         <li class="options" role="presentation"><a role="menuitem" tabindex="-1" href="#"> <label class="crop_items">ORNAGE</label></a></li></ul>
      	</div>




	</div>

 
 <div class="slideshow">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">
		
			<div class="carousel-item">
				<img class="images1" src="../portal_files/same1.jpg" height="500px" width="1300px" alt="..." >
			</div>
			<div class="carousel-item active">
				<img class="images1" src="../portal_files/same6.jpg" height="500px" width="1350px" alt="...">
			</div>
			<div class="carousel-item">
				<img class="images1" src="../portal_files/same3.jpg" height="500px" width="1350px" alt="...">
			</div>
		</div>	
	</div>
</div>

  <a class="carousel-control-prev" href="" role="button" data-slide="prev">

    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>










<table class="tabless" > 
	<tr>
		<th rowspan="2" colspan="2"><a href="#"><img class="images "src="../portal_files/pic1.jpg" ></a></th>
		<td><a href="#"><img class="images " src="../portal_files/pic2.jpg" height="300px" width="400px"></a></td>
		<td><a href="#"><img class="images " src="../portal_files/pic3.jpg" height="300px" width="400px" ></a></td>
	</tr>
		<td><a href="#"><img class="images "src="../portal_files/Cherry-Heart.jpg" height="300px" width="400px"></a></td>
		<td><a href="#"><img class="images "src="../portal_files/pic1.jpg"height="300px" width="400px"></a></td>
	<tr>
		
	</tr>
</table>


</table><br>
<div class=content_item><label style = "font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Fresh Vegetable's</b></label></div>
	<div id="vegs">
	<?php getVegetablesHomepage(); ?>
	<!-- <div class="veg">
		<img src="../Images/Vegetables/patato.jpg" height="250px" width="300px" >
	</div>
	<div class="veg">
		<img src="../Images/Vegetables/veg1.jpg" height="250px" width="300px">
	</div>
	<div class="veg">
		<img src="../Images/Vegetables/brocoli.jpg"height="250px" width="300px">
	</div>
	<div class="veg">
		<img src="../Images/Vegetables/Green Capsicum.jpg"height="250px" width="300px">
	</div> -->
</div>


<br>


<div class=content_item><label style = "font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Fresh Crop's</b></label></div>
<div id="crops">
<?php getCropsHomepage(); ?>
<!-- <div class="crop">
<img src="../Images/Vegetables/patato.jpg" height="250px" width="300px" >
</div>
<div class="crop">
<img src="../Images/Vegetables/veg1.jpg" height="250px" width="300px">
</div>
<div class="crop">
<img src="../Images/Vegetables/brocoli.jpg"height="250px" width="300px">
</div>
<div class="crop">
<img src="../Images/Vegetables/Green Capsicum.jpg"height="250px" width="300px">
</div> -->
</div>


<div class=content_item><label style = "font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Best Products </b></label></div>
	<?php getProducts(); ?>
	<?php getBuyerProductDetails(); ?>
		<!-- <div class="inputwrapper">
        	<img src="../portal_files/Coconut.jpg" style="height: 100px; width: 100px;"><br><br>
        	
        	<label>Ramlal patotoes</label><br>
        	<label>PRICE:- 100 Rs/kg</label><br>
        		
        	<label id="shop2">Delivery by Farmer</label><br>Qty:-
        	
            <input class="numberinput" type="number" name="number"  >

            <button class="addtocart">ADD TO CART <i class="fas fa-shopping-cart "style=" background-color:#FFD700"></i></button><br>
       </div>   
       <div class="inputwrapper">
        	<img src="../portal_files/Coconut.jpg" style="height: 100px; width: 100px;"><br><br>
        	
        	<label>Ramlal patotoes</label><br>
        	<label>PRICE:- 100 Rs/kg</label><br>
        		
        	<label id="shop2">Delivery by Farmer</label><br>Qty:-
        	
            <input class="numberinput" type="number" name="number"  >

            <button class="addtocart">ADD TO CART <i class="fas fa-shopping-cart "style=" background-color:#FFD700"></i></button><br>
       </div>     
         <div class="inputwrapper">
        	<img src="../portal_files/Coconut.jpg" style="height: 100px; width: 100px;"><br><br>
        	
        	<label>Ramlal patotoes</label><br>
        	<label>PRICE:- 100 Rs/kg</label><br>
        		
        	<label id="shop2">Delivery by Farmer</label><br>Qty:-
        	
            <input class="numberinput" type="number" name="number"  >

            <button class="addtocart">ADD TO CART <i class="fas fa-shopping-cart "style=" background-color:#FFD700"></i></button><br>
       </div>       
         <div class="inputwrapper">
        	<img src="../portal_files/Coconut.jpg" style="height: 100px; width: 100px;"><br><br>
        	
        	<label>Ramlal patotoes</label><br>
        	<label>PRICE:- 100 Rs/kg</label><br>
        		
        	<label id="shop2">Delivery by Farmer</label><br>Qty:-
        	
            <input class="numberinput" type="number" name="number"  >

            <button class="addtocart">ADD TO CART <i class="fas fa-shopping-cart "style=" background-color:#FFD700"></i></button><br>
       </div>             -->
	<!-- </div> -->
 <!-- </div> -->
<!-- </div> 





</body>
</html>