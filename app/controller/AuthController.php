<?php

namespace App\Controllers;

use App\Models\User;

class AuthController 
{
    public function showLoginForm()
    {
        // Check if already logged in
        if (isset($_SESSION['user'])) {
            $this->redirectBasedOnRole();
        }
        
        require_once BASE_PATH . '/resources/views/login.php';
    }

    public function login()
    {
        $identifier = $_POST['identifier'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = new User();
        $authenticated = $user->authenticate($identifier, $password);

        if ($authenticated) {
            $this->redirectBasedOnRole();
        } else {
            // Set error message
            $_SESSION['error'] = 'Invalid credentials';
            header("Location: /login");
            exit;
        }
    }

    public function logout()
    {
        // Destroy session
        session_destroy();
        header("Location: /login");
        exit;
    }

    private function redirectBasedOnRole()
    {
        $userType = $_SESSION['user']['type'] ?? null;
        $userRole = $_SESSION['user']['role'] ?? null;

        switch ($userType) {
            case 'mahasiswa':
                header("Location: /mahasiswa");
                break;
            case 'admin':
                if ($userRole == 1) {
                    header("Location: /admin");
                } elseif ($userRole == 2) {
                    header("Location: /kajur");
                }
                break;
            default:
                header("Location: /login");
        }
        exit;
    }
}