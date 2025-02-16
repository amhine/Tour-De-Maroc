<?php
require_once 'vendor/autoload.php';
namespace Entity;

use Helpers\Validator;
class Categories
{
    private $categorie_id;
    private $categorie_name;

    public function __construct($categorie_id, $categorie_name)
    {
        try {
            $this->categorie_id = Validator::ValidateData($categorie_id) ?? null;
            $this->categorie_name = Validator::ValidateData($categorie_name);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}