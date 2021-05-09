<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php'); ?>
<body>
 <?php include('includes/navigation.php'); ?>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <?php include('includes/sidebar-CSKH.php'); ?>
    </div>
        
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <div class="row">
        <?php
        if (!empty($CSKH_document_array)) { 
		      foreach($CSKH_document_array as $key=>$value){
	      ?> 
			<div class="product-tile-footer"></br>
			<div class="product-title"><?php echo $CSKH_document_array[$key]["title"]; ?></div></br><hr>
            <div class="product-price"><?php echo "&nbsp".$CSKH_document_array[$key]["long_desc"]?></div>
            </div>
          <?php
	        	}
           	 }
	        ?>
        </div>
        <!-- /.row -->
        
      </div>
      <!-- /.col-lg-9 -->
          
    </div>
    <!-- /.row -->
    
  </div>
  <!-- /.container -->
     
    <?php include('includes/footer.php'); ?>
</body>

</html>
