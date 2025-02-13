<?php 

namespace Controllers;

use Core\Database;
use Repository\VisitorRepository;
use Entity\Visitor;
use DateTime;

class VisitorController 
{
    private $visitorRepository;
    private $db;

    public function __construct (VisitorRepository $visitorRepository)
    {
        $this->db = Database::getConnection()->conn;
        $this->visitorRepository = new VisitorRepository($this->db);
    }

    public function trackVisitor(): void {
        $visitor = new Visitor();
        $visitor->setIpAddress($_SERVER['REMOTE_ADDR']);
        $visitor->setCountry($_GET['country'] ?? 'Unknown'); 
        $visitor->setCity($_GET['city'] ?? 'Unknown');
        $visitor->setVisitedAt(new DateTime());
        $visitor->setPageVisited($_SERVER['REQUEST_URI']);

        $this->visitorRepository->save($visitor);
    }

    public function showVisitors(): void {
        $visitors = $this->visitorRepository->findAll();
        require_once __DIR__ . '/../views/admin/visitors.php';
    }
}