<!DOCTYPE html>
<html lang="en">
<?php include('includes/header.php'); ?>
<style>
.table > tbody > tr > td{
    padding: 5px;
    vertical-align: middle;
}
.button {
  
  border: none;
  color: white;
  padding: 6px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  cursor: pointer;
}
.button:hover {
  text-decoration: none;
  color: white;
  opacity: 0.8;

}

.button-blue {background-color: #0000FF;} /* Blue */
.button-red {background-color: #FF0000;} /* Red */ 
.button-green {background-color: #008000;} /*Green */
.button-purple  {background-color: purple;} /*purple  */
.custom-alert {
  font-size: 16px;
  font-weight: bold;
  color: white;
  padding: 6px;
  margin: 2px;
  background: green;
  border: 1px solid transparent;
  border-radius: unset;
}
</style>
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
        <table class="table">
            <thead>
                <tr>
                    <th>Mã Bưu Kiện</th>
                    <th>Khách Hàng</th>
                    <th>Điện Thoại</th>
                    <th>Nội Dung</th>
                    <th>Trạng Thái</th>
                    <th class="text-right">Chọn</th>
                </tr>
            </thead>
            <tbody>
        <?php
        if (!empty($CSKH_array)) { 
		      foreach($CSKH_array as $key=>$value){
	      ?> 
            <tr>
                <td><?php echo $CSKH_array[$key]["ma_bk"] ?></td>
                <td><?php echo $CSKH_array[$key]["ten_kh"] ?></td>
                <td><?php echo $CSKH_array[$key]["so_dt"] ?></td>
                <td><?php echo $CSKH_array[$key]["long_desc"] ?></td>
                <td><?php echo $CSKH_array[$key]["trang_thai"] ?></td>
                <td class="text-right">    
                    <a  class="button button-green">Xem</a>
                </td>
            </tr>
          <?php
	        	}
           	 }
	        ?>
            </tbody>
        </table>
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
