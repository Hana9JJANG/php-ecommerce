<html>
<?php
session_start ();
require_once 'mysql_connect.php';

$id = $_GET['id'];

$sql = "select * from `contact` WHERE id = $id";

// echo $sql;

$result = mysqli_query($dbc, $sql);
$record = mysqli_fetch_array($result);

// echo $record['id'];

?>

<body>

	<h1 align="center">EDIT FEEDBACK</h1>
	<table align="center">
	<form action="process_edit.php" method="post">
	<tr>
	<td style="font-weight: bold; padding-bottom: 10px" align="right">Name</td>
	<td style="padding-bottom: 10px">
	<input type="text" name="name" value="<?php echo $record['name']?>" />
	</td></tr>
	<tr>
	<td style="font-weight: bold; padding-bottom: 10px" align="right"> Email </td>
	<td style="padding-bottom: 10px">
	<input type="text" name="email" value="<?php echo $record['email']?>" />
	</td></tr>
	<tr>
	<td style="font-weight: bold; padding-bottom: 10px" align="right">Subject</td>
	<td style="padding-bottom: 10px">
	<input type="text" name="subject" value="<?php echo $record['subject']?>" />
	</td></tr>
	<tr>
	<td style="font-weight: bold; padding-bottom: 10px" align="right"> Message </td>
	<td style="padding-bottom: 10px">
	<input type="text" name="message" value="<?php echo $record['message']?>" />
	</td></tr>
	<tr>
	<td>&nbsp;</td>
	<td style="padding-bottom: 10px">
	<input type="submit" name="con_submit" value="Save" /> 
	<input type="reset" name="con_reset" value="Reset" /> 
	<input type="button" value="Cancel" onclick="gotoList();" />
	<input type="hidden" name="id" value="<?php echo $record['id']; ?>">
	</td></table>
</body>
</html>