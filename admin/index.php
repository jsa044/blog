<?php include "config/config.php"; ?>
<?php include "libraries/Database.php";   ?>
<?php include "helpers/format_helper.php";  ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    

    <title>The Learn PHP Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="index.php">Home</a>
          <a class="nav-link" href="posts.php">All Posts</a>
          
        </nav>
      </div>
    </div>

    <div class="blog-header">      
      <div class="container"> 
      	 <div class="logo"><img src="images/logo.png"</div>     	
        <h1 class="blog-title">The PHP Blog</h1>
        <p class="lead blog-description">PHP News, Tutorials, Videos and more.</p>
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">
        	

<!----------------CONTENT HERE---------------------------------------------->




</div><!-- /.blog-main -->
<div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php echo $sitedescription;  ?> </p>
          </div>
          <div class="sidebar-module">
            <h4>Categories</h4>
            <?php    if($category)  :      ?>
            <ol class="list-unstyled">
            	<?php  while($row = $category->fetch_assoc()) : ?>
              <li><a href="posts.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
               <?php endwhile;  ?>             
            </ol>
            <?php  else :    ?>
            	 <p>There are no categories yet.</p>
            	 
            	
            <?php   endif;      ?>	
          </div>
          
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>The Learn PHP Blog 2017.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.js"></script>    
    <script src="js/bootstrap.js"></script>
    
    
  </body>
</html>   



