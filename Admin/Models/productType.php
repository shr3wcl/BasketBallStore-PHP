<?php

require_once "model.php";

class productType extends modelAdmin{
    public function getAll(): mysqli_result|bool
    {
        $query = "SELECT * FROM product_type";
        return $this->conn->query($query);
    }

    public function add($npt, $img, $des, $idc): void
    {
        $query = "INSERT INTO product_type(name_pt, logo_pt, description, id_category) VALUES ('$npt', '$img', '$des', $idc)";
        $this->conn->query($query);
        header("location: ?mod=productType");
    }

    public function delete($id): void
    {
        $query = "DELETE FROM product_type WHERE id_product_type = $id";
        $this->conn->query($query);
        header("location: ?mod=productType");
    }

    public function getCategory(): mysqli_result|bool
    {
        $query = "SELECT * FROM category";
        return $this->conn->query($query);
    }
}