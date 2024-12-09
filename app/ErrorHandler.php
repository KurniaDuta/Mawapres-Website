<?php

namespace App;

class ErrorHandler
{
    public static function handle404()
    {
        http_response_code(404);
        include '../resources/views/error/404.php';
        exit;
    }

    public static function handle500($message = 'Internal Server Error')
    {
        http_response_code(500);
        // You might want to log the error message
        error_log($message);
        exit;
    }
}