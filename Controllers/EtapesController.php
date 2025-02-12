<?php 

namespace Controllers;

use Core\Database;
use Repository\EtapesRepository;
use Helpers\Session;

class EtapesController 
{
    private $db;
    private $session;

    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session($this->db);
    }

    public function index()
    {
        $EtapeRepo = new EtapesRepository($this->db);
        try {
            $categories = $EtapeRepo->getAll();
            // TODO: include the Etape Views
            require_once __DIR__ . '/../Views/fan/Grande_Depart.php';
        } catch (\Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}