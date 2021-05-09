<?php // Dùng để điều hướng
define ('DS', DIRECTORY_SEPARATOR); //thay dấu /
define ('HOME', dirname(__DIR__));  // quay lại Thp/

class HOME
{
    function Homepage(){
    require_once HOME . DS . 'includes'. DS . 'index.php';
    }
}

?>
