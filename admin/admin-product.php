<?php
session_start();
if(!isset($_SESSION['email'])){
header("Location: index.php");
}
else
{
?>
<!DOCTYPE html>
<html>
<title> Admin: Ohnana Store </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Calibri">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Calibri", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

	body {
	  background-color: #fff;
	  font-size: 16px;
	  font-weight: 400;
	  text-rendering: optimizeLegibility;
	}
	
	/*** Table Styles **/
	
	.table-fill {
	  background: white;
	  border-radius:3px;
	  border-collapse: collapse;
	  height: 320px;
	  padding:5px;
	  width: 100%;
	}
	 
	th {
	  color:#fff;;
	  background:#425161;
	  border-bottom:2px solid #9ea7af;
	  border-right: 0px solid #343a45;
	  font-size:18px;
	  font-weight: 100;
	  padding:20px;
	  text-align:left;
	  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
	  vertical-align:middle;
	}
	
	th:first-child {
	  border-top-left-radius:3px;
	}
	 
	th:last-child {
	  border-top-right-radius:3px;
	  border-right:none;
	}
	  
	tr {
	  border-top: 1px solid #C1C3D1;
	  border-bottom-: 1px solid #C1C3D1;
	  color:#666B85;
	  font-size:16px;
	  font-weight:normal;
	  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
	}
	 
	tr:hover td {
	  background:#4E5066;
	  color:#FFFFFF;
	  border-top: 1px solid #22262e;
	}
	 
	tr:first-child {
	  border-top:none;
	}
	
	tr:last-child {
	  border-bottom:none;
	}
	 
	tr:nth-child(odd) td {
	  background:#EBEBEB;
	}
	 
	tr:nth-child(odd):hover td {
	  background:#4E5066;
	}
	
	tr:last-child td:first-child {
	  border-bottom-left-radius:3px;
	}
	 
	tr:last-child td:last-child {
	  border-bottom-right-radius:3px;
	}
	 
	td {
	  background:#FFFFFF;
	  padding:2px;
	  text-align:left;
	  vertical-align:middle;
	  font-weight:300;
	  font-size:15px;
	  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
	  border-right: 1px solid #C1C3D1;
	}
	
	td:last-child {
	  border-right: 0px;
	}
	
	th.text-left {
	  text-align: left;
	}
	
	th.text-center {
	  text-align: center;
	}
	
	th.text-right {
	  text-align: right;
	}
	
	td.text-left {
	  text-align: left;
	}
	
	td.text-center {
	  text-align: center;
	}
	
	td.text-right {
	  text-align: right;
	}
	
</style>
<body>
<script type="text/javascript">

function deleteOrder(id) {
	if (confirm("Are you sure you want to delete?")) {
		window.location.href = 'admin-order?deleteOrder='+ id;
		return true;
	} else {
		return false;
	 }
}

</script>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-light-grey w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-100"><b>Ohnana Store Management</b></h3>
  </div>
  
      <center><p id="demo"></p>
          
  	<script>
  	var d = new Date();
  	document.getElementById("demo").innerHTML = d.toDateString();
  	</script></center>
	  
  <div class="w3-bar-block">
    <a href="/Bigdaddyscafe/cafe.php" style="text-align: center;" class="w3-button w3-border w3-bar-item"> Go to Big Daddy's Website </a></center>
     <a href="admin-user.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"> Customer </a>
  
    <a href="admin-menu.php" onclick="w3-close()" class="w3-bar-item w3-button w3-hover-white">Menu </a>
    <a href="admin-product.php" onclick="w3-close()" class="w3-bar-item w3-button w3-hover-white"> Delivery Product</a>
    <a href="admin-order.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Delivery Order</a>  
  
  </div>
</nav>
<div><a href="admin_logout.php" class="w3-bar-item w3-button w3-padding-16 w3-right">Sign Out</a></div>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">?</a>
  <span>Ohnana Store Management</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<br></br>
      <h1 class="w3-xxlarge"><b>Admin Page</b></h1>
  <!-- Order -->
  <div class="w3-container" style="margin-top:80px" id="order">
    <h1 class="w3-large w3-text-grey"><b>Delivery Product</b></h1> 
           <?php
             	     require_once ('mysql_connect.php'); // Connect to the db.
             	     		
             	     // Make the query.
             	     $query = "SELECT id, description, name, price from delivery_prod";		
             	     $result = mysqli_query ($dbc, $query); // Run the query.
             	     $num = mysqli_num_rows($result);
             	     
             	     if ($num > 0) { // If it ran OK, display the records.
      
                 	// Table header.
                 	echo '<table class="table-fill">
                 	<thead>
			<th class="text-left"> Name </th>
			<th class="text-left"> Description </th>
			<th class="text-left"> Price </th>
			<th class="text-left"></th>
                 	</tr> ';
                 	     	
                 	// Fetch and print all the records.
                 	while ($row = mysqli_fetch_assoc($result)) {
                 	echo '<tr><td class="text-left">' . $row['name'] . '</td>
                 	<td class="text-left">' . $row['description'] . '</td>
			<td class="text-left">' . $row['price'] . '</td>    
                 	<td align="left"><center><a href="delete_prod.php?id=' . $row ['id'] . '" onclick = "return deleteOrder (' . $row['id'] . ');">
                 	<img src="/BigDaddysCafe/Picture/delete.jpg" width="15px" height="15px"/></a> </center></td>
                 	</tr> ';
                 	      
                 	}
                 	             	     
                 	echo '</table>';
             	     	
             	     	mysqli_free_result ($result); // Free up the resources.	
             	        }
             	     	
             	     	mysqli_close($dbc); // Close the database connection.
             	     	
             	     	?> 
  </div>
    <div class="w3-center">  
  <br>
        <a href="admin_add_product.php" class="w3-button w3-border">Add Product</a>
        <br><br>
 

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
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
				      background-color: transparent;
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
<script>


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
<?php
      }
?>
