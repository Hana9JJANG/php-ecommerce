<?php
session_start();
?>
<html>
<title>Menu</title>
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
   
   <div class="w3-main w3-white" style="margin-left:240px" >
   
       <!-- Navigation bar -->
<?php
   require_once ('includes/header.php');
?>

<div class="w3-container lol w3-white w3-padding-large w3-large" id="menu"  style="margin-left:20px">
  <div class="w3-content">
  
     <h2 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">BIG DADDY'S MENU</span></h2>
    <div class="w3-row w3-center w3-border  w3-black w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">DISHES</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">DRINKS</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
                    <div class="w3-col s4 tablink w3-padding-large w3-hover-red">BIG DADDY'S SPECIAL</div>
                  </a>      
    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
     <div class="w3-card w3-white w3-container" style="min-height:360px">
     <p><b>MAIN DISHES</b></p>
       <?php
                             require_once ('mysql_connect.php'); // Connect to the db.
                             		
                             // Make the query.
                             $query = "SELECT * FROM menu where category = 6";		
                             $result = mysqli_query ($dbc, $query); // Run the query.
                             $num = mysqli_num_rows($result);
                             
                             if ($num > 0) { // If it ran OK, display the records.           
                                            	
                                            	
                             	// Fetch and print all the records.
                             	while ($row = mysqli_fetch_assoc($result)) {
                             		echo ' <p><b>' . $row['name'] . '</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_1'] . '</span></p>	';		 
                             	
                             	}                
                             
                          	
                             	
                             	mysqli_free_result ($result); // Free up the resources.	
                             }
                             	
                             
                                        	?>
    </div>
     <div class="w3-card w3-container" style="min-height:360px">
         <p><b>RICE</b></p>
           <?php
                                 require_once ('mysql_connect.php'); // Connect to the db.
                                 		
                                 // Make the query.
                                 $query = "SELECT * FROM menu where category = 8";		
                                 $result = mysqli_query ($dbc, $query); // Run the query.
                                 $num = mysqli_num_rows($result);
                                 
                                 if ($num > 0) { // If it ran OK, display the records.           
                                                	
                                                	
                                 	// Fetch and print all the records.
                                 	while ($row = mysqli_fetch_assoc($result)) {
                                 		echo ' <p><b>' . $row['name'] . '</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_1'] . '</span></p>	';		 
                                 	
                                 	}                
                                 
                              	
                                 	
                                 	mysqli_free_result ($result); // Free up the resources.	
                                 }
                                 	
                                 
                                            	?>
        </div>
	 <div class="w3-card w3-container" style="min-height:360px">
	         <p><b>NOODLES</b></p>
	           <?php
	                                 require_once ('mysql_connect.php'); // Connect to the db.
	                                 		
	                                 // Make the query.
	                                 $query = "SELECT * FROM menu where category = 7";		
	                                 $result = mysqli_query ($dbc, $query); // Run the query.
	                                 $num = mysqli_num_rows($result);
	                                 
	                                 if ($num > 0) { // If it ran OK, display the records.           
	                                                	
	                                                	
	                                 	// Fetch and print all the records.
	                                 	while ($row = mysqli_fetch_assoc($result)) {
	                                 		echo ' <p><b>' . $row['name'] . '</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_1'] . '</span></p>	';		 
	                                 	
	                                 	}                
	                                 
	                              	
	                                 	
	                                 	mysqli_free_result ($result); // Free up the resources.	
	                                 }
	                                 	
	                                 
	                                            	?>
	        </div>
		<div class="w3-card w3-container" style="min-height:360px">
			         <p><b>WESTERN</b></p>
			           <?php
			                                 require_once ('mysql_connect.php'); // Connect to the db.
			                                 		
			                                 // Make the query.
			                                 $query = "SELECT * FROM menu where category = 11";		
			                                 $result = mysqli_query ($dbc, $query); // Run the query.
			                                 $num = mysqli_num_rows($result);
			                                 
			                                 if ($num > 0) { // If it ran OK, display the records.           
			                                                	
			                                                	
			                                 	// Fetch and print all the records.
			                                 	while ($row = mysqli_fetch_assoc($result)) {
			                                 		echo ' <p><b>' . $row['name'] . '</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_1'] . '</span></p>	';		 
			                                 	
			                                 	}                
			                                 
			                              	
			                                 	
			                                 	mysqli_free_result ($result); // Free up the resources.	
			                                 }
			                                 	
			                                 
			                                            	?>
			        </div>
					<div class="w3-card w3-container" style="min-height:360px">
					<p><b>SNACKS</b></p>
					<?php
					require_once ('mysql_connect.php'); // Connect to the db.
							                                 		
					// Make the query.
					$query = "SELECT * FROM menu where category = 9";		
					$result = mysqli_query ($dbc, $query); // Run the query.
					$num = mysqli_num_rows($result);
							                                 
					if ($num > 0) { // If it ran OK, display the records.           
							                                                	
							                                                	
					// Fetch and print all the records.
					while ($row = mysqli_fetch_assoc($result)) {
					echo ' <p><b>' . $row['name'] . '</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_1'] . '</span></p>	';		 
							                                 	
							                       	}                
							                                 
							                              	
							                                 	
					mysqli_free_result ($result); // Free up the resources.	
							                        }
							                                 	
							                                 
					?>
					</div>
                                	<div class="w3-card w3-container" style="min-height:360px">
					<p><b>DESSERT</b></p>
					<?php
					require_once ('mysql_connect.php'); // Connect to the db.
							                                 		
					// Make the query.
					$query = "SELECT * FROM menu where category = 5";		
					$result = mysqli_query ($dbc, $query); // Run the query.
					$num = mysqli_num_rows($result);
							                                 
					if ($num > 0) { // If it ran OK, display the records.           
							                                                	
							                                                	
					// Fetch and print all the records.
					while ($row = mysqli_fetch_assoc($result)) {
					echo ' <p><b>' . $row['name'] . '</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_1'] . '</span></p>	';		 
							                                 	
							                       	}                
							                                 
							                              	
							                                 	
					mysqli_free_result ($result); // Free up the resources.	
							                        }
							                                 	
							                                 
					?>
					</div>
	                                <div class="w3-card w3-container" style="min-height:360px">
					<p><b>BURGER</b></p>
					<?php
					require_once ('mysql_connect.php'); // Connect to the db.
							                                 		
					// Make the query.
					$query = "SELECT * FROM menu where category = 4";		
					$result = mysqli_query ($dbc, $query); // Run the query.
					$num = mysqli_num_rows($result);
							                                 
					if ($num > 0) { // If it ran OK, display the records.           
							                                                	
							                                                	
					// Fetch and print all the records.
					while ($row = mysqli_fetch_assoc($result)) {
					echo ' <p><b>' . $row['name'] . '</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_1'] . '</span></p>	';		 
							                                 	
							                       	}                
							                                 
							                              	
							                                 	
					mysqli_free_result ($result); // Free up the resources.	
							                        }
							                                 	
							                                 
					?>
					</div>										
    </div>

    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      	<div class="w3-card w3-container" style="min-height:360px">
      					<p><b>DRINKS</b> <span class="w3-right"><b>COLD</b></span><span class="w3-right"><b>HOT/</b></span></p>
      					<?php
      					require_once ('mysql_connect.php'); // Connect to the db.
      							                                 		
      					// Make the query.
      					$query = "SELECT * FROM menu WHERE category = 1";		
      					$result = mysqli_query ($dbc, $query); // Run the query.
      					if (mysqli_num_rows($result)>0) { // If it ran OK, display the records.           
      							                                                	
      							                                                	
      					// Fetch and print all the records.
      					while ($row = mysqli_fetch_assoc($result)) {
      					echo ' <p><b>' . $row['name'] .'</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_2'] . '</span>
					      <span class="w3-right w3-tag w3-red w3-round">' . $row['price_1'] . '</span>
					      </p>	';		 
      							                                 	
      							                       	}                
      							                                 
      							                              	
      							                                 	
      					mysqli_free_result ($result); // Free up the resources.	
      							                        }
      							                                 	
      							                                 
      					?>
      					</div>

	                                <div class="w3-card w3-container" style="min-height:360px">
					<p><b>JUICE BAR</b></p>
					<?php
					require_once ('mysql_connect.php'); // Connect to the db.
							                                 		
					// Make the query.
					$query = "SELECT * FROM menu where category = 2";		
					$result = mysqli_query ($dbc, $query); // Run the query.
					$num = mysqli_num_rows($result);
							                                 
					if ($num > 0) { // If it ran OK, display the records.           
							                                                	
							                                                	
					// Fetch and print all the records.
					while ($row = mysqli_fetch_assoc($result)) {
					echo ' <p><b>' . $row['name'] . '</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_1'] . '</span></p>	';		 
							                                 	
							                       	}                
							                                 
							                              	
							                                 	
					mysqli_free_result ($result); // Free up the resources.	
							                        }
							                                 	
							                                 
					?>
					</div>

	                                <div class="w3-card w3-container" style="min-height:360px">
					<p><b>ICE BLENDED</b></p>
					<?php
					require_once ('mysql_connect.php'); // Connect to the db.
							                                 		
					// Make the query.
					$query = "SELECT * FROM menu where category = 3";		
					$result = mysqli_query ($dbc, $query); // Run the query.
					$num = mysqli_num_rows($result);
							                                 
					if ($num > 0) { // If it ran OK, display the records.           
							                                                	
							                                                	
					// Fetch and print all the records.
					while ($row = mysqli_fetch_assoc($result)) {
					echo ' <p><b>' . $row['name'] . '</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_1'] . '</span></p>	';		 
							                                 	
							                       	}                
							                                 
							                              	
							                                 	
					mysqli_free_result ($result); // Free up the resources.	
							                        }
							                                 	
							                                 
					?>
					</div>												      
    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <div class="w3-card w3-container" style="min-height:360px">
      					<p><b>BIG DADDY'S SPECIAL</b></p>
      					<?php
      					require_once ('mysql_connect.php'); // Connect to the db.
      							                                 		
      					// Make the query.
      					$query = "SELECT * FROM menu where category = 10";		
      					$result = mysqli_query ($dbc, $query); // Run the query.
      					$num = mysqli_num_rows($result);
      							                                 
      					if ($num > 0) { // If it ran OK, display the records.           
      							                                                	
      							                                                	
      					// Fetch and print all the records.
      					while ($row = mysqli_fetch_assoc($result)) {
      					echo ' <p><b>' . $row['name'] . '</b> <span class="w3-right w3-tag w3-black w3-round">' . $row['price_1'] . '</span></p>	';		 
      							                                 	
      							                       	}                
      							                                 
      							                              	
      							                                 	
      					mysqli_free_result ($result); // Free up the resources.	
      							                        }
      							                                 	
      					mysqli_close($dbc); // Close the database connection.		                                 
      					?>
      					</div>	
    </div><br>

  </div>
</div>

	<footer class="w3-container w3-padding-60 w3-black w3-center" style="margin-left:20px;">
     <p>@BigDaddysCafe</p>
     	  	 
     	</footer>

 
 <script>
 function openMenu(evt, menuName) {
   var i, x, tablinks;
   x = document.getElementsByClassName("menu");
   for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
   }
   tablinks = document.getElementsByClassName("tablink");
   for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
   }
   document.getElementById(menuName).style.display = "block";
   evt.currentTarget.firstElementChild.className += " w3-red";
 }
 document.getElementById("myLink").click();
 </script>
   
   </body>
</html>