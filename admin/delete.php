<?php
// delete.php (to delete feedback from admin-feedback.php)
session_start();

require_once 'mysql_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM `contact` WHERE `id` = $id";

if(!mysqli_query($dbc, $sql)) {
	die("Error. Data cannot be deleted.");
}

mysqli_close($dbc);

header("Location:admin-feedback.php?mode=delete");

exit();
?>