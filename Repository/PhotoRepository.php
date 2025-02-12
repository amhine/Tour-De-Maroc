<?php

namespace Repository;

use Repository\Interfaces\IPhotoRepository;
use Exception;

class PhotoRepository implements IPhotoRepository
{
    private $db;
    private $table = "photos";

    public function ajoute($instancePhoto)
    {
        $sql = "INSERT INTO $this->table (photo, fk_user_id) VALUES (:photo, :fk_user_id)";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':photo', $instancePhoto->photo);
            $stmt->bindParam(':fk_user_id', $instancePhoto->fk_user_id);
            return $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE photo_id = :photo_id";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':photo_id', $id);
            return $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }

    public function getCyclisteImage($user_id)
    {
        $sql = "SELECT * FROM $this->table WHERE fk_user_id = :fk_user_id";
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':fk_user_id', $user_id);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo $e->getMessage();
            return null;
        }
    }
}