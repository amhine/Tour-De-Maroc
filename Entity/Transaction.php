<?php

namespace Entity;

use Helpers\Validator;

use Exception;
class Transaction
{
    private $transaction_id;
    private $date;
    private $amount;
    private $fk_user_id;
    private $fk_cycliste_id;

    public function __construct($transaction_id, $date, $amount, $fk_user_id, $fk_cycliste_id) {
        try {
            $this->transaction_id = Validator::ValidateData($transaction_id);
            $this->date = Validator::ValidateData($date);
            $this->amount = Validator::ValidateData($amount);
            $this->fk_user_id = Validator::ValidateData($fk_user_id);
            $this->fk_cycliste_id = Validator::ValidateData($fk_cycliste_id);
        } catch (Exception $e) {
            echo "Error:" . $e->getMessage();
        }
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value): void
    {
        $this->$property = $value;
    }

}