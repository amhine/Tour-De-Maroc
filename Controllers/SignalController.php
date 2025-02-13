<?php

namespace Controllers;

use Entity\Signal;
use Helpers\Validator;
use Helpers\Session;
use Core\Database;
use Repository\SignalRepository;

use Exception;


class SignalController
{
    private $db;
    private $session;
    public function __construct() {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
    }

    public function store(){
        try {
            $nom = Validator::ValidateData($_POST['nom']);
            $description = Validator::ValidateData($_POST['description']);
            $fk_user_id = Validator::ValidateData($_SESSION['fk_user_id']);
            $signal = new Signal(null, $nom, $description, $fk_user_id);
            $signalRepo = new SignalRepository($this->db);
            $signalRepo->create($signal);
            $this->session->set('Success', 'Signal ajouté avec succès');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        } catch (Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function getAll(){
        try {
            $signalRepo = new SignalRepository($this->db);
            $signals = $signalRepo->getAll();
            return $signals;
        } catch (Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        return null;
    }

}