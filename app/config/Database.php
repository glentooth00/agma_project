<?php
class Database {
    private $serverName = "localhost\\SQLEXPRESS"; // Change if necessary
    private $database = "development_db"; // Your database name
    private $username = "THEGLEEN\glend"; // Change if using SQL Server Authentication
    private $password = ""; // Password for SQL authentication
    public $conn;

    public function __construct() {
        $connectionInfo = array("Database" => $this->database, "UID" => $this->username, "PWD" => $this->password);
        $this->conn = sqlsrv_connect($this->serverName, $connectionInfo);

        if (!$this->conn) {
            die("Database connection failed: " . print_r(sqlsrv_errors(), true));
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
