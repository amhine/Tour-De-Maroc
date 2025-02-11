<?php

namespace Controllers;

class AuthController
{
    public function login(): void
    {
        require './Views/fan/Login.php';
    }

    public function register(): void
    {
        require './Views/fan/Register.php';
    }

    public function resetpasswordPage(): void
    {
        // require_once './Views/fan/ForgetPassword.php';
    }
}