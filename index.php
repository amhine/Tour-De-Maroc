<?php
<<<<<<< HEAD

=======
session_start();
require_once 'vendor/autoload.php';
>>>>>>> db5ac6c42b7f49118f08db074c3f6b8ef66c18a5

require_once __DIR__ . '/vendor/autoload.php';
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
use Controllers\CommentsController;

use Controllers\PhotoController;

use Controllers\HistoriqueController;
use Controllers\RoleController;


$route = new Router();

$route->add('GET', '/', [HomeController::class, 'index']);
$route->add('GET', '/Parcours', [EtapesController::class, 'index']);
$route->add('GET', '/Etapes/{id}', [EtapesController::class, 'show']);
$route->add('GET', '/Podium', [PodiumController::class, 'index']);
$route->add('GET', '/Culture', [CultureController::class, 'index']);
$route->add('GET', '/Video', [VideoController::class, 'index']);
$route->add('GET', '/Grande_Depart', [GDController::class, 'index']);

//auth routes
$route->add('GET', '/Login', [AuthController::class, 'login']);
$route->add('GET', '/Register', [AuthController::class, 'register']);
$route->add('POST', '/Register', [AuthController::class, 'saveRegistration']); 
$route->add('POST', '/Login', [AuthController::class, 'saveLogin']); 




$route->add('GET', '/ForgetPassword', [AuthController::class, 'resetpasswordPage']);
$route->add('POST', '/ForgetPassword', [AuthController::class, 'SendResetToken']);
$route->add('GET', '/ResetPassword/{token}', [AuthController::class, 'ResetPasswordForm']);
$route->add('POST', '/ResetPassword/{token}', [AuthController::class, 'UpdatePassword']); 


$route->add('GET', '/Logout', [AuthController::class, 'logout']);
$route->add('GET', '/Profile', [AuthController::class, 'profile']);
$route->add('POST', '/Profile', [AuthController::class, 'update']);
$route->add('GET', '/ForgetPassword', [AuthController::class, 'resetpasswordPage']);
$route->add('POST', '/ForgetPassword', [AuthController::class, 'SendResetToken']);
$route->add('GET', '/ResetPassword/{token}', [AuthController::class, 'ResetPasswordForm']);

//categorie routes
$route->add('GET', '/categories', [CategorieController::class, 'index']);
$route->add('POST', '/categories', [CategorieController::class, 'store']);
$route->add('POST', '/categories/update/{id}', [CategorieController::class, 'update']);
$route->add('POST', '/categories/delete/{id}', [CategorieController::class, 'destroy']);

// commmentes routes
$route->add('GET' , '/comments' , [CommentsController::class , 'showDashboard']);
$route->add('GET' , '/comments/delete/{id}' , [CommentsController::class , 'showDashboard']);
$route->add('GET' , '/comments/update/{id}', [CommentsController::class, 'showDashboard']);

// Cycliste routes
$route->add('GET', '/cycliste/profile', [CyclisteController::class, 'profile']);
$route->add('GET', '/cycliste', [CyclisteController::class, 'index']);
$route->add('GET', '/cycliste', [CyclisteController::class, 'index']);

// photo routes
$route->add('POST', '/photos', [PhotoController::class, 'addPhoto']);
$route->add('GET', '/photos', [PhotoController::class, 'getPhotos']);
$route->add('POST', '/photos/{id}', [PhotoController::class, 'delete']);



$route->add('POST', '/historiques', [HistoriqueController::class, 'store']);
$route->add('POST', '/historiques/{id}', [HistoriqueController::class, 'delete']);
$route->add('GET', '/historiques', [HistoriqueController::class, 'getHistorique']);

// admin routes
// $route->add('GET', '/dashboard', ['??', 'index']);
$route->add('GET', '/visitor', [VisitorController::class, 'showVisitors']);

$method = $_SERVER['REQUEST_METHOD'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');


$route->dispatch($method, $uri);
<<<<<<< HEAD








=======
>>>>>>> db5ac6c42b7f49118f08db074c3f6b8ef66c18a5
