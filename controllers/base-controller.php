<?php 
define ('DS', DIRECTORY_SEPARATOR); 
define ('HOME', dirname(__DIR__));  

class HOME
{
    function Homepage(){
    require_once HOME . DS . 'includes'. DS . 'index.php';
    }
}

?>
