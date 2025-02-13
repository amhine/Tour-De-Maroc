<?php

namespace Entity;

use Helpers\Validator;
use Exception;
class Historique
{
    private $historique_id;
    private $nom;
    private $description;
    private $fk_user_id;

    public function __construct ($historique_id, $nom, $description, $fk_user_id)
    {
        try {
            $this->historique_id = Validator::ValidateData($historique_id) ?? null;
            $this->nom = Validator::ValidateData($nom);
            $this->description = Validator::ValidateData($description);
            $this->fk_user_id = Validator::ValidateData($fk_user_id);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set(string $property, $value)
    {
        $this->$property = $value;
    }
}