<?php include 'server-info.php'; ?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

<div class="container">

  <h1> MY new php class </h1>
  <?php if($server): ?>
  <ul class="list-group">
    <?php  foreach($server as $key => $value): ?>
    <li class="list-group-item">
      <strong> <?php echo $key; ?>: </strong>
      <?php echo $value; ?>
    </li>
  <?php endforeach; ?>

  </ul>
   <?php endif; ?>

  
  </div>


  <div class="container">

  <h1> MY new php Client </h1>
  <?php if($client): ?>
  <ul class="list-group">
    <?php  foreach($client as $key => $value): ?>
    <li class="list-group-item">
      <strong> <?php echo $key; ?>: </strong>
      <?php echo $value; ?>
    </li>
  <?php endforeach; ?>

  </ul>
   <?php endif; ?>

  
  </div>
    

  </body>

</html>
