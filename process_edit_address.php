<?php
session_start();
if(!isset($_SESSION["sess_email"])){
header("Location: order.php");
}
else
{
?>

<?php


require_once 'mysql_connect.php';


$id = $_POST['id'];

//$invoice_no = trim ( $_POST ['invoice_no'] );
$address = trim ( $_POST ['address'] );



$sql = "UPDATE `user` SET address='".$_POST['address']."'  WHERE id='".$_POST['id']."'";



// echo $sql;
$result = mysqli_query($dbc, $sql);

mysqli_close($dbc);

header("Location:add_checkout.php?mode=edit");

?>
<?php
      }
?>








