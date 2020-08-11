<?php
session_start();
if(!isset($_SESSION["sess_email"])){
header("Location: order.php");
}
else
{
?>
<html>
<title>Delivery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-camo.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {
    font-family: Calibri;
    }


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:black;
   }

li {
    float: left;
   }

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

li a:hover:not(.active) {
    background-color: #111;
    }

.active {
    background-color: brown;
    }
</style>

<body class="w3-content w3-border-left w3-border-right">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-camo-brown w3-collapse w3-top" style="width:260px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
    <center><img src="Picture/symbol.jpg" style="width:160px;height:160px;"></center><br/>
    <hr>
   <center><p class=" w3-padding-medium">
   <img src="Picture/guest.jpg" class="w3-circle w3-margin-right" style="height:20px;width:20px" alt="Avatar"><b>Hi, <?php echo $_SESSION['username']; ?></b></p>
   </center>
   <hr><br/><br/><br/><br/><br/><br/><br/><br/>
<hr>
     
   <div class="w3-container " id="contact">  
      <h4>Contact</h4>
      <i class="fa fa-map-marker" style="width:30px"></i> No 28 Jalan Padi Emas 6/1 Bandar Baru Uda
      Johor Bahru 81200<br>
      <i class="fa fa-phone" style="width:30px"></i> Phone: 013-433 1204<br>
      <i class="fa fa-clock-o" style="width:30px"> </i> Opens at 5:00pm - 2:00am<br>           
      </div><br/>
      	<div class="w3-container w3-left w3-opacity w3-large">
      	Follow us on :  <i class="fa fa-facebook-official w3-hover-opacity"></i>
      	  <i class="fa fa-instagram w3-hover-opacity"></i>
      	 	 
      	</div>
      
</nav>
   
   <div class="w3-main w3-white" style="margin-left:240px" >
   
       <!-- Navigation bar -->
   <div class="w3-container" id="apartment" style="width: 755px">
       <ul>
         <li><a href="http://localhost/BigDaddysCafe/cafe.php"><i class="fa fa-home w3-margin-right"></i>Cafe</a></li>
         <li><a href="http://localhost/BigDaddysCafe/page.php">Reservation</a></li>
         <li><a href="http://localhost/BigDaddysCafe/menu.php">Menu</a></li>
         <li><a class="active" href="http://localhost/BigDaddysCafe/order.php">Delivery</a></li>
         <li><a href="http://localhost/BigDaddysCafe/contact.php">Contact</a></li>
	  <li class="w3-right"><a href="view_cart.php">Shopping cart</a></li>
       </ul>       
   </div>
   
   <?php # add_cart.php
   // This page adds painting to the shopping cart.
   if (is_numeric ($_GET['pid'])) { // Check for a print ID.
   
   	$pid = $_GET['pid'];
   	
   	// Set the page title and include the HTML header.
   	$page_title = 'Add to Cart';
   
   	// Check if the cart already contains one of these painting.
   	if (isset ($_SESSION['cart'][$pid])) {
   		$qty = $_SESSION['cart'][$pid] + 1;
   	} else {
   		$qty = 1;
   	}
   	
   	// Add to the cart session variable.
   	$_SESSION['cart'][$pid] = $qty;
   
   	// Display a message.
   	header("Location: view_cart.php");
   
   } else { // Redirect
   	header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/order.php");
   	exit();
   }
   
   ?>



   
</body>
</html>
<?php
}
?>