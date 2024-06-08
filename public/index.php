<?php
namespace MyApp;
use MyApp\Lib\FrontController;

 require "../MyApp/Config.php";


require_once  'vendor/autoload.php';
$controller = new FrontController;
$controller->dispatch();


