<?php 
namespace Entity;

use Helpers\Validator;

class Role {
    private $role_id;
    private $role_name;
    public function __construct($role_id, $role_name) {
        try {
            $this->role_id = Validator::ValidateData($role_id) ?? null;
            $this->role_name = Validator::ValidateData($role_name);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
  
    
    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }
    
}

?>