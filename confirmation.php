<html>
<title>Home</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-camo.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
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
   <center> <h5>To All yg Visit Johor... Jommm Singgah BigDaddys Family Cafe !!! :)</h5></center><br/>
  <div class="w3-container" id="hashtag">   
    <h6>#VisitJohor</h6>
    <h6>#VisitJohorMakan</h6>
    <h6>#BigDaddysFamilyCafe</h6>
    </div>
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

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-white" style="margin-left:240px" >

    <!-- Navigation bar -->
  <div class="w3-container" id="apartment">
    <ul>
      <li><a href="http://localhost/BigDaddysCafe/cafe.php"><i class="fa fa-home w3-margin-right"></i>Cafe</a></li>
      <li><a class="active" href="http://localhost/BigDaddysCafe/page.php">Reservation</a></li>
      <li><a href="http://localhost/BigDaddysCafe/menu.php">Menu</a></li>
      <li><a href="http://localhost/BigDaddysCafe/order.php">Delivery</a></li>
      <li><a href="http://localhost/BigDaddysCafe/contact.php">Contact</a></li>
    </ul>       
 
    </div>
    
     <div class="w3-container w3-margin" id="reservation">
     <div class="w3-panel w3-border">   
     
<?php
if(isset($_POST['submit'])){
$errors = array(); // Initialize error array.
	
	// Check for a name.
	if (empty($_POST['first'])) {
		$errors[] = '';
	} else {
		$firstname = trim($_POST['first']);
	}
	
	// Check for a last name.
	if (empty($_POST['last'])) {
		$errors[] = '';
	} else {
		$lastname = trim($_POST['last']);
	}
	
	if (empty($_POST['phone'])) {
		$errors[] = '';
	} else {
		$phone = $_POST['phone'];
	}
	
	if (empty($_POST['email'])) {
		$errors[] = '';
	} else {
		$email = $_POST['email'];
	}
	
	if (empty($_POST['date'])) {
		$errors[] = '';
	} else {
		$date = $_POST['date'];
	}
	
	if (empty($_POST['event'])) {
		$errors[] = '';
	} else {
		$event = $_POST['event'];
	}      
     
     
       

   	      
   	       
	
	require_once ('mysql_connect.php');
	
	$query = "SELECT * FROM reservation where date = '".$date."'";
	$result = mysqli_query($dbc, $query);
	
   	if (mysqli_num_rows($result) > 0)
	{
	echo "<p>We're sorry your email or selected date already exist</p>
	<p><button class=\"w3-button w3-black w3-third\" onclick=\"location.href='page.php';\">Back</button></p>";

	}
	else
	{	
	echo " <p>First name: <b>$firstname</b></p>
	   	       	              <p>Last name: <b>$lastname</b></p>
	   	       		      <p>Phone number: <b>$phone</b></p>
	   	       		      <p>Email: <b>$email</b></p>
	   	       		      <p>Date: <b>$date</b></p>
	   	       		      <p>Event: <b>$event</b></p>
	   	       		    <p><button class=\"w3-button w3-black w3-third\" onclick=\"document.getElementById('done').style.display='block'\">Done</button></p>";
	   		     
	   	
		$query = "INSERT INTO reservation (firstname, lastname, phone, email, date, event) VALUES ('$firstname','$lastname','$phone','$email','$date','$event')";
   		$result = mysqli_query($dbc, $query);
   		
   		
   			   			   	    	
	} 
	mysqli_close($dbc);	   			   
   	}	   			       
   ?> 
    
    
    
 <!-- Subscribe Modal -->
 <div id="done" class="w3-modal">
   <div class="w3-modal-content w3-animate-zoom w3-padding-large">
     <div class="w3-container w3-white w3-center">
       <i onclick="document.getElementById('done').style.display='none'" class="fa fa-remove w3-button w3-xlarge w3-right w3-transparent"></i>
       <h2><center>Thank you for your reservation !</center></h2>
       <p><center>Your reservation had been scheduled, kindly whatsapp us at + 0134331204 to tell us your plan</center></p>
       <p><center>If you have a change of date or cancellation for the event,</center></p>
       <p><center> you can inform us from the number given</center></p>
       <form action = "page.php" method = "post">
       <button type="submit" class="w3-button w3-padding-large w3-black w3-margin-bottom" value="Submit">Home</button>
      
     </div>
   </div>
 </div>
     
    </div>
    </div>
    	<footer class="w3-container w3-padding-60 w3-black w3-center" style="margin-left:20px;">
         <p>@BigDaddysCafe</p>
         	  	 
         	</footer>
    </body>
    </html>