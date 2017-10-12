<?php include "includes/header.php";    ?>


<?php 

   //Create Database object
          $db = new Database();

   if(isset($_POST['submit']))  {
   	
	  $name= mysqli_real_escape_string($db->link, $_POST['name']);
	   
	   
	   //Basic Validation
	   
	   if ($name=='') {
	   	
		//Set error message
		$error= 'Please fill out all required fields';
		
	   } else {
	   	   $query = "INSERT INTO posts 
	   	                    (title,body,category,author,tags)
	   	   VALUES('$title', '$body',  $category, '$author', '$tags')";
		   
		   $insert_row = $db->insert($query);
	   }
	
   }

 ?>


<form role="form" method='post' action='add_category.php'>
	<div class="form-group">
		<label>Category Name</label>
		<input type='text' name='name' class='form-control' placeholder="Enter Category">
	</br>
		<div>
		<input name="submit"  type="submit" class="btn btn-default" value="Submit">
		<a href="index.php" class="btn btn-default">Cancel</a>    
		</div>
	</div>
	
</form>


 <?php include "includes/footer.php";    ?>