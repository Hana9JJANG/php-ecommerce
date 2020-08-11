<?php
session_start();
unset($_SESSION['sess_email']);
session_destroy();
header("Location: order.php");
?>