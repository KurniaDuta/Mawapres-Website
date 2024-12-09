<?php

namespace App\Controller;

use App\Models\User;

class MahasiswaController extends AuthController
{
    public function __construct()
    {
        $this->checkAuthorization('mahasiswa');
    }

    public function index()
    {
        $this->dashboard();
    }

    public function dashboard()
    {
        require_once __DIR__ . '/../../resources/views/mahasiswa/beranda.php';
    }

    public function prestasi()
    {
        // Implement prestasi logic
        require_once __DIR__ . '/../../resources/views/mahasiswa/submisi.php';
    }

    public function riwayat()
    {
        // Implement riwayat logic
        require_once __DIR__ . '/../../resources/views/mahasiswa/riwayat.php';
    }
}