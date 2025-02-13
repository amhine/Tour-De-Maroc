<?php

namespace Repository;

use PDO, Exception;
class SignalRepository
{
    private $db;
    private $table = 'signal';
    public function __construct($db){
        $this->db = $db;
    }
    public function create($signal){
        $sql = "INSERT INTO  $this->table  (nom, description, fk_user_id) VALUES (:nom, :description, :fk_user_id)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nom', $signal->nom);
            $stmt->bindParam(':description', $signal->description);
            $stmt->bindParam(':fk_user_id', $signal->fk_user_id);
            return $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }
    public function getAll(){
        $sql = "SELECT * FROM $this->table";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }
}