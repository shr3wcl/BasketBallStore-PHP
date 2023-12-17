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

    public function addNewProduct($tp, $np, $p, $q, $idc, $idpt, $mi, $i1, $i2, $i3, $i4, $s, $idp, $des): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time =  date('Y-m-d H:i:s');
        $query = "INSERT INTO product(title_product, name_product, price, quantity, id_category, id_product_type, main_image, image1, image2, image3, image4, size, id_promotion, description, timestamp ) 
                    VALUES ('$tp', '$np', $p, $q, $idc, $idpt, '$mi', '$i1', '$i2', '$i3', '$i4', '$s', '$idp', '$des', '$time')";
        $this->conn->query($query);
        header("location: ?mod=product");
    }

    public function view($id): bool|array|null
    {
        $query = "SELECT * FROM product WHERE id_product = '$id'";
        return $this->conn->query($query)->fetch_assoc();
    }

    public function deleteProduct($id): void
    {
        $query = "DELETE FROM product WHERE id_product = $id";
        $this->conn->query($query);
        header("location: ?mod=product");
    }

    public function update($id, $mi, $i1, $i2, $i3,$i4, $s,$tp,$np,$p,$q,$idc,$idPt,$idp,$des): void
    {
        $query = "UPDATE product 
                    SET title_product = '$tp', name_product = '$np', price = '$p', quantity = '$q', id_category = '$idc', id_product_type = '$idPt', main_image = '$mi', image1 = '$i1', image2 = '$i2', image3 = '$i3', image4 = '$i4', size = '$s', id_promotion = '$idp', description = '$des'
                    WHERE id_product = '$id'";
        $this->conn->query($query);
        header("location: ?mod=product");
    }
}