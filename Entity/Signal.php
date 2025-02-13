<?php

namespace Entity;

use Helpers\Validator;
class Signal
{
    private $signal_id;
    private $description;
    private $fk_user_id;
    private $fk_etape_id;

    public function __construct($signal_id, $description, $fk_user_id, $fk_etape_id)
    {
        try {
            $this->signal_id = Validator::ValidateData($signal_id) ?? null;
            $this->description = Validator::ValidateData($description);
            $this->fk_user_id = Validator::ValidateData($fk_user_id);
            $this->fk_etape_id = Validator::ValidateData($fk_etape_id);
        } catch (Exception $e) {
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