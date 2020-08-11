<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
session_start();
if(!isset($_SESSION["sess_email"])){
header("Location: order.php");
}
else
{
    
   require_once ('includes/header.php');
?>
    <!-- Navigation bar -->

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
   
   </br>
   </br>
   </br>



       <!-- Navigation bar -->
       <center>
        <div class="w3-content">
  <div class="cover w3-container menu w3-padding-32 ">
  <div class="w3-card w3-center w3-white w3-container" >
  </br>

   <p class="w3-center w3-purple"><i class="fa fa-shopping-bag fa-5x" ></i></p>
   <h2 class="w3-center">Thank You </br></h2>
   <center><?php echo $_SESSION['username']; ?></center>
   <p class="w3-center w3-large">We'll see you soon</p>
   
  <?php
   $today = date("Ymd");
   $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
   $unique = $today . $rand;
   echo"
	<div class=\"w3-row-padding\" style=\"margin:0 60px\">
	<div class=\"w3-half w3-hover-opacity-off\">
	        <h4 class=\"w3-center w3-purple\">Order Number</h4>
	        <p class=\"w3-center\">".$unique."</p>
	</div>
	<div class=\"w3-half \">
	        <h4 class=\"w3-center w3-purple\">COD</h4>
	        <p class=\"w3-center\">within 3 days</p>
	</div>
	</div> \n";
	     
   require_once ('mysql_connect.php'); // Connect to the db.
   
    $username = $_SESSION['username']; 
    $phone = $_SESSION['phone'];	  
    $uid = $_SESSION['id'];	                           		
    	                             // Make the query.
    	$query = "SELECT * FROM user WHERE id = ".$_SESSION['id']."";		
    	$result = mysqli_query ($dbc, $query); // Run the query.
    	$num = mysqli_num_rows($result);
    	                             
    	if ($num > 0) { // If it ran OK, display the records.           
    	                                            	
    	                                            	
    	                             	// Fetch and print all the records.
    	while ($row = mysqli_fetch_assoc($result)) {	    	
	$address = $row['address'];  	
	$email = $row['email'];
		     	     }
	}
  

   
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
        $queryint = "INSERT INTO orders(id, prod_name, quantity, price, order_number, address, cust_id, cust_phone) VALUES ('','{$row['name']}','".($_SESSION['cart'][$row['id']])."','$subtotal','$unique','$address','$uid', '$phone')";
        $resultin = mysqli_query($dbc, $queryint);

        
  }
  // Load Composer's autoloader
  require 'vendor/autoload.php';
  
  // Instantiation and passing `true` enables exceptions
  $mail = new PHPMailer(true);
  
  try {
      //Server settings
      //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
      $mail->isSMTP();                                            // Set mailer to use SMTP
      $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = '';                     // SMTP username insert your email
      $mail->Password   = '';                               // SMTP password insert your password email
      $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to
      $mail->SMTPOptions = array(
         'ssl' => array(
             'verify_peer' => false,
             'verify_peer_name' => false,
             'allow_self_signed' => true
         )
     );
      //Recipients
      $mail->setFrom('ohnana@noreply.com', 'Mailer');
      $mail->addAddress($email);     // Add a recipient
  
      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Ohnana Store';
      $mail->Body    = 'Hi, Thank you for shopping with us ! <b>Your order will be delivery soon !</b>';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
      $mail->send();
      echo 'Confirmation mail has been sent';
  } catch (Exception $e) {
      echo "Confirmation mail could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
  echo"<center><a class=\"w3-button w3-black \" href=\"destroy_session.php\">Done</a><br/><br/></center> \n";   

   
?>
   
   </div>
   </div>
   </div>
   </br></br>
   </br>
   </br>
</br>
   </br>
   </br>
</br>
   </br>
   </br>

   </br>
   </br>


<?php
}
?>
<footer class="footer-section">
    <div class="container">
      
    
      <ul class="main-menu footer-menu">
        <li><a href="">Home</a></li>
        <li><a href="">Games</a></li>
        <li><a href="">Reviews</a></li>
        <li><a href="">News</a></li>
        <li><a href="">Contact</a></li>
      </ul>
      <div class="footer-social d-flex justify-content-center">
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-behance"></i></a>
      </div>
      <div class="copyright"><a href="">Colorlib</a> 2018 @ All rights reserved</div>
    </div>
  </footer>







