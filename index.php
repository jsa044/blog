<?php include "includes/header.php";  ?>

<?php  
          //Create Database object
          $db = new Database();
		  
		  //Create Query
		  $query = "SELECT * FROM posts ORDER BY id DESC";
		  //Run Query
		  $posts = $db->select($query);	
		  
		  
		  
		      //Create Query
		  $query = "SELECT * FROM categories";
		  //Run Query
		  $category = $db->select($query);	
		  
		  	  
  ?>
  <?php if($posts) : ?>
  <?php  while($row = $posts->fetch_assoc()) :   ?>	
          <div class="blog-post">
            <h2 class="blog-post-title"><?php  echo $row['title'];   ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']);    ?> by <a href="#"><?php echo $row['author'];   ?></a></p>            
            <hr>
            <?php  echo  shortenText($row['body']);?>
            <a class="readmore" href="post.php?id=1"<?php  echo urlencode($row['id']);  ?>">Read More...</a>
          </div><!-- /.blog-post -->
  <?php endwhile;  ?>
          
         

       <?php else : ?>
        <?php endif; ?>
        <?php include "includes/footer.php";  ?>
