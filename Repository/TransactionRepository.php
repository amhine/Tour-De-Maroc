<?php

namespace Repository;

use PDO, Exception;
// TODO: send Donations
// TODO: display the list of donations
class TransactionRepository
{

    private $db;
    private $table = "transaction";
    public function __construct($db)
    {
        $this->db = $db;
    }

    /*
        CREATE TRIGGER update_wallet_sender
        AFTER INSERT ON transaction
        FOR EACH ROW
        BEGIN
            UPDATE fan SET wallet = wallet - NEW.amount WHERE id = NEW.fk_sender_id;
        END

        CREATE TRIGGER update_wallet_receiver
        AFTER INSERT ON transaction
        FOR EACH ROW
        BEGIN
            UPDATE fan SET wallet = wallet - NEW.amount WHERE id = NEW.fk_receiver_id;
        END
     */
    public function transfert($transactionInstance) {
        $sql = "INSERT INTO $this->table (date, amount, fk_sender_id, fk_receiver_id) VALUES(:date, :amount, :fk_sender_id, :fk_receiver_id)";
        try {
            $this->db->beginTransaction();

            $balanceCheckSql = "SELECT wallet FROM fan WHERE id = :fk_sender_id";
            $balanceStmt = $this->db->prepare($balanceCheckSql);
            $balanceStmt->bindParam(':fk_sender_id', $transactionInstance->fk_user_id);
            $balanceStmt->execute();
            $senderBalance = $balanceStmt->fetchColumn();

            if ($senderBalance < $transactionInstance->amount) {
                throw new Exception("Insufficient balance in sender's account.");
            }

            // TODO: In the Database Create 2 Triggers to Update the Wallets of the Sender and Receiver

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':date', $transactionInstance->date);
            $stmt->bindParam(':amount', $transactionInstance->amount);
            $stmt->bindParam(':fk_sender_id', $transactionInstance->fk_user_id);
            $stmt->bindParam(':fk_receiver_id', $transactionInstance->fk_cycliste_id);
            $stmt->execute();
            $this->db->commit();
        } catch (Exception $e) {
            $this->db->rollBack();
            echo "Error: " . $e->getMessage();
        }
    }
    public function getDonations() {
        $sql = "SELECT * FROM $this->table"; // TODO: Update This to Get List From a View
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