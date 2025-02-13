<?php
session_start();
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

use Controllers\PhotoController;

use Controllers\RoleController;



require_once __DIR__ . '/vendor/autoload.php';

$route = new Router();

$route->add('GET', '/', [HomeController::class, 'index']);
$route->add('GET', '/Parcours', [ParcoursController::class, 'index']);
$route->add('GET', '/Podium', [PodiumController::class, 'index']);
$route->add('GET', '/Culture', [CultureController::class, 'index']);
$route->add('GET', '/Video', [VideoController::class, 'index']);
$route->add('GET', '/Grande_Depart', [GDController::class, 'index']);

//auth routes
$route->add('GET', '/Login', [AuthController::class, 'login']);
$route->add('GET', '/Register', [AuthController::class, 'register']);
$route->add('POST', '/Register', [AuthController::class, 'saveRegistration']); 
$route->add('POST', '/Login', [AuthController::class, 'saveLogin']); 
$route->add('GET', '/Logout', [AuthController::class, 'logout']);
$route->add('GET', '/Profile', [AuthController::class, 'profile']);
$route->add('POST', '/Profile', [AuthController::class, 'update']);
$route->add('GET', '/ForgetPassword', [AuthController::class, 'resetpasswordPage']);
$route->add('POST', '/ForgetPassword', [AuthController::class, 'SendResetToken']);
$route->add('GET', '/ResetPassword/{token}', [AuthController::class, 'ResetPasswordForm']);

//categorie routes
$route->add('GET', '/categories', [CategorieController::class, 'index']);
$route->add('POST', '/categories', [CategorieController::class, 'store']);
$route->add('POST', '/categories/{id}', [CategorieController::class, 'update']);
$route->add('POST', '/categories/{id}', [CategorieController::class, 'destroy']);

// photo routes
$route->add('POST', '/photos', [PhotoController::class, 'addPhoto']);
$route->add('GET', '/photos', [PhotoController::class, 'getPhotos']);
$route->add('POST', '/photos/{id}', [PhotoController::class, 'delete']);




$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


$route->dispatch($method, $uri);
