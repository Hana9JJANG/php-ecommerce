<?php

session_start ();

require_once 'mysql_connect.php';


$id = $_POST['id'];

//$invoice_no = trim ( $_POST ['invoice_no'] );
$id = trim ( $_POST ['id'] );
$name = trim ( $_POST ['name'] );
$email = trim ( $_POST ['email;'] );
$subject = trim ( $_POST ['subject'] );
$message = trim ( $_POST ['message'] );


$sql = "UPDATE `contact` SET name='".$_POST['name']."', email='".$_POST['email']."',
	subject='".$_POST['subject']."', message='".$_POST['message']."'  WHERE id='".$_POST['id']."'";



// echo $sql;

$result = mysqli_query($dbc, $sql);

mysqli_close($dbc);

header("Location:test.php?mode=edit");

?>








