<?php
require_once 'controller.php';

$url = explode('/', $_SERVER['REQUEST_URI']); 

$ctrl = $url[1] ? $url[1] : 'Controller';
$act = $url[2] ? $url[2] : 'index';
$controller = new $ctrl();
$controller->$act();