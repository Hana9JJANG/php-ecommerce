<!DOCTYPE html>
<html>
<title> TEST UPDATE ORDER TEST.PHP </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}


</style>

<script type="text/javascript">

function deleteOrder(id) {
	if (confirm("Are you sure you want to delete?")) {
		window.location.href = 'admin-feedback?deleteOrder='+ id;
		return true;
	} else {
		return false;
	 }
}

</script>
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
    <a href="admin-home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="admin-order.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Order</a> 
    <a href="admin-reservation.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Reservations</a> 
    <a href="admin-feedback.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"> Feedback</a>

  </div>
</nav>
<div><a href="admin-login.php" class="w3-bar-item w3-button w3-padding-16 w3-right">Sign Out</a></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<br></br>
      <h1 class="w3-xxlarge"><b>Admin Page</b></h1>
      <hr style="width:250px;border:3px solid black" class="w3-round">
      
        <div class="w3-container" id="reservation" style="margin-top:75px">
          <h1 class="w3-large w3-text-grey"><b></b></h1>
	  <?php
	  			if (! empty ( $_GET ['mode'] )) {
	  				switch ($_GET ['mode']) {
	  					case "delete" :
	  					echo "<h3 style='color:black;'> Data successfully deleted</h3>";
	  					break;
	  					case "edit" :
	  					echo "<h3 style='color:black;'> Data successfully edited </h3>";
	  					break;
	  	}
	  }
	  ?>
	  
	  
           <?php
             	     require_once ('mysql_connect.php'); // Connect to the db.
             	     		
             	     // Make the query.
             	     $query = "SELECT * from contact";		
             	     $result = mysqli_query ($dbc, $query); // Run the query.
             	     $num = mysqli_num_rows($result);
             	     
             	     if ($num > 0) { // If it ran OK, display the records.
      
                 	// Table header.
                 	echo '<table border="1" align="left" cellspacing="0" cellpadding="10">
                 		  <td align="left"><b>ID</b></td>
				   <td align="left"><b>Subject</b></td>
           		<td align="left"><b>Message</b></td>
			   <td align="left"><b> Details </b></td>
			   <td align="left"><b></b></td>
			   <td align="left"><b></b></td>
                 		</tr>
                 ';
      
             	     	
                 	// Fetch and print all the records.
                 	while ($row = mysqli_fetch_assoc($result)) {
                 		echo '<tr><td align="left">' . $row['id'] . '</td>
				 <td align="left">' . $row['subject'] . '</td>
           			 <td align="left">' . $row['message'] . '</td>
				<td align="left"> 
				<button class="accordion"> View details </button>
			<div class="panel">
			<p> Contact info <br></br>
			Name: ' . $row['name'] . ' <br></br>
			Email: ' . $row['email'] . ' </p>		
				</div></div>  </td>
				    <td align="left"><a href="delete.php?id=' . $row ['id'] . '" onclick = "return deleteOrder (' . $row['id'] . ');">
				    			<img src="images/delete.jpg" width="15px" height="15px"/></a> </td>
                 			   
				<td align="left"><a href="edit.php?id=' . $row ['id'] . '">
				<img src="images/edit.jpg" width="15px" height="15px" title="Edit order"/></td>	    
						</tr>
                 		';
      
             	     	}
             	     
             	     	echo '</table>';
             	     	
             	     	mysqli_free_result ($result); // Free up the resources.	
             	     }
             	     	
             	     	mysqli_close($dbc); // Close the database connection.
             	     	
             	     	?> 
				  <style>
				  button.accordion {
				      background-color: #eee;
				      color: #444;
				      cursor: pointer;
				      padding: 18px;
				      width: 100%;
				      text-align: left;
				      border: none;
				      outline: none;
				      transition: 0.4s;
				  }
				  
				  div.panel {
				      padding: 0 18px;
				      background-color: white;
				      display: none;
				  }
				  
				  button.accordion.active, button.accordion:hover {
				      background-color: #ccc; 
				  }
				  </style>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    }
}
</script>

        </div>
</body></html>


