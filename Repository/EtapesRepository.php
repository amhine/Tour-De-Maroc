<?php

namespace Repository;

use Repository\Interfaces\IEtapesRepository as InterfacesEtapesRepository;
use Entity\Etapes;
use PDO;

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

            $etapes = [];
            foreach ($results as $row) {
                $etapes[] = new \Entity\Etapes(
                    $row->etape_id,  
                    $row->description,
                    $row->region,
                    $row->image,
                    $row->start_date,
                    $row->fk_difficulte_id, 
                    $row->fk_course_id 
                );
            }
            return $etapes;
        } catch (\Exception $e) {
            echo $e->getMessage();
            return [];
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
