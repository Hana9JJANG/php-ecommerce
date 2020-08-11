<?php
session_start();
if(!isset($_SESSION["sess_email"])){
header("Location: order.php");
}
else
{
?>

   <?php
   }
   ?>
   
   <h2><? = $_SESSION['sess_email'];?><a href = "logout.php">Sign Out</a></h2>
   
   <img src=\".{$row['image']}\"  alt=\"{$row['name']}\" style=\"width:210px;height:210px;\"/></p>
   		      <b>{$row['name']}</b></p>
   		      <b>RM{$row['price']}</b></p>
   		      <a class='w3-button w3-black'href =\"add_cart.php?pid={$row['id']}\">Add to cart</a></p>