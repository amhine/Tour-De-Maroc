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
use Controllers\CategorieController;


require_once __DIR__ . '/vendor/autoload.php';

$route = new Router();

$route->add('GET', '/', [HomeController::class, 'index']);
$route->add('GET', '/Parcours', [ParcoursController::class, 'index']);
$route->add('GET', '/Podium', [PodiumController::class, 'index']);
$route->add('GET', '/Culture', [CultureController::class, 'index']);
$route->add('GET', '/Video', [VideoController::class, 'index']);
$route->add('GET', '/Grande_Depart', [GDController::class, 'index']);
$route->add('GET', '/Login', [AuthController::class, 'login']);
$route->add('GET', '/Register', [AuthController::class, 'register']);

//categorie routes
$route->add('GET', '/categories', [CategorieController::class, 'index']);
$route->add('POST', '/categories', [CategorieController::class, 'store']);
$route->add('POST', '/categories/{id}', [CategorieController::class, 'update']);
$route->add('POST', '/categories/{id}', [CategorieController::class, 'destroy']);




$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$route->dispatch($method, $uri);

