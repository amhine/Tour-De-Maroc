<?php

namespace Repository;

use Exception;
use Controllers\MailService;

class AuthRepository
{
    private $db;
    private $session;
    private $table = "Users";

    public function __construct($db, $session)
    {
        $this->db = $db;
        $this->session = $session;
    }
    public function isExist($email)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = :email";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $user = $stmt->fetch();
            return $user ? $user : null;
        } catch (Exception $e) {
            echo 'Error check existing email: ' . $e->getMessage();
            return null;
        }
    }

    public function login($email, $password)
    {
        $user = $this->isExist($email);
        if ($user && password_verify($password, $user['password'])) {
            if ($user['status'] !== 'inactive') {
                foreach ($user as $key => $value) {
                    $this->session->set($key, $value);
                }
                return $user;
            }

            
        } else {
            return null;
        }
    }


    public function signup($instance)
    {
        $sql = "INSERT INTO {$this->table} (nom, prenom, email, password, fk_role_id, status) VALUES(:nom, :prenom, :email, :password, :fk_role_id, :status::status)";
        if ($this->isExist($instance->email)) {
            throw new Exception('Email is Already Exist');
        }
        try {
            $stmt = $this->db->prepare($sql);
            $hashedPassword = password_hash($instance->password, PASSWORD_DEFAULT);
            $stmt->bindParam(':nom', $instance->nom);
            $stmt->bindParam(':prenom', $instance->prenom);
            $stmt->bindParam(':email', $instance->email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':fk_role_id', $instance->fk_role_id);
            $stmt->bindParam(':status', $instance->status);
            if ($stmt->execute()) {
                return $this->db->lastInsertId();
            }
            return null;
        } catch (Exception $e) {
            echo "Error in signup : " . $e->getMessage();
            return null;
        }
    }

    public function logout()
    {
        $this->session->remove('email');
        $this->session->remove('user_id');
        $this->session->remove('fk_role_id');
        $this->session->destroy();
        header('Location: \Logout');
        exit();

    }

    public function validateUser()
    {
        $email = $this->session->get('email');
        if ($email) {
            return $this->isExist($email);
        }
        return null;
    }

    public function SendResetToken($email)
    {
        $user = $this->isExist($email);
        if ($user) {
            $token = self::generateToken();
            $sql = "INSERT INTO resetpassword (reset_email, reset_token, reset_status) VALUES (:email, :token, :status)";
            try {
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':token', $token);
                $stmt->bindValue(':status', 'active');
                if ($stmt->execute()) {
                    $url = "http://tour-de-maroc.test//ResetPassword/$token";
                    ob_start();
                    include __DIR__ . '/../Views/emails/reset-notification-template.php';
                    $emailContent = ob_get_clean();
                    return MailService::sendMail($email, 'Tour De Maroc - Réinitialisation de mot de passe', $emailContent);
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }

    public function validateToken($token)
    {
        $sql = "SELECT * FROM resetpassword WHERE reset_token = :token AND reset_status = :status";
        try {
            $stmt = $this->db->prepare($sql);
            $status = 'active';
            $stmt->bindParam(':token', $token);
            $stmt->bindParam(':status', $status); 
            if ($stmt->execute()) {
                return $stmt->fetch();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return null;
    }

   


    public function ChangePassword($password, $token)
    {
        try {
           
            $sql = "SELECT * FROM resetpassword WHERE reset_token = :token AND reset_status = :status";
            $stmt = $this->db->prepare($sql);
            $status = 'active';
            $stmt->bindParam(':token', $token);
            $stmt->bindParam(':status', $status);
            
            if ($stmt->execute()) {
                $reset = $stmt->fetch();
                
                if ($reset) {
                    $sql = "UPDATE Users SET password = :password WHERE email = :email";
                    $stmt = $this->db->prepare($sql);
                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                    
                    $stmt->bindValue(':password', $hashedPassword);
                    $stmt->bindParam(':email', $reset['reset_email']);
                    
                    if ($stmt->execute()) {
                        $this->killresetToken($token);
                        return true;
                    }
                }
            }
            return false;
        } catch (Exception $e) {
                    echo $e->getMessage();
                }
    }


  
    public function killresetToken($token)
    {
        $status = 'inactive';
        $sql = "UPDATE resetpassword SET reset_status = :status WHERE reset_token = :token";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':status', 'inactive');
        $stmt->bindParam(':token', $token);
        $stmt->execute();
    }
   
    public static function generateToken()
    {
        return bin2hex(random_bytes(50));
    }
}
