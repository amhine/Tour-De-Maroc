<?php

namespace Controllers;

use Core\Database;
use Helpers\Session;

class CategorieController
{
    private $db;

    private $session;
    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
    }


    public function index()
    {
        echo "CategorieController index";
    }

    public function store()
    {
        echo "CategorieController store";
    }

    public function update()
    {
        echo "CategorieController update";
    }

    public function destroy()
    {
        echo "CategorieController destroy";
    }

}