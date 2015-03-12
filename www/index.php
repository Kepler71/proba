<?php
require_once __DIR__.'/autoload.php';

use Application\Classes\View;
use Application\Classes\E404Exception;

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = explode('/', $path);
$ctrl = (!empty($pathParts[1])) ? ucfirst($pathParts[1]) : 'News';
$act = !empty($pathParts[2]) ? ucfirst($pathParts[2]) : 'all';
$controllerClassName = 'Application\\Controllers' . $ctrl;


try
{
    $controller = new $controllerClassName;
    $controller->$method();
}
catch(E404Ecxeption $e){
$e->getAllInfoError();
$view = new View();
$view->display('/exeption/error.php');
}

?>