<?php
namespace Repository;
require_once 'vendor/autoload.php';


use Entity\Comments;
use PDO;
use PDOException;

class CommentsRepository {
    private $db;
    private static $table = 'Comment'; 

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        $sql = "SELECT c.*, u.nom AS fan_name, e.description AS etape 
                FROM " . self::$table . " c
                INNER JOIN users u ON c.fk_user_id = u.id
                INNER JOIN etape e ON c.fk_etape_id = e.etape_id";  // Fixed joins
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(Comments $comment) {
        $sql = "UPDATE " . self::$table . " 
                SET comment_content = :content,
                    status = :status
                WHERE comment_id = :id";  
        
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':content', $comment->comment_content);
            $stmt->bindValue(':status', $comment->status);
            $stmt->bindValue(':id', $comment->comment_id);
            
            return $stmt->execute();
        } catch (PDOException $e) {
            throw new \Exception("Update failed: " . $e->getMessage());
        }
    }

    public function delete(Comments $comment) {
        $sql = "DELETE FROM " . self::$table . " 
                WHERE comment_id = :id"; 
        
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', $comment->comment_id);
            return $stmt->execute();
        } catch (PDOException $e) {
            throw new \Exception("Delete failed: " . $e->getMessage());
        }
    }

    public function create(Comments $comment) {
        $sql = "INSERT INTO " . self::$table . " 
                (comment_content, fk_user_id, fk_etape_id, status)
                VALUES (:content, :user_id, :etape_id, :status)";  
        
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':content', $comment->comment_content);
            $stmt->bindValue(':user_id', $comment->fk_user_id);
            $stmt->bindValue(':etape_id', $comment->fk_etape_id);
            $stmt->bindValue(':status', $comment->status ?? 'inactive');
            
            $stmt->execute();
            $comment->comment_id = $this->db->lastInsertId();
            return $comment;
        } catch (PDOException $e) {
            throw new \Exception("Create failed: " . $e->getMessage());
        }
    }

    public function countHidden() {
        $sql = "SELECT COUNT(*) AS count 
                FROM " . self::$table . " 
                WHERE status = 'inactive'";  
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ)->count;
    }

    public function countAll() {
        $sql = "SELECT COUNT(*) AS count FROM " . self::$table;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ)->count;
    }
}