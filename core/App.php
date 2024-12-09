<?php

namespace Core;

use App\Controller\AuthController;
use App\ErrorHandler;

class App
{
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run()
    {
        // Ensure session is started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Set up a default not found handler
        $this->router->setNotFoundHandler(function() {
            ErrorHandler::handle404();
        });

        // Load routes by passing the router
        $routeDefinition = require_once __DIR__ . '/../routes/Web.php';
        $routeDefinition($this->router);

        // Dispatch the current request
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        
        $this->router->dispatch($uri, $method);
    }
}