<?php

namespace Repository;

use Repository\Interfaces\IRoleRepository;
use PDO;

class RoleRepository implements IRoleRepository {
    private $db;
    private $table = 'role';

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        $sql = "SELECT * FROM $this->table WHERE role_name NOT IN ('admin')";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
            return $roles;
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
    public function getRoleByName($role_name) {
        $sql = "SELECT * FROM Role WHERE role_name = :role_name";
        
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':role_name', $role_name, PDO::PARAM_STR);  
            $stmt->execute();
            
            $role = $stmt->fetch(PDO::FETCH_OBJ);
            
            if ($role) {
                return $role;
            } else {
                return null; 
            }
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }
    
}
?>