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

    public function __construct(VisitorRepository $visitorRepository)
    {
        $this->db = Database::getConnection()->conn;
        $this->visitorRepository = new VisitorRepository($this->db);
    }

    public function trackVisitor(): void
    {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $geolocationData = $this->getGeolocationData($ipAddress);

        $visitor = new Visitor();
        $visitor->setIpAddress($ipAddress);
        $visitor->setCountry($geolocationData['country'] ?? 'Unknown');
        $visitor->setCity($geolocationData['city'] ?? 'Unknown');
        $visitor->setVisitedAt(new DateTime());
        $visitor->setPageVisited($_SERVER['REQUEST_URI']);

        $this->visitorRepository->save($visitor);
    }

    
    public function showVisitors(): void
    {
        $visitors = $this->visitorRepository->findAll();
        echo "<pre>";
        print_r($visitors);
        echo "</pre>";
        die;
        require_once __DIR__ . '/../Views/admin/visitors.php    ';
    }
    
    private function getGeolocationData($ip): array
    {
        $url = "http://ip-api.com/json/{$ip}";
        $response = file_get_contents($url);
        return json_decode($response, true);
    }
}
