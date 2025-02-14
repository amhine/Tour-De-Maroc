<?php 
namespace Controllers;
use Core\Database;
use Helpers\Session;

class CyclisteController {
    private $session;
    public function __construct()
    {
        $this->db = Database::getConnection()->conn;
        $this->session = new Session();
    }

    public function index() {
        $this->session->set('', '' );
    }
}