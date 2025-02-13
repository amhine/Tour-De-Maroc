<?php

namespace Controllers;

use Core\Database;
use Helpers\Session;
use Repository\RoleRepository;

class RoleController
{
    private $db;
    private $session;
    private $roleRepo;

    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
        $this->roleRepo = new RoleRepository($this->db);
    }

  
    public function getRoles() {
        try {
            $roles = $this->roleRepo->getAll();
            return $roles;
            include_once './Views/fan/Register.php';
        } catch (\Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    public function getRoleByName($role_name) {
        try {
            $roles = $this->roleRepo->getRoleByName($role_name);
            return $roles;
            include_once './Views/fan/Register.php';
        } catch (\Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}

?>
