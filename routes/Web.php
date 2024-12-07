<?php

use App\Controller\AuthController;
use Core\App;

$router->get('/', function () {
    $authController = new AuthController();
    $authController->redirectBasedOnRole();
});

$router->get('/login', [AuthController::class, 'showLoginForm']);
$router->post('/login', [AuthController::class, 'login']);
$router->get('/logout', [AuthController::class, 'logout']);