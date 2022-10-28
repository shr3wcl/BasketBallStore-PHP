<?php

require_once "model.php";

class detailProduct extends model{
    public function getData($id): bool|array|null
    {
        $query = "SELECT * FROM product WHERE id_product = '$id'";
        return $this->conn->query($query)->fetch_assoc();
    }

    public function getRelated($idCategory): array
    {
        $query = "SELECT *, (SELECT value from promotion where id_promotion = product.id_promotion) as d_price,
       (SELECT type_sale from promotion WHERE id_promotion = product.id_promotion) as type_p,
       (SELECT type_promotion from promotion WHERE id_promotion = product.id_promotion) as name_sale,
       (SELECT name_pt from product_type WHERE id_product_type = product.id_product_type) as p_type_name
       FROM product WHERE id_category = $idCategory ORDER BY status DESC , n_stars DESC LIMIT 0, 15";
        return $this->extracted($query);
    }

    public function getPT($idPT): bool|array|null
    {
        $query = "SELECT name_pt FROM product_type WHERE id_product_type = $idPT";
        return $this->conn->query($query)->fetch_assoc();
    }

    public function getCategory($idCategory): bool|array|null
    {
        $query = "SELECT name_category, id_category FROM category WHERE id_category = $idCategory";
        return $this->conn->query($query)->fetch_assoc();
    }

    public function extracted(string $query): array
    {
        $data = $this->conn->query($query);
        $rs = array();
        while ($row = $data->fetch_assoc()) {
            $rs[] = $row;
        }
        for ($i = 0, $iMax = count($rs); $i < $iMax; $i++) {
            if ($rs[$i]["type_p"] === "0") {
                $rs[$i]["d_price"] = $rs[$i]["price"] - $rs[$i]['d_price'];
            } elseif ($rs[$i]["type_p"] === "1") {
                $rs[$i]["d_price"] = $rs[$i]["price"] * (1 - $rs[$i]['d_price'] / 100);
            }
        }
        return $rs;
    }
}