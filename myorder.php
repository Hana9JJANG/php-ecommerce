
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
   

  <br/> 

 <div class="w3-white" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:900px">

      <h2 class="w3-wide w3-center">My Order</h2>
      <p class="w3-opacity w3-center"><i></i></p><br>
<div class="w3-container" >
<div class="w3-main w3-content w3-center "">
 
<div class="w3-row-padding w3-padding-5 w3-center" id="food">


<div class="card mb-6">
          <div class="card-header">
            <i class="fas fa-table"></i>
            My Order</div>
<div class="card-body">
<div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
      <tr>
        <th>Order Number</th>
        <th>Date</th>
        <th>Name</th>
        <th>Quantity </th>
        <th>Price (RM)</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Status</th>
      </tr>
  </thead>

  <tbody>
      <?php
      require_once ('mysql_connect.php');
      //mysql_connect("localhost","root");
      //mysql_select_db("ohnanastore");
      $res=mysqli_query($dbc,"SELECT * FROM orders WHERE cust_id = '".$_SESSION['id']."'");
      while($row=mysqli_fetch_array($res))
      {
        ?>
          <tr>
          <td><?php echo $row['order_number']; ?></td>
          <td><?php echo $row['ts']; ?></td>
          <td><?php echo $row['prod_name']; ?></td>
          <td><?php echo $row['quantity']; ?></td>
           <td><?php echo $row['price']; ?></td>
          <td><?php echo $row['quantity']; ?></td>
           <td><?php echo $row['cust_phone']; ?></td>
           <td><?php echo $row['order_status']; ?></td>
          </tr>
          <?php
      }
      ?>
      </tbody>
      </table>
      </div>
      </div>
</div>
</div>
	   
</div>
</div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
<style>

#l {
  height: 200px;
  width: 50%;
  background-color: white;
}
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</body>
   </html>
   <?php
   }
   ?>

<!-- <div class='w3-row-padding w3-padding-32' style='margin:0 -16px'>
        <div class='w3-third w3-margin-bottom'>
       <div class='w3-container w3-white'>
		            <img src=\"./Picture/{$row['image']}\" alt=\"{$row['name']}\"  
		            style='width:100%' class='w3-hover-opacity'>
                    <p><b>{$row['name']}</b></p>
		            <p class='w3-left'><b>RM{$row['price']}</b></p>
                    <p class='w3-right'><a class='w3-button w3-round-large w3-black'href =\"add_cart.php?pid={$row['id']}\">Add to cart</a></p><br/>
                    </div>


</div> </div>
         </div> </div>
 </div>  -->

