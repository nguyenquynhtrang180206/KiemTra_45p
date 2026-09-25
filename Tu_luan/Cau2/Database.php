<?php
class Database {
    private $host = "localhost";
    private $dbname = "store_db";
    private $username = "root";
    private $password = "";
    private $charset = "utf8mb4";

    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $pdo;
        } catch (PDOException $e) {
            error_log("Lỗi kết nối CSDL: " . $e->getMessage());
            die("Lỗi kết nối CSDL: " . $e->getMessage());
        }
    }
}
?>