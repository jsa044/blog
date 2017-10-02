
</div><!-- /.blog-main -->
<div class="col-sm-3 offset-sm-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php echo $sitedescription;  ?> </p>
          </div>
          <div class="sidebar-module">
            <h4>Categories</h4>
            <?php    if($categories)  :      ?>
            <ol class="list-unstyled">
            	<?php  while($row = $categories->fetch_assoc()) : ?>
              <li><a href="#"><?php echo $row['name']; ?></a></li>
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