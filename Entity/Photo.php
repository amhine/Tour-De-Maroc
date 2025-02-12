<?php

namespace Entity;

use Helpers\Validator;
use Exception;

class Photo
{
    private $photo_id;
    private $photo;
    private $fk_user_id;

    public function __construct($photo_id, $photo, $fk_user_id)
    {
        try {
            $this->photo_id = Validator::ValidateData($photo_id) ?? null;
            $this->photo = Validator::ValidateImage($photo);
            $this->fk_user_id = Validator::ValidateData($fk_user_id);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
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