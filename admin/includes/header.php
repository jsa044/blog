<?php include "../config/config.php"; ?>
<?php include "../libraries/Database.php";   ?>
<?php include "../helpers/format_helper.php";  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    

    <title>Admin Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
	

    <!-- Custom styles for this template -->
    <link href="../css/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="navbar">
          <a class="nav-link active" href="index.php">Dashboard</a>
          <a class="nav-link" href="add_post.php">Add Post</a>
          <a class="nav-link" href="add_category.php">Add Category</a>
          <a class="nav-link pull-right" href="http://localhost/blog">Visit Blog</a>
          
          
        </nav>
      </div>
    </div>
    <div class="container">
    <div class="blog-header">      
      <h2>Admin Page</h2>
    </div>
    
    
      <div class="row">
        <div class="col-sm-12 blog-main">