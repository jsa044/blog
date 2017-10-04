<?php include "includes/header.php";    ?>


   <div class="container">
  
  <form method="post" action="/add_post.php">
    <div class="form-group">
      <label >Post Title</label>
      <input name="title" type="text" class="form-control"  placeholder="Enter Title" >
    </div>    
    
    
    <div class="form-group">
      <label >Post Body</label>
      <textarea name="body" class="form-control"  placeholder="Enter Post" ></textarea>
    </div>    
    
    
    <div class="form-group">
      <label >Category</label>
      <select name="category" class="form-control">
      	
      	<option>News</option>
      	<option>Events</option>
      	<option>3</option>
      	<option>4</option>
      	<option>5</option>    	
      	
      	
      </select>
    </div>   
    
    <div class="form-group">
      <label >Tags</label>
      <input name="tags" type="text" class="form-control"  placeholder="Enter Tags" >
    </div>   
    
    <div class="form-group">
      <label >Author</label>
      <input name="author" type="text" class="form-control"  placeholder="Enter Name" >
    </div>   
    
    
    
     <div>
    <button name="submit"  type="submit" class="btn btn-default">Submit</button>    
    <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
  </form>
</div> </br>   <!--Container Div-->







<?php include "includes/footer.php";    ?>