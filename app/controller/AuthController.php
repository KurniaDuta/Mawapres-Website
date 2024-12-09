<?php

namespace App\Controller;

use App\Models\User;

class AuthController
{
    protected function checkAuthorization($expectedType, $expectedRole = null)
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }

        $user = $_SESSION['user'];

        // Validate user type
        if ($user['type'] !== $expectedType) {
            header("Location: /login");
            exit;
        }

        // Additional role check for admin
        if ($expectedRole !== null && $user['type'] === 'admin' && $user['role'] !== $expectedRole) {
            header("Location: /login");
            exit;
        }
    }

    public function showLoginForm()
    {
        // If already logged in, redirect based on role
        if (isset($_SESSION['user'])) {
            $this->redirectBasedOnRole();
        }

        // Render login view
        require_once __DIR__ . '/../../resources/views/login.php';
        exit;
    }

    public function login()
    {
        // Validate input
        $identifier = $_POST['identifier'] ?? '';
        $password = $_POST['password'] ?? '';

        // Attempt authentication
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
        // Destroy all session data
        session_unset();     // Remove all session variables
        session_destroy();   // Destroy the session

        // Start a new session (optional, but can help prevent session fixation)
        session_start();

        // Redirect to login page
        header("Location: /login");
        exit;
    }

    public function redirectBasedOnRole()
    {
        // Ensure session is set
        if (!isset($_SESSION['user'])) {
            header("Location: /login");
            exit;
        }

        // Get user type and role
        $userType = $_SESSION['user']['type'] ?? null;
        $userRole = $_SESSION['user']['role'] ?? null;

        // Redirect based on user type and role
        switch ($userType) {
            case 'mahasiswa':
                header("Location: /mahasiswa");
                break;
            case 'admin':
                if ($userRole == 1) {
                    header("Location: /admin");
                } elseif ($userRole == 2) {
                    header("Location: /kajur");
                } else {
                    header("Location: /login");
                }
                break;
            default:
                header("Location: /login");
        }
        exit;
    }
}
