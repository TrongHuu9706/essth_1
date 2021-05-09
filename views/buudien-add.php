<!DOCTYPE html>
<html>
  <head>
    <title>App Shop</title>
    <script src="../ckeditor/ckeditor.js"></script>
    <link rel="icon" type="image/png" href="../assets/images/img-header/favicon.png">
  </head>
  <body>
    <form method='post' action='' required enctype="multipart/form-data">
<!--input tag for file types should have a "type" attribute with value "file"-->
       <h3>Mã Bưu Kiện:</h3> 
       <input type="text" name="ma_bk" required value="<?php $ma_bk; ?>" ><br>
       <h3>Kinh Doanh:</h3>
       <select name="phong_ban" id="phong_ban" required>
                    <option value="" selected>Chọn Phòng Kinh Doanh</option>
                    <option value="1" >KD 1</option>
                    <option value="2" >KD 2</option>
                    <option value="3" >KD 3</option>
                    <option value="4" >KD 4</option>
                    <option value="5" >KD 5</option>
                </select>
        <h3>Loại Bưu Điện:</h3>
       <select name="loai_bd" id="loai_bd" required>
                    <option value="" selected>Loại Bưu Điện</option>
                    <option value="1" >Hối Hàng</option>
                    <option value="2" >Định Vị</option>
                    <option value="3" >Bảo Hành</option>
                    <option value="4" >Hối Chuyển Hoàn</option>
                </select>  
       <h3>Tên Khách Hàng:</h3> 
       <input type="text" name="ten_kh" required value="<?php $ten_kh; ?>" ><br>
       <h3>Số Điện Thoại:</h3> 
       <input type="text" name="so_dt" required value="<?php $so_dt; ?>" ><br>
       <h2>Nội Dung:</h2><br> 
       <textarea id='long_desc' name='long_desc' class="ckeditor" value="<?php $long_desc; ?>"></textarea><br>
       <input type="submit" name="submit" value="Gửi">
    </form>
    <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    var editor=CKEDITOR.replace( 'long_desc',
  {
     filebrowserBrowseUrl: '../ckfinder/ckfinder.html',
     filebrowserImageBrowseUrl: '../ckfinder/ckfinder.html?type=Images',
     filebrowserUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
     filebrowserImageUploadUrl: '../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
 });
</script>
  </body>
</html>