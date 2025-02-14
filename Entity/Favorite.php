<?php

namespace Entity;

use Helpers\Validator;

class Favorite
{
    private $favorite_id;
    private $fk_user_id;
    private $fk_cycliste_id;


    public function __construct($favorite_id, $fk_user_id, $fk_cycliste_id) {
        $this->favorite_id = Validator::ValidateData($favorite_id);
        $this->fk_user_id = Validator::ValidateData($fk_user_id);
        $this->fk_cycliste_id = Validator::ValidateData($fk_cycliste_id);
    }
    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value): void
    {
        $this->$property = $value;
    }

}