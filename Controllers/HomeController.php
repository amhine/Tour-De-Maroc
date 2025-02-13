<?php

namespace Controllers;

class HomeController
{

    public function index(): void
    {
        require_once './Views/fan/Home.php';
    }
}