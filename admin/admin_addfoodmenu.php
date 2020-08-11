<!DOCTYPE html>
<html>
<title> Admin: Big Daddy's Cafe </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Calibri">
<style>
body,h1,h2,h3,h4,h5 {font-family: "calibri", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-light-grey w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-100"><b>Big Daddy's Cafe Management</b></h3>   
  </div>
  
        <center><p id="demo"></p>
  	            
  	    	<script>
  	    	var d = new Date();
  	    	document.getElementById("demo").innerHTML = d.toDateString();
  	    	</script></center>
		      	  
  <div class="w3-bar-block">
    <a href="/Bigdaddyscafe/cafe.php" style="text-align: center;" class="w3-button w3-border w3-bar-item"> Go to Big Daddy's Website </a></center>
     <a href="admin-user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"> Customer </a>
    <a href="admin-reservation.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Reservations</a>
    <a href="admin-menu.php" onclick="w3-close()" class="w3-bar-item w3-button w3-hover-white">Menu </a>
    <a href="admin-product.php" onclick="w3-close()" class="w3-item w3-button w3-hover-white"> Delivery Product</a>
    <a href="admin-order.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Delivery Order</a>  
    <a href="admin-feedback.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"> Feedback</a>
  </div>

</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">?</a>
  <span>Big Daddy's Cafe Management</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<br></br>
      <h1 class="w3-xxlarge"><b>Admin Page</b></h1>
      <hr style="width:250px;border:3px solid black" class="w3-round"> 
      
  <div class="w3-container" style="margin-top:75px">
     <?php #  - add_product.php
       // This page allows the administrator to add a product.
       
       if (isset($_POST['submit'])) { // Handle the form.
       session_start();
       
       require_once ('mysql_connect.php'); // Connect to the database.

	// Validate the product name, image, supplier, price, and description.
       
       	// Check for a product name.
       	if (!empty($_POST['name'])) {
       		$name = addslashes($_POST['name']);
       	} else {
       		$name = FALSE;
       		echo '';
       	}
       	
       	// Check for a price.
       	if (is_numeric($_POST['price'])) {
       		$price = $_POST['price'];
       	} else {
       		$price = FALSE;
       		echo '';
       	}
	
	if (is_numeric($_POST['category'])) {
	       	$category = $_POST['category'];
	} else {
	       	$category = FALSE;
	       	echo '';
	}
       	

       		// Add the print to the database.       
       	$query = "INSERT INTO menu (id, name, price_1, price_2, category) VALUES ('','$name','$price','','$category')";
       	$result = mysqli_query($dbc, $query); 
	header("Location:admin-menu.php");
       	}
	       
       	else { // Display the form.
       ?>
  <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="524288">
  
    <h1 align="left" class="w3-large w3-text-grey"><b>Add Menu</b></h1>
      <table align="left">
      <tr><td style="padding-bottom: 10px;"><b> Name: </b> <input type="text" name="name" size="25" maxlength="60"  /></td></tr>
      <tr><td style="padding-bottom: 10px;"><b> Price: </b><input type="text" name="price" size="25" maxlength="60" required></td></tr>
      <tr><td style="padding-bottom: 10px;"><b> Category: </b><input type="text" name="category" value="<?php echo $_GET['id']?>" size="25" maxlength="60" required></td></tr><br>
      
      <tr><td><button type="submit" name="submit" value="Submit" style="width: 200px">Add </button></td></tr>

      
      </table>

    </form>
    <?php
    }
    ?> 
  
  </div>
  
  </body>
  </html>
  
  
	
	
	</body>