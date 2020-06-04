<?php
require_once 'application/lib/dev.php';

use application\lib\Db;

spl_autoload_register(function($class){
    $path = str_replace('\\', '/', $class.'.php'); 
    if(file_exists($path)){
        require_once $path;
    }
});
session_start();
$router = new application\core\Router;
$router->run();
?>