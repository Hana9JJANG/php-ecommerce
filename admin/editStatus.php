<?php

session_start ();

require_once 'mysql_connect.php';


$id = $_POST['id'];

//$invoice_no = trim ( $_POST ['invoice_no'] );
$id = trim ( $_POST ['id'] );
$status = trim ( $_POST ['status'] );

$sql = "UPDATE `orders` SET order_status='".$status."'  WHERE order_number='".$id."'";



// echo $sql;

$result = mysqli_query($dbc, $sql) or die(mysqli_error($dbc));

mysqli_close($dbc);

header("Location:admin-order.php");

?>