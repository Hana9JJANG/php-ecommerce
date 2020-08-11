<?php
session_start();
?>
       <!-- Navigation bar -->
<?php
   require_once ('includes/header.php');
?>

<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  


  
     <center> 

			 <div>
<div class="w3-container">
<div class="w3-card-4 w3-dark-white" style="width:50%;margin-top:100px">

     <div class="w3-container" id="contact" style="margin-left:20px;">
     <h3 class="w3-center">Sign Up</h3>
  

     <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" method = "post">
       </br>
       <p><input class="w3-input w3-border" type="text" placeholder="Name" name="name" required ></p>
       
       <p><input class="w3-input w3-border" type="email" placeholder="Email" name="email" required ></p>
       
       <p><input class="w3-input w3-border" type="text" placeholder="Phone Number" name="phone" required ></p>
   
       <p><input class="w3-input w3-border" type="textarea" placeholder="Address" name="address"  required ></p>
       
       <p><input class="w3-input w3-border" type="password" placeholder="Password" name="password1" required ></p>
    
        <p><input class="w3-input w3-border" type="password" placeholder="Confirm Password" name="password2" required ></p><br/>       
     <p class="w3-left w3-red"><?php
     if(isset($_POST['register'])){
     $errors = array(); // Initialize error array.
     	
     	// Check for a name.
     	if (empty($_POST['name'])) {
     		$errors[] = '';
     	} else {
     		$name = trim($_POST['name']);
     	}
     	
     	// Check for a last name.
     	if (empty($_POST['email'])) {
     		$errors[] = '';
     	} else {
     		$email = trim($_POST['email']);
     	}
     	
     	if (empty($_POST['address'])) {
     		$errors[] = '';
     	} else {
     		$address = $_POST['address'];
     	}
	
	if (empty($_POST['phone'])) {
	        $errors[] = '';
	} else {
	        $phone = $_POST['phone'];
	}     
     	
     	if (empty($_POST['password1'])) {
     	     	$errors[] = '';
     	} else {
     	     	$password1 = $_POST['password1'];
     	}
	     
	if (empty($_POST['password2'])) {
	     	$errors[] = '';
	} else {
	     	$password2 = $_POST['password2'];
	}
     		
     	
             	       
     	
     	require_once ('mysql_connect.php');
     	
     	$query = "SELECT * FROM user where email = '".$email."'";
     	$result = mysqli_query($dbc, $query);
     	
        if (mysqli_num_rows($result) > 0)
     	{
     	echo "An account is already registered with your email address. Please Login.";
     
     	}
	else if($password1 != $password2)
	{
	echo "Password does not match";
	}
     	else
     	{	
         	   		     
     	$query = "INSERT INTO user (name, email, phone, address, password) VALUES ('$name','$email','$phone','$address','$password1')";
        		$result = mysqli_query($dbc, $query);
			
?>

<script type="text/javascript">
window.location.href = 'order.php';
</script>
<?php
        		
        } 
     	mysqli_close($dbc);	   			   
        }	   			       
        ?> 
       <p><button class="w3-button w3-black" type="submit" value="Submit" name="register" > Sign Up </button><br/></p>
     </form>
     <form action="order.php" method="post">
     <p><button class="w3-button w3-clear w3-hover-gray" type="submit" value="Submit" name="register" >
     <i class="fa fa-angle-double-left"></i>Back </button>
     </form>
     </div>
     </div>
 </div>
</div>
</center>


<style>
body  {
  background-image: url("Picture/wall5.jpeg");
   background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
       
 