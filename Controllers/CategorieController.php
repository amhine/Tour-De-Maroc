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
        try {
            $categorie_id = Validator::ValidateData($_POST['categorie_id']);
            $categorie_nom = Validator::ValidateData($_POST['categorie_name']);
            $categorie = new Categories($categorie_id, $categorie_nom);
            $categorieRepo = new CategorieRepository($this->db);
            $categorieRepo->update($categorie);
            $this->session->set('Success', 'Categorie modifiée avec succès');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function destroy()
    {
       try {
            $categorie_id = Validator::ValidateData($_POST['categorie_id']);
            $categorieRepo = new CategorieRepository($this->db);
            $categorieRepo->delete($categorie_id);
            $this->session->set('Success', 'Categorie supprimée avec succès');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (\Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
       }
    }

}