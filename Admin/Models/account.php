<?php
require_once "model.php";

class account extends modelAdmin{
    public function getAllAccount(): mysqli_result|bool
    {
        $query = "SELECT * FROM user";
        return $this->conn->query($query);
    }
}