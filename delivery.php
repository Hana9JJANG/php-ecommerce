<!DOCTYPE html>
<html lang="zxx">
<head>
 
  <meta charset="UTF-8">
  <meta name="description" content="EndGam Gaming Magazine Template">
  <meta name="keywords" content="endGam,gGaming, magazine, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Font -->
 

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>

  <link rel="stylesheet" href="css/slicknav.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css/magnific-popup.css"/>
  <link rel="stylesheet" href="css/animate.css"/>

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="css/style.css"/>




<?php
session_start();
if(!isset($_SESSION["sess_email"])){
header("Location: order.php");
}
else
{
?>   
       <!-- Navigation bar -->
<?php
   require_once ('includes/header.php');
?>



<section class="contact-page">

    <div class="container">
   

  <br/> 

 <div class="w3-white" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:900px">

      <h2 class="w3-wide w3-center">Board Games</h2>
      <p class="w3-opacity w3-center"><i></i></p><br>


      <!--
<div class="row">
        <div class="col-xl-9 col-lg-8 col-md-7">
          <ul class="blog-filter">
            <li><a href="#">Sort | low price</a></li>
            <li><a href="#">Shooters</a></li>
            <li><a href="#">Strategy</a></li>
            
          </ul>
        </div>
      </div>
-->
<div class="w3-container" >
<div class="w3-main w3-content w3-center "">
 
<div class="w3-row-padding w3-padding-16 w3-center" id="food">


<?php 

require_once ('mysql_connect.php');

$query = "SELECT * FROM delivery_prod";

$result = mysqli_query ($dbc,$query);

while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {

	
	// Display each record.
	if ($image = @getimagesize ("./Picture/{$row['image']}")) {
		echo "   


    <div class='w3-third w3-card w3-section w3-margin-bottom w3-container w3-white'>
    
		            <img id='l' src=\"./Picture/{$row['image']}\" alt=\"{$row['name']}\"   style='width:100%; height:20% class='w3-hover-opacity'>
		            <p><b>{$row['name']}</b></p>
		            <p class='w3-left'><b>RM{$row['price']}</b></p>
			    <p class='w3-right'><a class='w3-button w3-round-large w3-black'href =\"add_cart.php?pid={$row['id']}\">Add to cart</a></p><br/>

  
		            </div>";	
	} else {
		echo "<div align=\"center\">No image available."; 
	}
	
	
} 
	
?>
</div>
	   
</div>
</div>
</body>
   </html>
   <?php
   }
   ?>

<!-- <div class='w3-row-padding w3-padding-32' style='margin:0 -16px'>
        <div class='w3-third w3-margin-bottom'>
       <div class='w3-container w3-white'>
		            <img src=\"./Picture/{$row['image']}\" alt=\"{$row['name']}\"  
		            style='width:100%' class='w3-hover-opacity'>
                    <p><b>{$row['name']}</b></p>
		            <p class='w3-left'><b>RM{$row['price']}</b></p>
                    <p class='w3-right'><a class='w3-button w3-round-large w3-black'href =\"add_cart.php?pid={$row['id']}\">Add to cart</a></p><br/>
                    </div>


</div> </div>
         </div> </div>
 </div>  -->


<body style="background-color:black;">

</body>

   <html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

#l {
  height: 200px;
  width: 50%;
  background-color: white;
}
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
