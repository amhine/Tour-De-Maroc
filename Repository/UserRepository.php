<?php

namespace Repository;

use Repository\Interfaces\IUserRepository;
use Exception;
use PDO;

class UserRepository implements IUserRepository
{
    private $db;
    private $table = 'users';

    public function __construct($db)
    {
        $this->db = $db;
    }

    
    public static function signup($instance)
    {

    }

    public function isExist($email) 
    {

    }
    
    public function login($email, $password) 
    {

    }
    
    public function logout () 
    {

    }
    
    public function validateUser () 
    {
        
    }

    public function findById(int $id): ?array
{
    try {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    } catch (Exception $e) {
        echo $e->getMessage();
        return null;
    }
}
}