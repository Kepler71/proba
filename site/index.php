<?php
require_once __DIR__.'/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl']: 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl . 'Controller';
$controller = new $controllerClassName;
$method = 'action' . $act;
$controller->$method();
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