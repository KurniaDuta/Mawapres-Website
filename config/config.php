<?php

require_once '../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

// Database Configuration
define('DB_HOST', $_ENV['INSTANCE_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);

// Paths
define('VIEWS_PATH', BASE_PATH . '/resources/views');
define('CONTROLLERS_PATH', BASE_PATH . '/app/controllers');
define('MODELS_PATH', BASE_PATH . '/app/models');
define('CORE_PATH', BASE_PATH . '/core');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);