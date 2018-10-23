<?php
require('config/config.php');

require('config/db.php');

if(isset($_POST['delete'])){
// get form data
	$update_id =  mysqli_real_escape_string($conn,$_POST['delete_id']);

	$query = "DELETE FROM  post  WHERE id = {delete_id}";
    if(mysqli_query($conn,$query)){
    	header('location:'.ROOT_URL.'');

    }
    else{
    	echo "error". mysqli_error($conn);
    }
    //get id

}

//get id
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
  	<a href="<?php echo ROOT_URL; ?>" class="btn btn-default" > Back</a>
      <h1><?php echo $post['title']; ?></h1>
      
      <div class="well">
<h3> <?php echo $post['title']; ?></h3>


<small>create on  <?php echo  $post['create_at']; ?> by   <?php echo  $post['author']; ?>  </small>
<p> <?php echo  $post['body']; ?>  </p>
<hr>

<form class="pull-right" method="POST" action="<?php echo  $_SERVER['PHP_SELF']; ?>">

<input type="hidden" name="delete_id" value"<?php echo  $_post['id']; ?>">
<input type="submit" name="delete" value"Delete" class="btn btn-danger">

</form>
  	<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-default" > Edit post</a>

      </div>

   
</div>
<?php include('inc/footer.php') ?>
