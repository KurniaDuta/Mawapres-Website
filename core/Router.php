<?php

namespace Core;

class Router 
{
    private $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => []
    ];
    private $notFoundHandler;

    public function __construct()
    {
        $this->notFoundHandler = function () {
            http_response_code(404);
            require_once BASE_PATH . '/resources/views/error/404.php';
            exit;
        };
    }

    public function get($route, $callback)
    {
        $this->addRoute('GET', $route, $callback);
    }

    public function post($route, $callback)
    {
        $this->addRoute('POST', $route, $callback);
    }

    public function put($route, $callback)
    {
        $this->addRoute('PUT', $route, $callback);
    }

    public function delete($route, $callback)
    {
        $this->addRoute('DELETE', $route, $callback);
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

    public function setNotFoundHandler($callback)
    {
        $this->notFoundHandler = $callback;
    }

    public function dispatch($uri, $method)
    {
        $uri = $this->normalizeRoute($uri);
        $method = strtoupper($method);
        
        if (isset($this->routes[$method][$uri])) {
            return call_user_func($this->routes[$method][$uri]);
        }

        call_user_func($this->notFoundHandler);
    }
}