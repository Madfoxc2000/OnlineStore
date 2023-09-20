<?php
class Product {
    protected $conn;

    public function __construct(){
        global $conn;
        $this->conn = $conn;
    }

    public function fetch_all(){
      $SQL = "SELECT * FROM products";
      $result = $this->conn->query($SQL);
      return $result->fetch_all(MYSQLI_ASSOC);
    }
} 