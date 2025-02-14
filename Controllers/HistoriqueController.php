<?php

namespace Controllers;

use Helpers\Session;
use Core\Database;
use Entity\Historique;
use Repository\HistoriqueRepository;
use PDO, Exception;
class HistoriqueController
{

    private $db;
    private $session;

    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
    }

    public function store() {
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $fk_user_id = $_SESSION['fk_user_id'];
        try {
            $historique = new Historique(null, $nom, $description, $fk_user_id);
            $historiqueRepo = new HistoriqueRepository($this->db);
            $historiqueRepo->create($historique);
            $this->session->set('Success', 'Historique ajouté avec succès');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    public function delete() {
        $id = $_POST['id'];
        try {
            $historiqueRepo = new HistoriqueRepository($this->db);
            $historiqueRepo->delete($id);
            $this->session->set('Success', 'Historique supprimé avec succès');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function getHistorique() {
        $cycliste_id = $_SESSION['fk_user_id'];
        try {
            $historiqueRepo = new HistoriqueRepository($this->db);
            $historiques = $historiqueRepo->getHistorique($cycliste_id);
            return $historiques;
        } catch (Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        return null;
    }
}