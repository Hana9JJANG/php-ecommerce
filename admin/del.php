<html> 
<!-- delete_menu.php (to delete menu from admin-menu.php) --!>

<?php

session_start();

require_once 'mysql_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM `delivery_prod` WHERE `id` = $id";

if(!mysqli_query($dbc, $sql)) {
	die("Error. Data cannot be deleted.");
}

mysqli_close($dbc);

header("Location:admin-menu.php?mode=delete");


?>


</html>

