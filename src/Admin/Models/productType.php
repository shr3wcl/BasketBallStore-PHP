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

    public function view($id){
        $query = "SELECT * FROM product_type WHERE id_product_type = '$id'";
        return $this->conn->query($query)->fetch_assoc();
    }

    public function getCategory(): mysqli_result|bool
    {
        $query = "SELECT * FROM category";
        return $this->conn->query($query);
    }

    public function update($id, $namePT, $logo, $des, $idC): void
    {
        $query = "UPDATE product_type 
                    SET name_pt = '$namePT', logo_pt = '$logo', description = '$des', id_category = '$idC'
                    WHERE id_product_type = '$id'";
        $this->conn->query($query);
        header("location: ?mod=productType");
    }
}