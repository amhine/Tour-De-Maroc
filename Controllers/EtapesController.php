<?php 

namespace Controllers;

use Core\Database;
use Repository\EtapesRepository;
use Helpers\Session;

class EtapesController 
{
    private $db;
    private $session;
    private $EtapeRepo;


    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session($this->db);
        $this->EtapeRepo = new EtapesRepository($this->db);
    }

    public function index()
    {
        try {
            $etapes = $this->EtapeRepo->getAll();
 
            require_once __DIR__ . '/../Views/fan/Parcours.php';
        } catch (\Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function show($id) 
    {
        $id = intval($id);

        if (!isset($id) || empty($id)) {
            die("Etape ID is missing.");
        }

        $etape = $this->EtapeRepo->getById($id);

        if (!$etape) {
            header("HTTP/1.0 404 Not Found");
            echo "Etape not found";
            return;
        }

        require_once __DIR__ . '/../Views/fan/Etape.php';
    } 
}