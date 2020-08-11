<?php

session_start ();

require_once 'mysql_connect.php';


$id = $_POST['id'];

//$invoice_no = trim ( $_POST ['invoice_no'] );
$id = trim ( $_POST ['id'] );
$name = trim ( $_POST ['name'] );
$description = trim ( $_POST ['description'] );
$message = trim ( $_POST ['price'] );


$sql = "UPDATE `delivery_prod` SET name='".$_POST['name']."', description='".$_POST['description']."',
	 price='".$_POST['price']."'  WHERE id='".$_POST['id']."'";



// echo $sql;

$result = mysqli_query($dbc, $sql);

mysqli_close($dbc);

header("Location:admin-product.php?mode=edit");

?>








