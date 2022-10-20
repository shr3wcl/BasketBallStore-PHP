<?php
require_once "model.php";

class crud extends modelAdmin{
    public function getAllProduct(){
        $query = "SELECT * FROM product";
        $rs = $this->conn->query($query);
        return $rs;
    }
}