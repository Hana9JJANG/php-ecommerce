<?php

session_start ();

require_once 'mysql_connect.php';


$id = $_POST['id'];

//$invoice_no = trim ( $_POST ['invoice_no'] );
$id = trim ( $_POST ['id'] );
$name = trim ( $_POST ['name'] );
$price1 = trim ( $_POST ['price1'] );
$price2 = trim ( $_POST ['price2'] );


$sql = "UPDATE `menu` SET name='".$_POST['name']."', price_1='".$_POST['price1']."',  price_2='".$_POST['price2']."'  WHERE id='".$_POST['id']."'";



// echo $sql;

$result = mysqli_query($dbc, $sql);

mysqli_close($dbc);

header("Location:admin-menu.php");

?>

		