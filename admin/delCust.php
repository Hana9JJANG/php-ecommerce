<html> 
<!-- delete_menu.php (to delete menu from admin-menu.php) -->

<?php

session_start();

require_once 'mysql_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM `user` WHERE `id` = $id";

if(!mysqli_query($dbc, $sql)) {
	die("Error. Data cannot be deleted.");
}

mysqli_close($dbc);

header("Location:admin-customer.php?mode=delete");


?>


</html>

