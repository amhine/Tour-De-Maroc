<?php

namespace Repository;

use Core\Database;
use Exception;
use Repository\Interfaces\IVisitorRepository as InterfaceVisitorRepository;
use PDO;

class VisitorRepository implements InterfaceVisitorRepository
{
    private $db;
    private $table = "visitors";

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function save($visitor): void
    {
        try {
            $stmt = $this->db->prepare(
                'INSERT INTO $this->table (ip_address, country, city, visited_at, page_visited) 
                 VALUES (:ip_address, :country, :city, :visited_at, :page_visited)'
            );
            $stmt->execute([
                ':ip_address' => $visitor->getIpAddress(),
                ':country' => $visitor->getCountry(),
                ':city' => $visitor->getCity(),
                ':visited_at' => $visitor->getVisitedAt()->format('Y-m-d H:i:s'),
                ':page_visited' => $visitor->getPageVisited()
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function findAll(): object
    {
        try {
            $stmt = $this->db->query('SELECT * FROM visitors ORDER BY visited_at DESC');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
