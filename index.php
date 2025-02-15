<?php
session_start();
require_once 'vendor/autoload.php';

use Core\Router;
use Controllers\HomeController;
use Controllers\ParcoursController;
use Controllers\EtapesController;
use Controllers\PodiumController;
use Controllers\VideoController;
use Controllers\GdController;
use Controllers\CultureController;
use Controllers\AuthController;
use Controllers\CategorieController;

use Controllers\PhotoController;

use Controllers\HistoriqueController;
use Controllers\RoleController;


require_once __DIR__ . '/vendor/autoload.php';

$route = new Router();

$route->add('GET', '/', [HomeController::class, 'index']);
$route->add('GET', '/parcours', [EtapesController::class, 'index']);
$route->add('GET', '/etapes/{id}', [EtapesController::class, 'show']);
$route->add('GET', '/podium', [PodiumController::class, 'index']);
$route->add('GET', '/culture', [CultureController::class, 'index']);
$route->add('GET', '/video', [VideoController::class, 'index']);
$route->add('GET', '/grande_Depart', [GDController::class, 'index']);

//auth routes
$route->add('GET', '/login', [AuthController::class, 'login']);
$route->add('GET', '/register', [AuthController::class, 'register']);
$route->add('POST', '/register', [AuthController::class, 'saveRegistration']);
$route->add('POST', '/login', [AuthController::class, 'saveLogin']);
$route->add('GET', '/logout', [AuthController::class, 'logout']);
$route->add('GET', '/profile', [AuthController::class, 'profile']);
$route->add('POST', '/profile', [AuthController::class, 'update']);
$route->add('GET', '/forgetPassword', [AuthController::class, 'resetpasswordPage']);
$route->add('POST', '/forgetPassword', [AuthController::class, 'SendResetToken']);
$route->add('GET', '/resetPassword/{token}', [AuthController::class, 'ResetPasswordForm']);

//categorie routes
$route->add('GET', '/categories', [CategorieController::class, 'index']);
$route->add('POST', '/categories', [CategorieController::class, 'store']);
$route->add('POST', '/categories/{id}', [CategorieController::class, 'update']);
$route->add('POST', '/categories/{id}', [CategorieController::class, 'destroy']);

// photo routes
$route->add('POST', '/photos', [PhotoController::class, 'addPhoto']);
$route->add('GET', '/photos', [PhotoController::class, 'getPhotos']);
$route->add('POST', '/photos/{id}', [PhotoController::class, 'delete']);



$route->add('POST', '/historiques', [HistoriqueController::class, 'store']);
$route->add('POST', '/historiques/{id}', [HistoriqueController::class, 'delete']);
$route->add('GET', '/historiques', [HistoriqueController::class, 'getHistorique']);



$method = $_SERVER['REQUEST_METHOD'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');


$route->dispatch($method, $uri);
