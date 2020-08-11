    <!-- Navigation bar -->
<?php
      session_start();
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
    <div class="container">
   

  <br/> <br/> <br/>
   <center>
<div class="w3-container">
<div id ="haha" class="w3-card-4 w3-dark-white" style="width:40%">
      <br/>
<h3 id ="haha" class="w3-center" ><span class="w3-white w3-wide">Login </h3>
     <br/><br/>

 <div id ="haha" class="w3-container w3-center">
      <form action="" method = "post">
      <p><input class="w3-input w3-border" type="email" placeholder="Email" name="email" required ></p>
      <p><input class="w3-input w3-border" type="password" placeholder="Password" name="password" required ></p>
    
<p class ="w3-text-red"><b>
  <?php
      if(isset($_POST["login"])){
      if(!empty($_POST['email']) && !empty($_POST['password'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      
      $conn = new mysqli('localhost', 'root', '') or die(mysql_error());
      
      $db = mysqli_select_db($conn, "ohnanastore");
      $query=mysqli_query($conn, "SELECT * FROM user WHERE email='".$email."' AND password='".$password."'");
      $numrows = mysqli_num_rows($query);
      if($numrows !=0)
      {
      while($row = mysqli_fetch_assoc($query))
      {
      $dbemail = $row['email'];
      $dbpassword = $row ['password'];
      $dbusername = $row ['name'];
      $dbphone = $row ['phone'];
      $dbaddress = $row ['address'];
      $dbid = $row ['id'];
      
      }
      if($email == $dbemail && $password == $dbpassword)
      {

      $_SESSION['sess_email']= $email;
      $_SESSION['username'] = $dbusername;
      $_SESSION['phone'] = $dbphone;
      $_SESSION['address'] = $dbaddress;
      $_SESSION['id'] = $dbid;
      ?>
<script>
    window.location.href = 'delivery.php';
</script>
      <?php
      }
      }
      else
      {
      echo "Invalid email or password";
      }
      }
      else
      {
      echo"Required ALL fields";
      }
      }
      ?></b></p>
   
      <p><button class="w3-button w3-black w3-center w3-third" type="submit" value="Submit" name="login" > Login </button></p><br/><br/>
      <hr>
     </form>

<div class="w3-section w3-center">
       
      <form action="register.php">
      <button class="w3-button w3-round w3-block w3-left-align " type="submit" value="Submit" name="signup" >
      <center><p style="color:black">I'm a new customer</p><p style="color:black"><b> Sign up </b></p></center> </button>  
     
     </form>
     

</div>

  </div>
</div>
</div>
</center>
</section>
<!-- <style>
body  {
  background-image: url("Picture/wall5.jpeg");
   background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style> -->

<footer class="footer-section">
    <div class="container">
    
   
      </a>
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


  <!--====== Javascripts & Jquery ======-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky-sidebar.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/main.js"></script>

  </body>
  <style>
   #haha{
     background: #ffffff;
   }
     
   </style>
   }

