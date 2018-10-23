<?php
require('config/db.php');
require('config/config.php');

// check for submit 
if(isset($_POST['submit'])){
// get form data

	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$body = mysqli_real_escape_string($conn,$_POST['body']);
	$author = mysqli_real_escape_string($conn,$_POST['author']);
	$query = "INSERT INTO post(title,author,body) VALUES('$title','$author','$body')";
    if(mysqli_query($conn,$query)){
    	header('location:'.ROOT_URL.'');

    }
    else{
    	echo "error". mysqli_error($conn);
    }
}
?>

<?php include('inc/header.php') ?>
<?php include('inc/navbar.php') ?>

  <div class="container">
      <h1> Add POSTS</h1>
      <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<div class="form-group">
	<label>Title</label>
	<input type="text" name="title" class="form-control">
</div>
<div class="form-group">
	<label>Author</label>
	<input type="text" name="title" class="form-control">
</div>

<div class="form-group">
	<label>body</label>
	<textarea name="body" class="form-control"></textarea>
</div>
<input type="submit" name="submit" value="submit" lass="btn btn-primary">





      </form>
</div>
<?php include('inc/footer.php') ?>
