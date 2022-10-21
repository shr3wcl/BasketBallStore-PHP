<?php

require_once "model.php";

class product extends modelAdmin{
    public function getAllProduct(){
        $query = "SELECT * FROM product";
        $rs = $this->conn->query($query);
        return $rs;
    }

    public function getProductType(){
        $query = "SELECT * FROM product_type";
        return $this->conn->query($query);
    }

    public function getCategory(){
        $query = "SELECT * FROM category";
        return $this->conn->query($query);
    }

    public function getPromotion(){
        $query = "SELECT * FROM promotion";
        return $this->conn->query($query);
    }
}