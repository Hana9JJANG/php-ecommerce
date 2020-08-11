<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Ohnana - Game Board Land</title>
  <meta charset="UTF-8">
  <meta name="description" content="EndGam Gaming Magazine Template">
  <meta name="keywords" content="endGam,gGaming, magazine, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/slicknav.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css/magnific-popup.css"/>
  <link rel="stylesheet" href="css/animate.css"/>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="css/style.css"/>


  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>

<?php

if(!isset($_SESSION["sess_email"])){

?>


 

  <!-- Header section -->
  <header class="header-section">
    <div class="header-warp">
    
      <div class="header-bar-warp d-flex">
        <!-- site logo -->
        <a href="index.php" class="site-logo">
          <img src="./img/ss.png" alt="">
        </a>
        <nav class="top-nav-area w-100">
          <div class="user-panel">
            <a href="order.php">Login</a> / <a href="register.php">Register</a>
          </div>
          <!-- Menu -->
          <ul class="main-menu primary-menu">
            <li><a href="index.php">Home</a></li>
             <li><a href="order.php">Products</a></li>
         <li><a href="blog.php">News</a></li>
             <li><a href="contact.php">Contact</a></li>
         
           
       
         
          </ul>
        </nav>
      </div>
    </div>
  </header>
<body>

<?php
}
else
{
?>





 

  <!-- Header section -->
  <header class="header-section">
    <div class="header-warp">
    
      <div class="header-bar-warp d-flex">
        <!-- site logo -->
        <a href="index.php" class="site-logo">
          <img src="./img/ss.png" alt="">
        </a>
        <nav class="top-nav-area w-100">
          <div class="user-panel">
             <a href="view_cart.php">Cart </a>
             <!--  <img src="./img/ccc.png" alt=""></a> -->
            <a href="logout.php">| Sign Out</a>
          </div>
          <!-- Menu -->
          <ul class="main-menu primary-menu">
            <li><a href="index.php">Home</a></li>
             <li><a href="delivery.php">Products</a></li>
    <li><a href="blog.php">News</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="myorder.php">Order</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
<body>



<?php
}
?>






		