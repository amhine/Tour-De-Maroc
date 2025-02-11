<?php

namespace Controllers;

use Core\Database;
use Helpers\Session;
use Repository\CategorieRepository;

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
        $categoriesRepo = new CategorieRepository($this->db);
        try {
            $categories = $categoriesRepo->getAll();
            // TODO: include the Categorie Views
        } catch (\Exception $e) {
             $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);        }
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