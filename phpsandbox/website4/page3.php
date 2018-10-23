<?php
session_start();
print_r($_SESSION);
$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
$email = $_SESSION['email'];
?>



<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
<h1> hello <?php echo $name; ?></h1>
</body>
</html>