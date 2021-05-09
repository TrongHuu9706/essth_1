<?php // Dùng để điều hướng
define ('DS', DIRECTORY_SEPARATOR); //thay dấu /
define ('HOME', dirname(__DIR__));  // quay lại Thp/

class HOME
{
    function Homepage(){
    require_once HOME . DS . 'includes'. DS . 'index.php';
    }
}
// Công Dụng Sản Phẩm
class PRODUCT_C
{
    public $model;
    public $key;
    public $product_array;
    public $query;
    public $value;
    
    function All_Product_C(){
    require_once HOME . DS . 'models'. DS . 'model.php';  
	$model = new PRODUCT_M();
    if (!isset($_GET['id']) ) {
    $product_array = $model->runQuery("SELECT * FROM san_pham ORDER BY id DESC");
    require_once HOME . DS . 'views'. DS . 'product-show.php';
    }
    else{
        $view_id=($_GET['id']);
        $product_array = $model->runQuery("SELECT * FROM san_pham WHERE id=$view_id");
        require_once HOME . DS . 'views' . DS . 'product-get.php';    
        }
            
    }
    function Delete_Product_C(){
       require_once HOME . DS . 'models'. DS . 'model.php';  
	    $model = new PRODUCT_M();
        $model -> Delete_M();
        if($result){
               $_SESSION['message']="Đã Xóa";
           }
         header('Location: dashboard.php');     
        }
}
// Lọc Sản Phẩm
class PRODUCT_C_FT extends PRODUCT_C 
{
   public $filter;
   function DDGD(){
    require_once HOME . DS . 'models'. DS . 'model.php';  
	$model = new PRODUCT_M();
    if (!isset($_GET['id']) ) {
    $filter = '1';
    $product_array = $model->runQuery("SELECT * FROM san_pham WHERE loai_sp = $filter ORDER BY id DESC");
    require_once HOME . DS . 'views'. DS . 'product-show.php';
    }
    else{
        $view_id=($_GET['id']);
        $product_array = $model->runQuery("SELECT * FROM san_pham WHERE id=$view_id");
        require_once HOME . DS . 'views' . DS . 'product-get.php';    
        }
            
    }
    function CSSK(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ) {
        $filter = '2';
        $product_array = $model->runQuery("SELECT * FROM san_pham WHERE loai_sp = $filter ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'product-show.php';
        }
        else{
            $view_id=($_GET['id']);
            $product_array = $model->runQuery("SELECT * FROM san_pham WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'product-get.php';    
            }
                
    }
    function LD(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ) {
        $filter = '3';
        $product_array = $model->runQuery("SELECT * FROM san_pham WHERE loai_sp = $filter ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'product-show.php';
        }
        else{
            $view_id=($_GET['id']);
            $product_array = $model->runQuery("SELECT * FROM san_pham WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'product-get.php';    
            }
                
    }
    function QT(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ) {
        $filter = '4';
        $product_array = $model->runQuery("SELECT * FROM san_pham WHERE loai_sp = $filter ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'product-show.php';
        }
        else{
            $view_id=($_GET['id']);
            $product_array = $model->runQuery("SELECT * FROM san_pham WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'product-get.php';    
            }
                
    }
}
// Tài Liệu Bán Hàng
class DOCUMENT_C
{
    public $document;
    public $key;
    public $document_array;
    public $query;
    public $value;
    
    function All_Document_C(){
    require_once HOME . DS . 'models'. DS . 'model.php';  
	$model = new PRODUCT_M();
    if (!isset($_GET['id']) ) {
    $document_array = $model->runQuery("SELECT * FROM tai_lieu ORDER BY id DESC");
    require_once HOME . DS . 'views'. DS . 'document-show.php';
    }
    else{
        $view_id=($_GET['id']);
        $document_array = $model->runQuery("SELECT * FROM tai_lieu WHERE id=$view_id");
        require_once HOME . DS . 'views' . DS . 'document-get.php';    
        }
            
    }
}
// Lọc Tài Liệu Bán Hàng
class DOCUMENT_C_FT extends DOCUMENT_C 
{
   public $filter;
function CLBH(){
    require_once HOME . DS . 'models'. DS . 'model.php';  
	$model = new PRODUCT_M();
    if (!isset($_GET['id']) ) {
    $filter = '1';
    $document_array = $model->runQuery("SELECT * FROM tai_lieu WHERE loai_tl = $filter ORDER BY id DESC");
    require_once HOME . DS . 'views'. DS . 'document-show.php';
    }
    else{
        $view_id=($_GET['id']);
        $document_array = $model->runQuery("SELECT * FROM tai_lieu WHERE id=$view_id");
        require_once HOME . DS . 'views' . DS . 'document-get.php';    
        }
    }
function QTTV(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ) {
        $filter = '2';
        $document_array = $model->runQuery("SELECT * FROM tai_lieu WHERE loai_tl = $filter ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'document-show.php';
        }
        else{
            $view_id=($_GET['id']);
            $document_array = $model->runQuery("SELECT * FROM tai_lieu WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'document-get.php';    
            }
        }       
function TCN(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ){
        $filter = '3';
        $document_array = $model->runQuery("SELECT * FROM tai_lieu WHERE loai_tl = $filter ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'document-show.php';
        }
        else{
            $view_id=($_GET['id']);
            $document_array = $model->runQuery("SELECT * FROM tai_lieu WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'document-get.php';    
            }           
        }
function IN_QTTV(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ) {
        $filter = '4';
        $document_array = $model->runQuery("SELECT * FROM tai_lieu WHERE loai_tl = $filter ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'document-show.php';
        }
        else{
            $view_id=($_GET['id']);
            $document_array = $model->runQuery("SELECT * FROM tai_lieu WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'document-get.php';    
            }
        }
    }
// Chăm Sóc KH + Bưu Điện
class CSKH_C
    {
        public $CSKH_document;
        public $key;
        public $CSKH_document_array;
        public $query;
        public $value;
        
        function CSKH_Document_C(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ) {
        $CSKH_document_array = $model->runQuery("SELECT * FROM CSKH_tai_lieu ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'buudien-show-doc.php';
        }
        else{
            $view_id=($_GET['id']);
            $CSKH_document_array = $model->runQuery("SELECT * FROM CSKH_tai_lieu WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'buudien-get.php';    
            }
                
        }
    }
// Truy vấn HH DV BH HCH
class CSKH_C_FT extends CSKH_C 
{
function HH(){
    require_once HOME . DS . 'models'. DS . 'model.php';  
	$model = new PRODUCT_M();
    if (!isset($_GET['id']) ) {
    $CSKH_array = $model->runQuery("SELECT * FROM CSKH_hoi_hang WHERE loai_bd='1' ORDER BY id DESC");
    require_once HOME . DS . 'views'. DS . 'buudien-show.php';
    }
    else{
        $view_id=($_GET['id']);
        $CSKH_array = $model->runQuery("SELECT * FROM CSKH_hoi_hang WHERE id=$view_id");
        require_once HOME . DS . 'views' . DS . 'buudien-get.php';    
        }
    }
function DV(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ) {
        $CSKH_array = $model->runQuery("SELECT * FROM CSKH_hoi_hang WHERE loai_bd='2' ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'buudien-show.php';
        }
        else{
            $view_id=($_GET['id']);
            $CSKH_array = $model->runQuery("SELECT * FROM CSKH_hoi_hang WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'buudien-get.php';    
            }
        }       
function BH(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ){
        $CSKH_array = $model->runQuery("SELECT * FROM CSKH_hoi_hang WHERE loai_bd='3' ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'buudien-show.php';
        }
        else{
            $view_id=($_GET['id']);
            $CSKH_array = $model->runQuery("SELECT * FROM CSKH_hoi_hang WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'buudien-get.php';    
            }           
        }
function HCH(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ) {
        $CSKH_array = $model->runQuery("SELECT * FROM CSKH_hoi_hang WHERE loai_bd='4' ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'buudien-show.php';
        }
        else{
            $view_id=($_GET['id']);
            $CSKH_array = $model->runQuery("SELECT * FROM CSKH_hoi_hang WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'buudien-get.php';    
            }
        }
}
// Thêm KH cần xử lý
class CSKH_KH
{
    public $cskh;  
function Add_HH_C(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $cskh = new CSKH();
        $cskh -> Add_HH();
        require_once HOME . DS . 'views' . DS . 'buudien-add.php';
    }
}

// Ghi Âm
class RECORD_C
{
    public $record;
    public $key;
    public $record_array;
    public $query;
    public $value;
    
    function All_Record_C(){
    require_once HOME . DS . 'models'. DS . 'model.php';  
	$model = new PRODUCT_M();
    if (!isset($_GET['id']) ) {
    $record_array = $model->runQuery("SELECT * FROM ghi_am ORDER BY id DESC");
    require_once HOME . DS . 'views'. DS . 'record-get.php';
    }
    else{
        $view_id=($_GET['id']);
        $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE id=$view_id");
        require_once HOME . DS . 'views' . DS . 'record-get.php';    
        }
            
    }
}
// Truy vấn ghi âm
class RECORD_C_FT extends RECORD_C 
{
function GAQS(){
        require_once HOME . DS . 'models'. DS . 'model.php';  
        $model = new PRODUCT_M();
        if (!isset($_GET['id']) ) {
        $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE loai_ga='1' ORDER BY id DESC");
        require_once HOME . DS . 'views'. DS . 'record-show.php';
        }
        else{
            $view_id=($_GET['id']);
            $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE id=$view_id");
            require_once HOME . DS . 'views' . DS . 'record-get.php';    
            }
        }
function GADL(){
            require_once HOME . DS . 'models'. DS . 'model.php';  
            $model = new PRODUCT_M();
            if (!isset($_GET['id']) ) {
            $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE loai_ga='2' ORDER BY id DESC");
            require_once HOME . DS . 'views'. DS . 'record-show.php';
            }
            else{
                $view_id=($_GET['id']);
                $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE id=$view_id");
                require_once HOME . DS . 'views' . DS . 'record-get.php';    
                }
            }       
function GABBBG(){
            require_once HOME . DS . 'models'. DS . 'model.php';  
            $model = new PRODUCT_M();
            if (!isset($_GET['id']) ){
            $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE loai_ga='3' ORDER BY id DESC");
            require_once HOME . DS . 'views'. DS . 'record-show.php';
            }
            else{
                $view_id=($_GET['id']);
                $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE id=$view_id");
                require_once HOME . DS . 'views' . DS . 'record-get.php';    
                }           
            }
function GAVC(){
            require_once HOME . DS . 'models'. DS . 'model.php';  
            $model = new PRODUCT_M();
            if (!isset($_GET['id']) ) {
            $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE loai_ga='4' ORDER BY id DESC");
            require_once HOME . DS . 'views'. DS . 'record-show.php';
            }
            else{
                $view_id=($_GET['id']);
                $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE id=$view_id");
                require_once HOME . DS . 'views' . DS . 'record-get.php';    
                }
            }
function GAKSL(){
                require_once HOME . DS . 'models'. DS . 'model.php';  
                $model = new PRODUCT_M();
                if (!isset($_GET['id']) ){
                $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE loai_ga='5' ORDER BY id DESC");
                require_once HOME . DS . 'views'. DS . 'record-show.php';
                }
                else{
                    $view_id=($_GET['id']);
                    $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE id=$view_id");
                    require_once HOME . DS . 'views' . DS . 'record-get.php';    
                    }           
                }
function GACT(){
                require_once HOME . DS . 'models'. DS . 'model.php';  
                $model = new PRODUCT_M();
                if (!isset($_GET['id']) ) {
                $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE loai_ga='6' ORDER BY id DESC");
                require_once HOME . DS . 'views'. DS . 'record-show.php';
                }
                else{
                    $view_id=($_GET['id']);
                    $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE id=$view_id");
                    require_once HOME . DS . 'views' . DS . 'record-get.php';    
                    }
                }
function PHONG_IN(){
                require_once HOME . DS . 'models'. DS . 'model.php';  
                $model = new PRODUCT_M();
                if (!isset($_GET['id']) ) {
                $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE loai_ga='7' ORDER BY id DESC");
                require_once HOME . DS . 'views'. DS . 'record-show.php';
                }
                else{
                    $view_id=($_GET['id']);
                    $record_array = $model->runQuery("SELECT * FROM ghi_am WHERE id=$view_id");
                    require_once HOME . DS . 'views' . DS . 'record-get.php';    
                    }
                }
}
?>