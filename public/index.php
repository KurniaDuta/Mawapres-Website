<?php

// Autoload composer dependencies
require_once __DIR__ . '/../vendor/autoload.php';

// Import necessary classes
use Core\App;
use Core\Router;

// Load environment variables (optional, using vlucas/phpdotenv)
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

require_once '../config/config.php';
require_once '../config/database.php';
require_once '../app/controller/AuthController.php';
require_once '../app/controller/MahasiswaController.php';
require_once '../core/App.php';
require_once '../core/Router.php';

try {
    // Initialize Router and App
    $router = new Router();
    $app = new App($router);

    // Run the application
    $app->run();
} catch (Exception $e) {
    // Global error handling
    die('Application Error: ' . $e->getMessage());
}