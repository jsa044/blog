<?php include "includes/header.php";    ?>

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