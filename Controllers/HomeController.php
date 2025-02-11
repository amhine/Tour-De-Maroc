<?php

namespace Controllers;

class HomeController
{

    public function index(): void
    {
        require './Views/fan/Home.php';
    }
}