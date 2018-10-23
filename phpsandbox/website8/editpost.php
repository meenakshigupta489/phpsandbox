<?php
require('config/db.php');
require('config/config.php');

// check for submit 
if(isset($_POST['submit'])){
// get form data
	$update_id =  mysqli_real_escape_string($conn,$_POST['update_id']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
	$body = mysqli_real_escape_string($conn,$_POST['body']);
	$author = mysqli_real_escape_string($conn,$_POST['author']);
	$query = "UPDATE  post SET 
	title='$title',
	author='$author',
	body='$body'

WHERE id={$update_id}";
    if(mysqli_query($conn,$query)){
    	header('location:'.ROOT_URL.'');

    }
    else{
    	echo "error". mysqli_error($conn);
    }
    //get id

}
$id = mysqli_real_escape_string($conn, $_GET['id']);

// create query
$query = 'SELECT * FROM post WHERE id='.$id;
// get result
$result = mysqli_query($conn,$query);



// featch data
$post = mysqli_fetch_assoc($result);
// var_dump($post);



// free result
mysqli_free_result($result);


// close connect
mysqli_close($conn);
?>

<?php include('inc/header.php') ?>
<?php include('inc/navbar.php') ?>

  <div class="container">
      <h1> Add POSTS</h1>
      <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
			</div>
			<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
			</div>
			<div class="form-group">
				<label>Body</label>
				<textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
			</div>
			<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		</form>
</div>
<?php include('inc/footer.php') ?>
