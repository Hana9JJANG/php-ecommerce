<?php

session_start ();

require_once 'mysql_connect.php';


$id = $_POST['id'];

//$invoice_no = trim ( $_POST ['invoice_no'] );
$id = trim ( $_POST ['id'] );
$name = trim ( $_POST ['name'] );
$price = trim ( $_POST ['price'] );
$description = trim ( $_POST ['description'] );
$image = $_POST ['imagebu'];
       	// Check for an image (not required).
       	if (is_uploaded_file ($_FILES['image']['tmp_name'])) {
            if (move_uploaded_file($_FILES['image']['tmp_name'], "../Picture/{$_FILES['image']['name']}")) { // Move the file over.
        
            echo '<p>The file has been uploaded!</p>';
         
        
            } else { // Couldn't move the file over.
                
            echo '<p><font color="red">The file could not be moved.</font></p>';
            $image = $_POST ['imagebu'];
                   }
            $image = $_FILES['image']['name'];
            } else {
                $image = $_POST ['imagebu'];
                   }


$sql = "UPDATE `delivery_prod` SET name='".$_POST['name']."', description='".$_POST['description']."', price='".$_POST['price']."', image='".$image."'  WHERE id='".$_POST['id']."'";



// echo $sql;

$result = mysqli_query($dbc, $sql);

mysqli_close($dbc);

header("Location:admin-menu.php");

?>