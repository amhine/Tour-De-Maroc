<?php

namespace Repository;

use Exception;
class FavoriteRepository
{
    private $db;
    private $table = 'favorite';
    public function __construct($db) {
        $this->db = $db;
    }

    public function addToFavoris($instance) {
        $sql = "INSERT INTO $this->table (fk_user_id, fk_cycliste_id) VALUES (:fk_user_id, :fk_cycliste_id)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':fk_user_id', $instance->fk_user_id);
            $stmt->bindParam(':fk_cycliste_id', $instance->fk_cycliste_id);
            return $stmt->execute();
        } catch (\Exception $e) {
            echo "Error :" . $e->getMessage();
            return null;
        }
    }
    public function deleteFromFavorite($id) {
        $sql = "DELETE FROM $this->table WHERE favorite_id = :favorite_id";
        try  {
            $stmt = $this->db->prepare($sql);
            $stmt->binParam(':favorite_id', $id);
            return $stmt->execute();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}