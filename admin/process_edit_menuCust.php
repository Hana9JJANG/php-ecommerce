<?php

session_start ();

require_once 'mysql_connect.php';


$id = $_POST['id'];

//$invoice_no = trim ( $_POST ['invoice_no'] );
$id = trim ( $_POST ['id'] );
$name = trim ( $_POST ['name'] );
$email = trim ( $_POST ['email'] );
$phone = trim ( $_POST ['phone'] );
$address = trim ( $_POST ['address'] );

$sql = "UPDATE `user` SET name='".$_POST['name']."', email='".$_POST['email']."', phone='".$_POST['phone']."', address='".$_POST['address']."'  WHERE id='".$_POST['id']."'";



// echo $sql;

$result = mysqli_query($dbc, $sql);

mysqli_close($dbc);

header("Location:admin-customer.php");

?>