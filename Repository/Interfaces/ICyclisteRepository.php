<?php

namespace Repository\Interfaces;
use Entity\Cycliste;

interface ICyclisteRepository
{
    

    public function save(Cycliste $cyclist): bool;
}