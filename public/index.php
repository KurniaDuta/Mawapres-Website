<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load environment and configuration
require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once '../config/config.php';
require_once '../config/database.php';

// Include core classes
require_once '../core/Router.php';
require_once '../core/App.php';

// Run the application
use Core\App;
$app = new App();
$app->run();