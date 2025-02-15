<?php

// l'Utilisation    Database::getConnection()->conn
namespace Core;

use Dotenv\Dotenv;
use PDO, Exception;
class Database
{
    private static $hasInstance = null;
    public $conn;
    private $user;
    private $password;
    private $dbname;
    private $host;

    private function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $this->host = $_ENV['DB_HOST'];
        $this->dbname = $_ENV['DB_NAME'];
        $this->user = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASS'];

        try {
            $this->conn = new PDO("pgsql:host={$this->host};dbname={$this->dbname}", "{$this->user}", "{$this->password}");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch (\Exception $e) {
            echo 'Error DB: ' . $e->getMessage();
        }
    }
    public static function getConnection() {
        if(self::$hasInstance === null) {
          self::$hasInstance = new Database();
        }
        return self::$hasInstance;
    }
    public function __clone() {}

}