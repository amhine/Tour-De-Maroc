<?php

namespace Repository;

use PDO, Exception;
class HistoriqueRepository
{
    private $db;
    private $table = 'historique';

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function create($historique)
    {
        $sql = "INSERT INTO  $this->table  (nom, description, fk_user_id) VALUES (:nom, :description, :fk_user_id)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nom', $historique->nom);
            $stmt->bindParam(':description', $historique->description);
            $stmt->bindParam(':fk_user_id', $historique->fk_user_id);
            return $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function delete($id) {
        $sql = "DELETE FROM $this->table WHERE historique_id = :historique_id";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':historique_id', $id);
            return $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function getHistorique($cycliste_id) {
        $sql = "SELECT * FROM $this->table WHERE fk_user_id = :fk_user_id";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':fk_user_id', $cycliste_id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }
}