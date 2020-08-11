






<!DOCTYPE html>
<html lang="zxx">
<head>
 
  <meta charset="UTF-8">
  <meta name="description" content="EndGam Gaming Magazine Template">
  <meta name="keywords" content="endGam,gGaming, magazine, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon"/>



  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
 
  <link rel="stylesheet" href="css/slicknav.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css/magnific-popup.css"/>
  <link rel="stylesheet" href="css/animate.css"/>

  <!-- Main Stylesheets -->
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<?php
session_start();
if(!isset($_SESSION["sess_email"])){
header("Location: order.php");
}
else
{
?>
       <!-- Navigation bar -->
<?php
   require_once ('includes/header.php');
?>

<section class="contact-page">
    <div class="container">
   
  
   <hr>
 <?php # view_cart.php
     // This page displays the contents of the shopping cart.
     
     // Set the page title and include the HTML header.
     $page_title = 'View Your Shopping Cart';
     // Check if the form has been submitted (to update the cart).
     if (isset ($_POST['submit'])) {
        foreach ($_POST['qty'] as $key => $value) {
            if ( ($value == 0) AND (is_numeric ($value)) ) {
                unset ($_SESSION['cart'][$key]);
            } elseif ( is_numeric ($value) AND ($value > 0) ) {
                  $_SESSION['cart'][$key] = $value;
            }
        }
        
             }
             
     // Check if the shopping cart is empty.
     $empty = TRUE;
     if (isset ($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if (isset($value)) {
            $empty = FALSE; 
            }
        } 
     }
              
     // Display the cart if it's not empty.
     if (!$empty) {
     
     require_once ('mysql_connect.php'); // Connect to the database.
     
        // Retrieve all of the information for the prints in the cart.
       $query = 'SELECT * FROM delivery_prod WHERE id IN (';
       foreach ($_SESSION['cart'] as $key => $value) 
    {
            $query .= $key . ',';
        }
        $query = substr ($query, 0, -1) . ') ORDER BY name ASC';
        $result = mysqli_query ($dbc,$query);
        
        // Create a table and a form.
        echo '

        


            <p style="color:red" > Set quantity to "0" to remove item.</p>
     
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div id ="haha" style="color:white" class="w3-container w3-white">

    <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:50%">Product</th>
                            <th style="width:10%">Price</th>
                            <th style="width:8%">Quantity</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

     <form action="view_cart.php" method="post">
     ';
     
        // Print each item.
        $total = 0; // Total cost of the order.
        while ($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
            
            // Calculate the total and sub-totals. 
            $subtotal = $_SESSION['cart'][$row['id']] * $row['price'];
            $total += $subtotal;
        
            
            // Print the row.
            echo "   <td data-th=\"Product\">
                                <div class=\"row\">
                                    <div class=\"col-sm-2 hidden-xs\"><img src=\"./Picture/{$row['image']}\" alt=\"...\" class=\"img-responsive\"/></div>
                                    <div class=\"col-sm-10\">
                                        <h4 class=\"nomargin\">{$row['name']} </h4>
                                        <p>{$row['description']}</p>
                                    </div>
                                </div>
                            </td>
    <td style=\"color:black\" data-th=\"Price\">RM{$row['price']}</td>
                            <td data-th=\"Quantity\">
                                <input type=\"number\" form-control text-center\" size=\"2\" name=\"qty[{$row['id']}]\" value=\"{$_SESSION['cart'][$row['id']]}\" 
    <input type=\"number\" class=\"form-control text-center\">
                            </td>
                            <td data-th=\"Subtotal\" RM" . number_format ($subtotal, 2) . "class=\"text-center\">   
                            <p class=\"actions\" data-th=\"\">
                                <button type=\"submit\" name=\"submit\" class=\"btn btn-info btn-sm\"><i class=\"fa fa-refresh\"></i></button></p>
                                                           
                            
                        </tr>
                    </tbody>
                    <tfoot>
                 ";
        } // End of the WHILE loop.
        
        // Print the footer, close the table, and the form.
        echo '


    <tr id ="haha" class="visible-xs">
       </tr>
                        <tr>
                          </tr>
                    </tfoot>
                </table>

         


                            <a href="delivery.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                            <colspan="2" class="hidden-xs"></td>
                            <class="hidden-xs text-center"><strong>Total RM' . number_format ($total, 2) . '</strong></td>
                            <a href="add_checkout.php" style="width:-50%" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                            </br>
                      </div>
</div>
         </br>           
</br>

                                                                                              
      ';




     
     } else {
        echo '
<section class="contact-page">
    <div class="container">
    <div><p class="w3-text-red w3-center"><b>Your cart is currently empty.

        </b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></p></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b> </div> </b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></p></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b>
       
      </b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></p></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b>  </b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></p></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b>   </div></div></section>';
     }
     ?>    
   </div>
   
</body>
</html>
<?php
}
?>

<footer class="footer-section">
    <div class="container">
   
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






</body>
<style>
.table>tbody>tr>td, .table>tfoot>tr>td{
    vertical-align: middle;
    background: #ffffff;
}
@media screen and (max-width: 200px) {
    table#cart tbody td .form-control{
        width:20%;
        display: inline !important;
    }
    .actions .btn{
        width:36%;
        margin:1.5em 0;
    }
    
    .actions .btn-info{
        float:left;
    }
    .actions .btn-danger{
        float:right;
    }
    
    table#cart thead { display: none; }
    table#cart tbody td { display: block; padding: .6rem; min-width:320px;}
    table#cart tbody tr td:first-child { background: #333; color: #fff; }
    table#cart tbody td:before {
        content: attr(data-th); font-weight: bold;
        display: inline-block; width: 8rem;
        background: #ffffff;
    }
    
    
    #haha{
      background:#ffffff;
    }

    table#cart tfoot td{display:block; }
    table#cart tfoot td .btn{display:block;}
    #cart {
        background: #ffffff;}
}
</style>







