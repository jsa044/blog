<?php include "includes/header.php";    ?>
<?php    
   //Create DB Objext
   $db = new Database;
   // Get posts
   $query = "SELECT * FROM posts";
   $posts = $db->select($query)   
 ?>  
        	
    
<div class="container">
<table class="table table-striped">
   <tr>   	   
   	   <th>Post  ID#</th>
   	   <th>Post  Title</th>
   	   <th>Post  Category</th>
   	   <th>Post  Author</th>
   	   <th>Post  Date</th>   	
   </tr>
   <tr>
   	   <?php  while($row = $posts->fetch_assoc()) :    ?>
       <td></td>
       <td></td>
       <td></td>
       <td></td>       
   	   <?php  endwhile; ?>
   </tr>
   </table>
   
   <table class="table table-striped">
   <tr>
   	   <th>Category  ID#</th>
   	   <th>Category Name</th>
   	   	
   </tr>
   <tr>
       <td>Static Content</td>
   	   <td>Static Content</td>
   	   
   </tr>
   </table>
   
   
   
   
   
   </div>
 <?php include "includes/footer.php";    ?>   