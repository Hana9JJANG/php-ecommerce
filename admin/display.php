<html>
<?php
if(isset($_POST['submitted'])){
$errors = array(); // Initialize error array.
	
	// Check for a name.
	if (empty($_POST['name'])) {
		$errors[] = 'You forgot to enter your name.';
	} else {
		$n = trim($_POST['name']);
	}
	
	// Check for a last name.
	if (empty($_POST['description'])) {
		$errors[] = 'You forgot to enter your description.';
	} else {
		$d = trim($_POST['description']);
	}
	
	if (empty($_POST['image'])) {
		$errors[] = 'You forgot to enter your image';
	} else {
		$i = $_POST['image'];
	}
	
	if (empty($_POST['price'])) {
		$errors[] = 'You forgot to enter your price';
	} else {
		$p = $_POST['price'];
	}
	

	}
	
	echo "<p>
	
	<br /><br /><b>First name : </b>$n 
	<br /><br /><b>Last name : </b>$d
	<br /><br /><b>Phone number: </b>$p
	<br /><br /><b>Email: </b>$i
	<br />";
	
	require_once ('mysql_connect.php');
			$query = "INSERT INTO delivery_prod (description, name, image, price) VALUES ('$d', '$n', '$i', '$p')";
			$result = mysqli_query($dbc, $query);
				if ($result) { // If it ran OK.
				
					
					// Print a message.
					echo '<p><b>Product added</b></p>';				
								
				} else { // If it did not run OK.
					echo '<h1 id="mainhead">System Error</h1>
					<p class="error">The reservations cannot be processed.</p>'; // Public message.
					echo '<p>' . mysql_error() . '<br /><br />Query: ' . $query . '</p>'; // Debugging message.
					exit();
				}
			mysqli_close($dbc);
	
	?>
		<form action = "display.php" method = "post"/>
		</html>
