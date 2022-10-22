<?php

require_once "model.php";

class product extends modelAdmin{
    public function getAllProduct(): mysqli_result|bool
    {
        $query = "SELECT * FROM product";
        $rs = $this->conn->query($query);
        return $rs;
    }

    public function getProductType(): mysqli_result|bool
    {
        $query = "SELECT * FROM product_type";
        return $this->conn->query($query);
    }

    public function getCategory(): mysqli_result|bool
    {
        $query = "SELECT * FROM category";
        return $this->conn->query($query);
    }

    public function getPromotion(): mysqli_result|bool
    {
        $query = "SELECT * FROM promotion";
        return $this->conn->query($query);
    }

    public function addNewProduct($tp, $np, $p, $q, $idc, $idpt, $mi, $i1, $i2, $i3, $i4, $idp, $des): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time =  date('Y-m-d H:i:s');
        $query = "INSERT INTO product(title_product, name_product, price, quantity, id_category, id_product_type, main_image, image1, image2, image3, image4, id_promotion, description, timestamp ) 
                    VALUES ('$tp', '$np', $p, $q, $idc, $idpt, '$mi', '$i1', '$i2', '$i3', '$i4', $idp, '$des', '$time')";
        $this->conn->query($query);
    }

    public function deleteProduct($id): void
    {
        $query = "DELETE FROM product WHERE id_product = $id";
        $this->conn->query($query);
        header("location: ?mod=product");
    }
}