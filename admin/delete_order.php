<?php
//del_prod (to delete product from admin_delete_prod.php)
session_start();

require_once 'mysql_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM `orders` WHERE `order_number` = '$id'";

if(!mysqli_query($dbc, $sql)) {
	die("Error. Data cannot be deleted.");
}

mysqli_close($dbc);

header("Location:admin-order.php");

exit();
?>