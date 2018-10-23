<!--  post  -->
<?php
 if(isset($_GET['name'])){
  echo $_GET['name'];
	// print_r($_GET); // sometimes attacker can insert script from url to prevent this you can use html entities 
 	echo htmlentities($_POST);
 }

 if(isset($_POST['name'])){
 	print_r($_POST);
 }
 // $_REQUEST works whehter value is get or post

 if(isset($_REQUEST['name'])){
 	print_r($_REQUEST);
 	echo htmlentities($_REQUEST);
 	    $name =$_REQUEST['name'];
 }


// echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html>  
<head>
	</head>
<body>
	<form method='POST' action="get_post.php">
		<div>
			<label> Name </label> <br>
			<input type="text" name="name">
		</div>

		<div>
			<label> Email </label> <br>
			<input type="text" name="email">
		</div>
					<input type="submit" name="submit">

	</form>
	<ul>
<li>
	<a href="get_post.php?name=brad"> BRAD</a>
</li>
<li>
	<a href="get_post.php?name=rooh"> ROOH</a>
</li>
	</ul>
	<h1>
		<?php echo "{$name}'s Profile"; ?>
	</h1>
</body>
</html>  