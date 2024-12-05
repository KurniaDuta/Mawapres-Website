<?php

namespace Core;

use App\Controllers\AuthController;

class App 
{
    protected $router;

    public function __construct()
    {
        $this->router = new Router();
        $this->registerRoutes();
    }

    protected function registerRoutes()
    {   
        // Default route to login
        $this->router->get('/', function() {
            header("Location: /login");
            exit;
        });

        // Authentication routes
        $this->router->get('/login', function () {
            $authController = new AuthController();
            $authController->showLoginForm();
        });

        $this->router->post('/login', function () {
            $authController = new AuthController();
            $authController->login();
        });

        $this->router->get('/logout', function () {
            $authController = new AuthController();
            $authController->logout();
        });

        // Dashboard routes with authentication
        $this->router->get('/mahasiswa', function () {
            $this->checkAuth('mahasiswa');
            require_once BASE_PATH . '/resources/views/mahasiswa/beranda.php';
        });

        $this->router->get('/admin', function () {
            $this->checkAuth('admin', 1);
            require_once BASE_PATH . '/resources/views/admin/beranda.php';
        });

        $this->router->get('/kajur', function () {
            $this->checkAuth('admin', 2);
            require_once BASE_PATH . '/resources/views/kajur/beranda.php';
        });
    }

    protected function checkAuth($type, $role = null)
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }

        if ($_SESSION['user']['type'] !== $type) {
            header("Location: /login");
            exit;
        }

        if ($role !== null && $type === 'admin' && $_SESSION['user']['role'] !== $role) {
            header("Location: /login");
            exit;
        }
    }

    public function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        $this->router->dispatch($uri, $method);
    }
}