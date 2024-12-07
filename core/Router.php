<?php

namespace Core;

use App\ErrorHandler;

class Router
{
    private $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => []
    ];

    private $notFoundHandler;

    public function setNotFoundHandler(callable $handler)
    {
        $this->notFoundHandler = $handler;
    }

    public function get($route, $callback)
    {
        $this->addRoute('GET', $route, $callback);
        return $this;
    }

    public function post($route, $callback)
    {
        $this->addRoute('POST', $route, $callback);
        return $this;
    }

    private function addRoute($method, $route, $callback)
    {
        $route = $this->normalizeRoute($route);
        $this->routes[$method][$route] = $callback;
    }

    private function normalizeRoute($route)
    {
        return rtrim($route, '/') ?: '/';
    }

    public function dispatch($uri, $method)
    {
        $uri = $this->normalizeRoute($uri);
        $method = strtoupper($method);

        if (isset($this->routes[$method][$uri])) {
            return call_user_func($this->routes[$method][$uri]);
        }

        // If no route is found, call the not found handler
        if ($this->notFoundHandler) {
            return call_user_func($this->notFoundHandler);
            // Default 404 if no handler is set
            ErrorHandler::handle404();
        }

    }
}