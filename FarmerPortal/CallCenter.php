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
          .tab{
            width: 100%;
        
               border-style: solid;
               border-width: 2px;
               padding: 2px;
               

        }
        td{
            border-style: solid;
            border-width: 2px;
            font-size: 50px;
        }
        tr{
            border-style: solid;
        }
        th{
            border-color: grey;
            border-style: solid;
               border-width: 2px;
               padding: 2px;
               font-size: 22px;
              
        }
        .tableyhead{
            
            color: red;
        
        }
        .thy {
               background-color: #555;
               color: white;
               border-style: solid;
               
          }
          .trow{
              align-content: center;
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
					echo "<li class='options' role='presentation'><a role='menuitem' tabindex='-1' href= 'BuyerProfile.php'><label class='makeitgreen'>Profile</label></a></li>";
				
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

    <div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>Call Center , Location's & Langauges</b></label></div>
    <br>
    <h4 align="center">Phone Number : 9820835845</h4>
    <br>
    <table  class=tab>
        <thead  align="center" class=tableyhead>
        <th  class=thy>SR NO.</th>
        <th  class=thy>LOCATION</th>
        <th  class=thy>STATES</th>
        <th  class=thy >LANGUAGES</th>
        
        
    </thead>
    <tr align="center" class=trow>
    <th align="center" >1</th>
    <th align="center">Hyderabad</th>
    <th align="center">Andhra Pradesh</th>
    <th align="center">Telugu</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >2</th>
    <th align="center">Patna</th>
    <th align="center">Bihar | Jharkhand</th>
    <th align="center">Hindi</th>
    

    </tr>
    <tr align="center" class=trow>
    <th align="center" >3</th>
    <th align="center">Jaipur</th>
    <th align="center">Delhi | Rajasthan</th>
    <th align="center">Hindi</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >4</th>
    <th align="center">Ahmadabad/Anand</th>
    <th align="center">Gujarat | Dadra & Nagar Haveli | Daman & Diu</th>
    <th align="center">Gujarati | Goan</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >5</th>
    <th align="center">Chandigarh</th>
    <th align="center">Haryana | Punjab | Chandigarh | Himachal Pradesh</th>
    <th align="center">Hindi/Haryanvi | Punjabi | Hindi</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >6</th>
    <th align="center">Jammu</th>
    <th align="center">Jammu and Kashmir</th>
    <th align="center">Dogri, Kashmiri, Ladakh</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >7</th>
    <th align="center">Bangalore</th>
    <th align="center">Karnataka | Kerala | Lakshadweep</th>
    <th align="center">Kannada | Malayalam</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >8</th>
    <th align="center">Jabalpur</th>
    <th align="center">Madhya Pradesh | Chhattisgarh</th>
    <th align="center">Hindi</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >9</th>
    <th align="center">Nagpur/Pune</th>
    <th align="center">Maharashtra | Goa</th>
    <th align="center">Marathi | Goan</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >10</th>
    <th align="center">Coimbatore</th>
    <th align="center">Tamil Nadu | Puducherry | Andaman & Nicobar</th>
    <th align="center">Tamil</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >11</th>
    <th align="center">Kanpur</th>
    <th align="center">Uttar Pradesh | Uttarakhand</th>
    <th align="center">Hindi</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >12</th>
    <th align="center">Kolkata</th>
    <th align="center">West Bengal | Sikkim</th>
    <th align="center">Bengali | Sikkimese</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >13</th>
    <th align="center">Bhubaneshwar</th>
    <th align="center">Orissa</th>
    <th align="center">Oriya</th>
    
    </tr>
    <tr align="center" class=trow>
    <th align="center" >14</th>
    <th align="center">Guwahati</th>
    <th align="center">Arunachal Pradesh | Assam | Manipur | Meghalaya | Mizoram | Nagaland | Tripura</th>
    <th align="center">Adi | Assamese | Manipuri | Khasi | Mizo | Nagamese | Bengali</th>
    
    </tr>
</body>

</html>