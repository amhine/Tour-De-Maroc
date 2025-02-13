<?php

namespace Entity;
use Helpers\Validator;
class User
{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $password;
    protected $id_role;
    public function __construct($id, $nom,$prenom,$email,$password,$id_role) {
        try {
            $this->id = Validator::ValidateData($id) ?? null;
            $this->nom = Validator::ValidateData($nom);
            $this->prenom = Validator::ValidateData($prenom);
            $this->email = Validator::ValidateData($email);
            $this->password = Validator::ValidateData($password);
            $this->id_role = Validator::ValidateData($id_role);
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