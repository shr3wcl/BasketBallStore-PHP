<?php

require_once "model.php";

class detailProduct extends model{
    public function getData($id){
        $query = "SELECT * FROM product WHERE id_product = '$id'";
        return $this->conn->query($query)->fetch_assoc();
    }
}