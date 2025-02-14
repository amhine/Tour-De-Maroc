<?php 
namespace Controllers;
use Core\Database;
use Helpers\Session;

class CyclisteController {
    private $db;
    private $session;
    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
    }

    public function index() {
        $this->session->set('', '' );
        require_once __DIR__ . '/../Views/cycliste/cyc_home.php';
    }

    
    public function profile() {
        $this->session->set('', '' );
        require_once __DIR__ . '/../Views/cycliste/profile.php';
    }
}