<?php

namespace Controllers;

use Core\Database;
use Helpers\Session;
use Helpers\Validator;
use Repository\CategorieRepository;
use Entity\Categories;

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
        try {
            $categorie_nom = Validator::ValidateData($_POST['categorie_name']);
            $categorie = new Categories(null, $categorie_nom);
            $categorieRepo = new CategorieRepository($this->db);
            $categorieRepo->create($categorie);
            $this->session->set('Success', 'Categorie ajoutée avec succès');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
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