<?php

namespace Repository;

use Repository\Interfaces\ICategorieRepository;
use PDO;
class CategorieRepository implements ICategorieRepository
{
    private $db;
    private $table = 'categorie';

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
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function create($categorie)
    {
        $sql = "INSERT INTO $this->table (categorie_name) VALUES (:categorie_name)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bind¨Param(':categorie_name', $categorie->categorie_name);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE categorie_id = :categorie_id";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':categorie_id', $id);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function update($categorie)
    {
        // TODO: Implement update() method.
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
    }


}