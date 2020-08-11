    <!-- Navigation bar -->
<?php
session_start();
if(!isset($_SESSION["sess_email"])){
header("Location: order.php");
}
else
{
   require_once ('includes/header.php');
?>
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
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/slicknav.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css/magnific-popup.css"/>
  <link rel="stylesheet" href="css/animate.css"/>

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="css/style.css"/>


<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">





<section class="contact-page">
   
   


   <?php
?>
       <!-- Navigation bar -->
<?php
   require_once ('includes/header.php');
?>
   <br/>
  <div class="w3-content"style="margin-left:200px">
  <div class="cover w3-container menu w3-padding-32 w3-white">
  <div class="w3-card w3-left w3-white w3-container" style="width:45%">
  <h3 class="w3-center"><span class="w3-white w3-wide">My Order</span></span></h3><br/>
  <?php
 
   require_once 'mysql_connect.php';
   $page_title = 'My order';
   
   $query = 'SELECT * FROM delivery_prod WHERE id IN (';
   foreach ($_SESSION['cart'] as $key => $value) 
   {
        $query .= $key . ',';
   }
        $query = substr ($query, 0, -1) . ') ORDER BY name ASC';
        $result = mysqli_query ($dbc,$query);


	$total = 0; // Total cost of the order.
	while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
	$subtotal = $_SESSION['cart'][$row['id']] * $row['price'];
	$total += $subtotal;  
   echo " <p>{$row['name']}<span> X ". number_format ($_SESSION['cart'][$row['id']]) ."</span><span class=\"w3-right\"><b>RM ". number_format ($subtotal, 2) ." </b></span></p>
          \n";
 }
   echo " <hr><p>Total<span class=\"w3-right\"><b>RM " . number_format ($total, 2) . " </b></span></p><br/><br/>
          <a class=\"w3-button w3-left w3-hover-white w3-clear \" href=\"view_cart.php\"><i class=\"fa fa-angle-double-left\"></i> Back to view cart</a> \n";
   

   
?>
</div>
<div class="w3-card w3-right w3-margin-left w3-white w3-container" style="width:50%">
<h5 class="w3-center"><span class="w3-white w3-wide">My Details</span></h5><br/>

<?php
  require_once ('mysql_connect.php'); // Connect to the db.
   
   $username = $_SESSION['username']; 
    $phone = $_SESSION['phone'];	                             		
    	                             // Make the query.
    	$query = "SELECT * FROM user WHERE id = ".$_SESSION['id']."";		
    	$result = mysqli_query ($dbc, $query); // Run the query.
    	$num = mysqli_num_rows($result);
    	                             
    	if ($num > 0) { // If it ran OK, display the records.           
    	                                            	
    	                                            	
    	                             	// Fetch and print all the records.
    	while ($row = mysqli_fetch_assoc($result)) {	
   echo ' 
   	  <p class="w3-center w3-large">Address<span class=" w3-small w3-text-red"> 
          <a href="edit_address.php?id=' . $row['id'] . '";">Change </a> </td></span></p> 
          <p class="w3-large w3-center"><b>' . $row['address'] . '</b></p>
   	  <hr> '; 
	$address =  $row['address']; 
	     }
	}
echo " <p><i class=\"fa fa-user\"></i> ".$_SESSION['username']."</p> 
       <p><i class=\"fa fa-mobile\"></i> ".$_SESSION['phone']."</p>
       <hr>
       <p>Payment Method <b>(C.O.D)</b></p>
       <p class\"w3-large\"><i class=\"fa fa-money\"></i> Cash<span class=\"w3-right\">RM " . number_format ($total, 2) . " </span></p>
       <hr><br/><br/>

       <a class=\"w3-button w3-block w3-black \" href=\"confirmation_check.php\">Confirm Order <i class=\"fa fa-angle-double-right\"></i></a><br/><br/> \n";
    
?>
  </div>
  </div>
  </div>
    <html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</body>
</html>
<?php
      }
?>