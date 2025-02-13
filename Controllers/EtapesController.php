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
            $etapes = $EtapeRepo->getAll();
            var_dump($etapes);
            // TODO: include the Etape Views
            require_once './Views/fan/Parcours.php';
 
            // require_once __DIR__ . '/../Views/fan/Parcours.php';
        } catch (\Exception $e) {
            $this->session->set('Error', $e->getMessage());
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}