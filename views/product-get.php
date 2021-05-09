<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php'); ?>
<body>
 <?php include('includes/navigation.php'); ?>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <?php include('includes/sidebar.php'); ?>
    </div>
        
      <!-- /.col-lg-3 -->
      <div class="col-lg-9">
        <div class="row">
        <?php
        if (!empty($product_array)) { 
		      foreach($product_array as $key=>$value){
	      ?> 
      <div class="product-image"><a href="../assets/images/img-products/<?php echo $product_array[$key]["imagename"];?>"><img src="../assets/images/img-products/<?php echo $product_array[$key]["imagename"];?>" width="220px" height="200px" title="<?php echo $product_array[$key]["imagename"]; ?>"></a></div>
			<div class="product-tile-footer"></br>
			<div class="product-title"><?php echo $product_array[$key]["title"]; ?></div></br><hr>
      <a href="../assets/images/img-products/<?php echo $product_array[$key]["imagename1"];?>"><img src="../assets/images/img-products/<?php echo $product_array[$key]["imagename1"];?>" width="220px" height="200px" title="<?php echo $product_array[$key]["imagename1"]; ?>"></a>
			<a href="../assets/images/img-products/<?php echo $product_array[$key]["imagename2"];?>"><img src="../assets/images/img-products/<?php echo $product_array[$key]["imagename2"];?>" width="220px" height="200px" title="<?php echo $product_array[$key]["imagename2"]; ?>"></a>
      <a href="../assets/images/img-products/<?php echo $product_array[$key]["imagename3"];?>"><img src="../assets/images/img-products/<?php echo $product_array[$key]["imagename3"];?>" width="220px" height="200px" title="<?php echo $product_array[$key]["imagename3"]; ?>"></a>
            </br></br>
			<div class="product-price"><?php echo '<i>'.'Giá niêm yết: '.'</i>' . "&nbsp".$product_array[$key]["gia_sp"]?></div>
            <div class="product-price"><?php echo "&nbsp".$product_array[$key]["long_desc"]?></div>
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
