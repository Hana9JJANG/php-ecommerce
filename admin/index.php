<!DOCTYPE html>
<html>
<title> Admin: Ohnana Board Game Store </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Calibri">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Calibri", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-light-grey w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-100"><b>Ohnana Store Management</b></h3>   
  </div>
  	  
  <div class="w3-bar-block">  
</div> 

</nav>



<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

<br></br>
      <h1 class="w3-xxlarge"><b>Admin Page</b></h1>
      <hr style="width:250px;border:3px solid black" class="w3-round">     
   <div class="w3-container" id="contact" style="margin-top:75px">
     <h1 class="w3-large w3-text-grey"><b>Login</b></h1>
     <p>Please login to enter Ohnana Store management.</p>
     <nav style="max-width: 600px;">
  <form action="" method = "post">
        <p><input class="w3-input w3-border" type="email" placeholder="Email" name="email" required ></p>
        <p><input class="w3-input w3-border" type="password" placeholder="Password" name="password" required ></p>
        <br/>
      
  <p class ="w3-text-red"><b><?php
        if(isset($_POST["login"])){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $conn = new mysqli('localhost', 'root', '') or die(mysql_error());
        
        $db = mysqli_select_db($conn, "ohnanastore");
        $query=mysqli_query($conn, "SELECT * FROM admin WHERE email='".$email."' AND password='".$password."'");
        $numrows = mysqli_num_rows($query);
        if($numrows !=0)
        {
        while($row = mysqli_fetch_assoc($query))
        {
        $dbemail = $row['email'];
        $dbpassword = $row ['password'];
        $dbusername = $row ['name'];
        }
        if($email == $dbemail && $password == $dbpassword)
        {
        session_start();
        $_SESSION['email']= $email;
        $_SESSION['user'] = $dbusername;
        
        header("Location: indexz.php");
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
     
        <p><button class="w3-button w3-black w3-third" type="submit" value="Submit" name="login" > Login </button></p><br/><br/>
        </nav>
       </div>
       </div>
  
  <script>
   // Tabbed Menu
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