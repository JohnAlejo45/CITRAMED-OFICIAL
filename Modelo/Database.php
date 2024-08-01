<?php
class Database {
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "citas";
  public $conn;

  public function __construct() {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

    if ($this->conn->connect_error) {
      die("Conexión fallida: " . $this->conn->connect_error);
    }
  }

  public function closeConnection() {
    $this->conn->close();
  }
}
?>
