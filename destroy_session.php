
<?php 

// Initialize the session. 
// If you are using session_name("something"), don't forget it now! 
session_start(); 

//store the user session 
$userSession = $_SESSION['sess_email']; 
$userSession2 = $_SESSION['username']; 
$userSession3 = $_SESSION['phone']; 
$userSession4 = $_SESSION['address'];
$userSession5 = $_SESSION['id'];
$userSession6 = $_SESSION['cart'];   

// Unset all of the session variables. 
$_SESSION = array(); 

// If it's desired to kill the session, also delete the session cookie. 
// Note: This will destroy the session, and not just the session data! 
if (ini_get("session.use_cookies")) { 
$params = session_get_cookie_params(); 
setcookie(session_name(), '', time() - 42000, 
$params["path"], $params["domain"], 
$params["secure"], $params["httponly"] 
); 
} 

// Finally, destroy the session. 
session_destroy(); 
unset($_SESSION);
session_start();
session_regenerate_id();

//reset user session 
$_SESSION['sess_email'] = $userSession; 
$_SESSION['username'] = $userSession2; 
$_SESSION['phone'] = $userSession3; 
$_SESSION['address'] = $userSession4;
$_SESSION['id'] = $userSession5;
$_SESSION['email'] = $userSession6;

header("Location: delivery.php");
?>
