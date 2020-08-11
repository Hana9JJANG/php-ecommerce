<?php
session_start();
if(!isset($_SESSION['email'])){
header("Location: index.php");
}
else
{
?>

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

        <!-- Page Content -->
        <h1>Products</h1>
        <hr>

      <center><div class="menu">
      <a href="admin_add_product.php" class="w3-button w3-border">Add Product</a>
     
      </div></center>
      
      <center><div class="blended" id="blended">
      <table style="height: 70px;" class="table-fill">
      <tr><br>
       <th>ID</th>
      <th>Product</th>
      <th>Description </th>
      <th>Price (RM)</th>
      <th></th>
      </tr>
      <?php
      mysql_connect("localhost","root");
      mysql_select_db("ohnanastore");
      $res=mysql_query("SELECT id, description, name, price from delivery_prod");
      while($row=mysql_fetch_array($res))
      {
        ?>
          <tr>
          <td><p><?php echo $row['id']; ?></p></td>
          <td><p><?php echo $row['name']; ?></p></td>
          <td><p><?php echo $row['description']; ?></p></td>
           <td><p><?php echo $row['price']; ?></p></td>
    <td class="text-left"><?php echo'<center><a href="edit_menu.php?id=' . $row ['id'] . '">
    <center>'?>Edit</td>
    <td><p> <?php echo '<center><a href="del.php?id=' . $row ['id'] . '" onclick = "return deleteOrder (' . $row['id'] . ');">
          <img src="" width="15px" height="15px"/></center>' ?> Delete</p></td></p>
          </tr>
          <?php
      }
      ?>
      </table>
      </div>

        
<!-- End page content -->
</nav><br/><br/><br/><br/>


      </body></html>
      <?php
      }
      ?>
























      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
















<script type="text/javascript">

function deleteOrder(id) {
  if (confirm("Are you sure you want to delete?")) {
    window.location.href = 'admin-menu?deleteOrder='+ id;
    return true;
  } else {
    return false;
   }
}

</script>
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
    width: 80%;
  }
   
  th {
    color:#fff;;
    background:#425161;
    border-bottom:1px solid #9ea7af;
    border-right: 0px solid #343a45;
    font-size:18px;
    font-weight: 100;
    padding:10px;
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
  }
   
  tr:first-child {
    border-top:none;
  }
  
  tr:last-child {
    border-bottom:none;
  }
   
  tr:nth-child(odd) td {
    background:#fff;
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
    background:#fff;
    padding:2px;
    text-align:left;
    vertical-align:middle;
    font-weight:300;
    font-size:14px;
    text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
    border: 1px solid #C1C3D1;

  }
  
  td:last-child {
    border-right: 1px solid #C1C3D1;
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
