<?php

namespace Entity;

use Helpers\Validator;

class Etapes
{
    private $etape_id;
    private $description;
    private $region;
    private $image;
    private $startDate;
    private $difficulte;
    private $courseId;
    private $categorieId;
    private $frape;
    private $type;
    private $date;
    private $depart; 
    private $arrivee; 
    private $distance;
    private $details;

    public function __construct(
        $etape_id,
        $description,
        $region,
        $image,
        $startDate,
        $difficulte,
        $courseId,
        $categorieId,
        $frape,
        $type,
        $date,
        $depart, 
        $arrivee, 
        $distance,
        $details
    ) {
        $this->id = Validator::ValidateData($etape_id) ?? null;
        $this->description = Validator::ValidateData($description);
        $this->region = Validator::ValidateData($region);
        $this->image = Validator::ValidateImage($image);
        $this->startDate = Validator::ValidateData($startDate);
        $this->difficulte = Validator::ValidateData($difficulte);
        $this->courseId = Validator::ValidateData($courseId);
        $this->categorieId = Validator::ValidateData($categorieId);
        $this->frape = Validator::ValidateData($frape);
        $this->type = Validator::ValidateData($type);
        $this->date = Validator::ValidateData($date);
        $this->depart = Validator::ValidateData($depart); 
        $this->arrivee = Validator::ValidateData($arrivee); 
        $this->distance = Validator::ValidateData($distance);
        $this->details = Validator::ValidateData($details);
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