<?php

require_once 'vendor/autoload.php';

use Core\Router;
use Controllers\HomeController;
use Controllers\ParcoursController;
use Controllers\PodiumController;
use Controllers\VideoController;
use Controllers\GdController;
use Controllers\CultureController;
use Controllers\AuthController;


$route = new Router();

$route->add('GET', '/', [HomeController::class, 'index']);
$route->add('GET', '/Parcours', [ParcoursController::class, 'index']);
$route->add('GET', '/Podium', [PodiumController::class, 'index']);
$route->add('GET', '/Culture', [CultureController::class, 'index']);
$route->add('GET', '/Video', [VideoController::class, 'index']);
$route->add('GET', '/Grande_Depart', [GDController::class, 'index']);
$route->add('GET', '/Login', [AuthController::class, 'login']);
$route->add('GET', '/Register', [AuthController::class, 'register']);
$route->add('GET', '/Register', [AuthController::class, 'register']);



$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$route->dispatch($method, $uri);

