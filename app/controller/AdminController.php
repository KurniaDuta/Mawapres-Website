<?php

namespace App\Controller;

class AdminController extends AuthController
{
    public function __construct()
    {
        $this->checkAuthorization('admin', 1);
    }

    public function index()
    {
        $this->dashboard();
    }

    public function dashboard()
    {
        require_once __DIR__ . '/../../resources/views/admin/beranda.php';
    }

    public function masterMahasiswa()
    {
        require_once __DIR__ . '/../../resources/views/admin/masterMahasiswa.php';
    }
}
