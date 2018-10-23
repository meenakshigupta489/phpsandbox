<?php
require('config/db.php');
require('config/config.php');


// create query
$query = 'SELECT * FROM post ORDER BY create_at DESC';
// get result
$result = mysqli_query($conn,$query);



// featch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);



// free result
mysqli_free_result($result);


// close connect
mysqli_close($conn);
?>

<?php include('inc/header.php') ?>
<?php include('inc/navbar.php') ?>

  <div class="container">
      <h1>POSTS</h1>
      <?php foreach ($posts as  $value) : ?> 
      <div class="well">
<h3> <?php echo $value['title']; ?></h3>


<small>create on  <?php echo  $value['create_at']; ?> by   <?php echo  $value['author']; ?>  </small>
<p> <?php echo  $value['body']; ?>  </p>
				<a class="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $value['id']; ?>">Read More</a>


     <?php endforeach; ?> 
</div>
<?php include('inc/footer.php') ?>
