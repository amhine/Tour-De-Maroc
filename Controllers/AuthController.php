<?php


namespace Controllers;

use Core\Database;
use Helpers\Session;
use Helpers\Validator;
use Repository\AuthRepository;


class AuthController
{
    private $db;
    private $session;
    private $AuthRepository;

    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
        $this->AuthRepository = new AuthRepository($this->db, $this->session);
    }

    public function login()
    {
        require_once './Views/fan/Login.php';
    }

    public function register()
    {
        require_once './Views/fan/Register.php';
    }

    public function resetpasswordPage()
    {
        require_once './Views/fan/ForgetPassword.php';
    }

    public function SendResetToken()
    {
        try {
            $email = Validator::ValidateEmail($_POST['email']);
            $authRepository = new AuthRepository($this->db, $this->session);
            $authRepository->SendResetToken($email);
        } catch (\Exception $e) {
            $email = Validator::ValidateEmail($_POST['email']);
            $authRepository = new AuthRepository($this->db, $this->session);
            $authRepository->SendResetToken($email);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function ResetPasswordForm()
    {
    public function ResetPasswordForm()
    {
        $array = explode('/', $_SERVER['REQUEST_URI']);
        $token = $array[count($array) - 1];
        $authRepository = new AuthRepository($this->db, $this->session);
        
        $reset = $authRepository->validateToken($token);
        if (!$reset) {
            $this->session->set('Error', 'Token invalide ou expiré');
            header('Location: /ForgetPassword');
            exit();
        }
        
        require_once './Views/fan/ResetPassword.php';
    }

    public function UpdatePassword()
    {
        $array = explode('/', $_SERVER['REQUEST_URI']);
        $token = $array[count($array) - 1];
        $authRepository = new AuthRepository($this->db, $this->session);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = Validator::ValidateData($_POST['password']);
            $confirmPassword = Validator::ValidateData($_POST['confirm_password']);
            
            if($password !== $confirmPassword) {
                $this->session->set('Error', 'Les mots de passe ne correspondent pas');
                header('Location: /ResetPassword/' . $token);
                exit();
            }
            
            if($authRepository->ChangePassword($password, $token)) {
                $this->session->set('Success', 'Mot de passe modifié avec succès');
                header('Location: /Login');
                exit();
            } else {
                $this->session->set('Error', 'Erreur lors de la modification du mot de passe');
                header('Location: /ResetPassword/' . $token);
                exit();
            }
        }
    }

    public function saveRegistration()
    {

        try {
            $nom = Validator::ValidateData($_POST['nom']);
            $prenom = Validator::ValidateData($_POST['prenom']);
            $email = Validator::ValidateData($_POST['email']);
            $password = Validator::ValidateData($_POST['password']);
            $confirm_password = Validator::ValidateData($_POST['confirm_password']);
            $role_name = Validator::ValidateData($_POST['role']);



        try {
            $nom = Validator::ValidateData($_POST['nom']);
            $prenom = Validator::ValidateData($_POST['prenom']);
            $email = Validator::ValidateData($_POST['email']);
            $password = Validator::ValidateData($_POST['password']);
            $confirm_password = Validator::ValidateData($_POST['confirm_password']);
            $role_name = Validator::ValidateData($_POST['role']);



            if (
                empty($nom) || empty($prenom) || empty($email) ||
                empty($password) || empty($confirm_password) ||
                empty($role_name) || $role_name === "0"
            ) {
                throw new \Exception("Tous les champs sont obligatoires.");
            }
            if (
                empty($nom) || empty($prenom) || empty($email) ||
                empty($password) || empty($confirm_password) ||
                empty($role_name) || $role_name === "0"
            ) {
                throw new \Exception("Tous les champs sont obligatoires.");
            }

            if ($password !== $confirm_password) {
                throw new \Exception("Les mots de passe ne correspondent pas.");
            }
            if ($password !== $confirm_password) {
                throw new \Exception("Les mots de passe ne correspondent pas.");
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new \Exception("Format d'email invalide.");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new \Exception("Format d'email invalide.");
            }

            if (!in_array($role_name, ['admin', 'cycliste', 'fan'])) {
                throw new \Exception("Rôle invalide.");
            }
            if (!in_array($role_name, ['admin', 'cycliste', 'fan'])) {
                throw new \Exception("Rôle invalide.");
            }

            $roleController = new RoleController();
            $role = $roleController->getRoleByName($role_name);

            if (!$role) {
                throw new \Exception("Rôle non trouvé dans la base de données.");
            }
            $user = new \stdClass();
            $user->nom = $nom;
            $user->prenom = $prenom;
            $user->email = $email;
            $user->password = $password;
            $user->fk_role_id = $role->role_id;
            $user->status = ($role_name === 'cycliste') ? 'inactive' : 'active';
            $roleController = new RoleController();
            $role = $roleController->getRoleByName($role_name);

            if (!$role) {
                throw new \Exception("Rôle non trouvé dans la base de données.");
            }
            $user = new \stdClass();
            $user->nom = $nom;
            $user->prenom = $prenom;
            $user->email = $email;
            $user->password = $password;
            $user->fk_role_id = $role->role_id;
            $user->status = ($role_name === 'cycliste') ? 'inactive' : 'active';

            $userId = $this->AuthRepository->signup($user);
            $userId = $this->AuthRepository->signup($user);

            if ($userId) {
                $this->session->set('Success', 'Inscription réussie.');
                require_once './Views/fan/Login.php';
                exit();
            } else {
                throw new \Exception("Erreur lors de l'inscription.");
            }
        } catch (\Exception $e) {
            error_log("Erreur lors de l'inscription : " . $e->getMessage());
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }

            if ($userId) {
                $this->session->set('Success', 'Inscription réussie.');
                require_once './Views/fan/Login.php';
                exit();
            } else {
                throw new \Exception("Erreur lors de l'inscription.");
            }
        } catch (\Exception $e) {
            error_log("Erreur lors de l'inscription : " . $e->getMessage());
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }




    public function saveLogin()
    {


    public function saveLogin()
    {
        try {
            $email = Validator::ValidateEmail($_POST['email']);
            $password = Validator::ValidateData($_POST['password']);


            $user = $this->AuthRepository->login($email, $password);
            if ($user->role_name === 'admin') {
            if ($user->role_name === 'admin') {
                $this->session->set('Success', 'Connexion réussie pour ' . $user->email);
                header('Location: /dashboard');
                exit();
            } elseif ($user->role_name === 'cycliste') {
                $this->session->set('Success', 'Connexion réussie pour ' . $user->email);
                header('Location: /cycliste');
                exit();
            } elseif ($user->role_name === 'fan') {
                $this->session->set('Success', 'Connexion réussie pour ' . $user->email);
                header('Location: /');
                exit();
            }
            } elseif ($user->role_name === 'cycliste') {
                $this->session->set('Success', 'Connexion réussie pour ' . $user->email);
                header('Location: /cycliste');
                exit();
            } elseif ($user->role_name === 'fan') {
                $this->session->set('Success', 'Connexion réussie pour ' . $user->email);
                header('Location: /');
                exit();
            }
        } catch (\Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: /login');
            exit();
        }
    }

    public function ResitNotificaton()
    {
        $url =  $this->AuthRepository->SendResetToken($email = '');
        ob_start();
        extract($templateData);
        include __DIR__ . '/../Views/emails/reset-notification-template.php';
        $emailContent = ob_get_clean();
        return MailService::sendMail('', 'Tour De Maroc - Réinitialisation de mot de passe', $emailContent);
    }
}

    public function logout() 
    {
        
    }
}
