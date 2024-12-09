<?php

use App\Controller\AuthController;
use App\Controller\MahasiswaController;
use App\Controller\AdminController;

return function($router) {
    // Authentication Routes
    $router->get('/login', [AuthController::class, 'showLoginForm']);
    $router->post('/login', [AuthController::class, 'login']);
    $router->get('/logout', [AuthController::class, 'logout']);

    // Root/Home Route
    $router->get('/', [AuthController::class, 'redirectBasedOnRole']);

    $router->post('/mahasiswa/change-password', [MahasiswaController::class, 'changePassword']);

    // Mahasiswa Routes
    $router->get('/mahasiswa', [MahasiswaController::class, 'index']);
    $router->get('/mahasiswa/beranda', [MahasiswaController::class, 'dashboard']);
    $router->get('/mahasiswa/prestasi', [MahasiswaController::class, 'prestasi']);
    $router->get('/mahasiswa/riwayat', [MahasiswaController::class, 'riwayat']);

    // Admin Routes
    $router->get('/admin', [AdminController::class, 'index']);
    $router->get('/admin/beranda', [AdminController::class, 'dashboard']);
};