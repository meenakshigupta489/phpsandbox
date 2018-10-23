<?php
if(isset($_POST['submit'])){
$username = htmlentities($_POST['name']);
setcookie('name',$username, time()+3600);
// setting cookie for 1 hour after that it will expire
header('Location: page2.php');
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="name" placeholder="Enter Name">
		<br>
		<!-- <input type="text" name="email" placeholder="Enter Email">
		<br> -->
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>