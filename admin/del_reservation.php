<?php
//del_reservation (to delete reservation from admin-reservation.php)
session_start();

require_once 'mysql_connect.php';

$reserveID = $_GET['reserveID'];

$sql = "DELETE FROM `reservation` WHERE `reserveID` = $reserveID";

if(!mysqli_query($dbc, $sql)) {
	die("Error. Data cannot be deleted.");
}

mysqli_close($dbc);

header("Location:admin-reservation.php?mode=delete");

exit();
?>