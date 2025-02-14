<?php

namespace Repository;

use PDO, Exception;
// TODO: send Donations
// TODO: display the list of donations
class TransactionRepository
{

    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function transfert($transactionInstance) {
        try {
            $this->db->beginTransaction();
            $stmt = $this->db->prepare("INSERT INTO transaction (date, amount, fk_user_id, fk_cycliste_id) VALUES (:date, :amount, :fk_user_id, :fk_cycliste_id)");
            $stmt->bindParam(':date', $transactionInstance->date);
            $stmt->bindParam(':amount', $transactionInstance->amount);
            $stmt->bindParam(':fk_user_id', $transactionInstance->fk_user_id);
            $stmt->bindParam(':fk_cycliste_id', $transactionInstance->fk_cycliste_id);
            $stmt->execute();
            $this->db->commit();
        } catch (Exception $e) {
            $this->db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }
    public function getDonations() {
        $sql = "SELECT * FROM transaction"; // TODO: Update This to Get List From a View
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $donations = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $donations;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}