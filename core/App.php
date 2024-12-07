<?php

namespace Core;

use App\Controller\AuthController;
use Core\Router;

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
        $this->router->get('/', function () {
            if (isset($_SESSION['user'])) {
                $authController = new AuthController();
                $authController->redirectBasedOnRole();
            } else {
                header("Location: /login");
            }
            exit;
        });

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

        $this->registerProtectedRoutes();
    }

    protected function registerProtectedRoutes()
    {
        $protectedRoutes = [
            '/mahasiswa' => [
                'type' => 'mahasiswa',
                'view' => '/mahasiswa/beranda',
            ],
            '/admin' => [
                'type' => 'admin',
                'role' => 1,
                'view' => '/admin/beranda',
            ],
            '/kajur' => [
                'type' => 'admin',
                'role' => 2,
                'view' => '/kajur/beranda',
            ],
        ];

        foreach ($protectedRoutes as $path => $config) {
            $this->router->get($path, fn() => $this->checkAuth(
                $config['type'],
                $config['role'] ?? null,
                $config['view']
            ));
        }
    }

    protected function checkAuth($expectedType, $expectedRole = null, $viewPath = null)
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }

        $user = $_SESSION['user'];

        if ($user['type'] !== $expectedType) {
            header("Location: /login");
            exit;
        }

        if ($expectedRole !== null && $expectedType === 'admin' && $user['role'] !== $expectedRole) {
            header("Location: /login");
            exit;
        }

        if ($viewPath) {
            require_once __DIR__ . '/../../resources/views' . $viewPath . '.php';
            exit;
        }
    }

    public function run()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        $this->router->dispatch($uri, $method);
    }
}

