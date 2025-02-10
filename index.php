<?php


use Younes\TourDeMaroc\Core\Router;
use Younes\TourDeMaroc\Controllers\HomeController;


$route = new Router();

$route->add('GET', '/', [HomeController::class, 'index']);



$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$route->dispatch($method, $uri);

