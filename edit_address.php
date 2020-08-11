<?php
session_start();
if(!isset($_SESSION["sess_email"])){
header("Location: order.php");
}
else
{
?>
<?php

require_once 'mysql_connect.php';

$id = $_GET['id'];

$sql = "select * from `user` WHERE id = $id";

// echo $sql;

$result = mysqli_query($dbc, $sql);
$record = mysqli_fetch_array($result);

// echo $record['id'];

?>
       <!-- Navigation bar -->
<?php
   require_once ('includes/header.php');
?>
   

	<h3 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">EDIT ADDRESS</span></h3>
	<table align="center">
	<form action="process_edit_address.php" method="post">
	<tr>
	<td style="font-weight: bold; padding-bottom: 10px" align="right">Address : </td>
	<td style="padding-bottom: 10px">
	<input type="text" class="w3-input w3-border" name="address" value="<?php echo $record['address']?>" />
	</td></tr>
	<tr>
	<td>&nbsp;</td>
	<td style="padding-bottom: 10px">
	<input type="submit" class="w3-button w3-black" name="con_submit" value="Save" />
	<a class="w3-button w3-black" href="add_checkout.php">Cancel</a>
	<input type="hidden" name="id" value="<?php echo $record['id']; ?>">
	</td></table>
</body>
</html>
<?php
      }
?>