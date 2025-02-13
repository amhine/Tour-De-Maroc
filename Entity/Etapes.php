<?php

namespace Entity;

use Helpers\Validator;

class Etapes
{
    private $id;
    private $description;
    private $region;
    private $image;
    private $start_date;
    private $difficulte;
    private $course_id;

    public function __construct($id, $description, $region, $image, $start_date, $difficulte, $course_id)
    {
        $this->id = Validator::ValidateData($id) ?? null;
        $this->description = Validator::ValidateData($description);
        $this->region = Validator::ValidateData($region);
        $this->image = Validator::ValidateImage($image);
        $this->start_date = Validator::ValidateData($start_date);
        $this->difficulte = Validator::ValidateData($difficulte);
        $this->course_id = Validator::ValidateData($course_id);
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = Validator::ValidateData($value);
    }
}