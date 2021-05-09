<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php'); ?>
<body>
 <?php include('includes/navigation.php'); ?>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
        <?php include('includes/sidebar-doc.php'); ?>
    </div>
        
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <div class="row">
        <?php
        if (!empty($document_array)) { 
		      foreach($document_array as $key=>$value){
	      ?> 
            <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h4 class="card-title">
                <a href="<?php echo './document.php?id=' . $document_array[$key]['id']?>" align="left" target="_blank"><?php echo $document_array[$key]["title"]; ?></a>
                </h4>
                <p class="card-text">Ngày cập nhật: <?php echo "&nbsp".$document_array[$key]["datetime"]?></p>
                <p class="card-text"></p>
              </div>
            </div>
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
