<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Blank Page</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="indexz.php">Ohnana Management</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="indexz.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
   
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin-menu.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Products</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="admin-customer.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Customer</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin-order.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Orders</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Product</li>
        </ol>


<div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
             
              <a class="card-footer text-white clearfix small z-1" href="admin_add_product.php">
                <span class="float-left">Add Products</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              
              <a class="card-footer text-white clearfix small z-1" href="admin-menu.php">
                <span class="float-left">View Products</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>
        <!-- Page Content -->
        <h1>Add Products</h1>
        <hr>
<body>
<?php #  - add_product.php
       // This page allows the administrator to add a product.
       
     
       
       if (isset($_POST['submit'])) { // Handle the form.
       
       require_once ('mysql_connect.php'); // Connect to the database.
       	
       	// Validate the product name, image, supplier, price, and description.
       
       	// Check for a product name.
       	if (!empty($_POST['name'])) {
       		$name = addslashes($_POST['name']);
       	} else {
       		$name = FALSE;
       		echo '';
       	}
       	
       	// Check for an image (not required).
       	if (is_uploaded_file ($_FILES['image']['tmp_name'])) {
       	if (move_uploaded_file($_FILES['image']['tmp_name'], "../Picture/{$_FILES['image']['name']}")) { // Move the file over.
       
       	echo '<p>The file has been uploaded!</p>';
		
       
       	} else { // Couldn't move the file over.
  		     
       	echo '<p><font color="red">The file could not be moved.</font></p>';
       	$image = '';
       	       }
       	$image = $_FILES['image']['name'];
       	} else {
       		$image = '';
       	       }
       	
       	// Check for a size (not required).
       	/*if (!empty($_POST['size'])) {
       		$s = escape_data($_POST['size']);
       	} else {
       		$s = '<i>Size information not available.</i>';
       	}*/
       	
       	// Check for a price.
       	if (is_numeric($_POST['price'])) {
       		$price = $_POST['price'];
       	} else {
       		$price = FALSE;
       		echo '';
       	}
       	
       	// Check for a description (not required).
       	if (!empty($_POST['description'])) {
       		$description = addslashes($_POST['description']);
       	} else {
       		$description = '<i>No description available.</i>';
       	}
       	     	     	     	
       	   
       		// Add the print to the database.       
       		$query = "INSERT INTO delivery_prod (description, name, image, price) VALUES ('$description','$name','$image','$price')";
       	        $result = mysqli_query($dbc, $query); 
       	}
       	else { // Display the form.
       ?>
  <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="hidden" name="MAX_FILE_SIZE" value="524288">
  
    <h1 align="left" class="w3-large w3-text-grey"><b></b></h1>
      <table align="left">
      <tr><td style="padding-bottom: 10px;"><b> Name: </b> <input type="text" name="name" size="25" maxlength="60"  /></td></tr>
      <tr><td style="padding-bottom: 10px;"><b>Image: </b> <input type="file" name="image" /></td></tr>
      <tr><td style="padding-bottom: 10px;"><b> Price: </b><input type="text" name="price" size="25" maxlength="60" required></td></tr><br>
      <tr><td style="padding-bottom: 10px;"><b> Description: </b><br><textarea name="description" cols="33" rows="5" required></textarea>	</td></tr>
      


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