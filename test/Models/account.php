<?php
require_once "model.php";

class account extends modelAdmin{
    public function getAllProduct(){
        $query = "SELECT * FROM user";
        $rs = $this->conn->query($query);
        return $rs;
    }
}