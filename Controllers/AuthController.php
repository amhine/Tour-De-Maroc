<?php

namespace Controllers;

use Core\Database;
use Helpers\Validator;
use Repository\AuthRepository;
use Helpers\Session;

class AuthController
{
    private $db;
    private $session;
    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
    }
    public function login()
    {
        require './Views/fan/Login.php';
    }

    public function register()
    {
        require './Views/fan/Register.php';
    }

    public function resetpasswordPage()
    {
        // require_once './Views/fan/ForgetPassword.php';
    }

    public function SendResetToken()
    {
        try {
                $email = Validator::ValidateEmail($_POST['email']);
                $authRepository = new AuthRepository($this->db, $this->session);
                $authRepository->SendResetToken($email);
            }
            catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function ResetPasswordForm() {
        $array = explode('/', $_SERVER['REQUEST_URI']);
        $token = $array[count($array) - 1];
        $authRepository = new AuthRepository($this->db, $this->session);
        $reset = $authRepository->validateToken($token);
        if (!$reset) {
            $this->session->set('Error', 'Invalid or expired token');
            header('Location: /ForgetPassword');
            exit();
        }
        $password = Validator::ValidateData($_POST['password']);
        $confirmPassword = Validator::ValidateData($_POST['confirmPassword']);
        if($password !== $confirmPassword) {
            $this->session->set('Error', 'Password does not match');
            header('Location: /ResetPassword/' . $token);
        } else {
            $authRepository->ChangePassword($password, $token);
            $this->session->set('Success', 'Password Changed Successfully');
            header('Location: /Login');
        }
        require_once './Views/fan/ResetPassword.php';
    }
}
