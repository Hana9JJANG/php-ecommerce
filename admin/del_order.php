<html> 
<!-- del_order.php (to delete order in admin-order.php) --!>

<?php

session_start();

require_once 'mysql_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM `orders` WHERE `id` = $id";

if(!mysqli_query($dbc, $sql)) {
	die("Error. Data cannot be deleted.");
}

mysqli_close($dbc);

header("Location:admin-order.php?mode=delete");


?>


</html>

