<?php

namespace Repository;

use Repository\Interfaces\IEtapesRepository as InterfacesEtapesRepository;
use Entity\Etapes;
use PDO;
use Exception;

class EtapesRepository implements InterfacesEtapesRepository
{
    private $db;
    private $table = 'etape';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM $this->table";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_OBJ);
    
            return $results;        
        } catch (Exception $e) {
            error_log("Error in getAll(): " . $e->getMessage());
        }
    }

    public function create($etape)
    {
        $sql = "INSERT INTO $this->table (desription) VALUES (:description)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':categorie_name', $etape->description);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE etape_id = :id";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function update($etape)
    {
        $sql = "UPDATE $this->table SET description = :description WHERE etape_id = :id";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $etape->id);
            $stmt->bindParam(':description', $etape->description);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE etape_id = :id";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }
}
