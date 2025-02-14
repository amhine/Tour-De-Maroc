<?php

namespace Repository\Interfaces;
use Entity\Cyclist;

interface ICyclistRepository
{
    

    public function save(Cyclist $cyclist): bool;
}