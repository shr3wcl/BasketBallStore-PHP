<?php
require_once ('model.php');
class home extends model{

    public function getLatestProducts($s, $e, $idProduct): array
    {
        $query = "SELECT *, (SELECT value from promotion where id_promotion = product.id_promotion) as d_price,
       (SELECT type_sale from promotion WHERE id_promotion = product.id_promotion) as type_p,
       (SELECT type_promotion from promotion WHERE id_promotion = product.id_promotion) as name_sale,
       (SELECT name_pt from product_type WHERE id_product_type = product.id_product_type) as p_type_name
       FROM product WHERE id_category = $idProduct AND status >= 1 ORDER BY timestamp DESC LIMIT $s, $e";
        return $this->extracted($query);
    }

    public function getBanner(): array
    {
        $query = "SELECT * FROM banner WHERE status = 1 ORDER BY timestamp DESC";
        return $this->resultReturnArray($query);
    }

    public function getTypicalProducts($start, $end): array
    {
        $query = "SELECT * FROM typical_products LIMIT $start, $end";
        return $this->resultReturnArray($query);
    }

    public function getLastProductType($start, $end, $idProductType): array
    {
        $query = "SELECT *, (SELECT value from promotion where id_promotion = product.id_promotion) as d_price,
       (SELECT type_sale from promotion WHERE id_promotion = product.id_promotion) as type_p,
       (SELECT type_promotion from promotion WHERE id_promotion = product.id_promotion) as name_sale,
       (SELECT name_pt from product_type WHERE id_product_type = product.id_product_type) as p_type_name
       FROM product WHERE id_product_type = $idProductType AND status = 1 ORDER BY status DESC , n_stars DESC LIMIT $start, $end";
        return $this->extracted($query);
    }

    public function getOutstandingProduct($start, $end, $idCategory): array
    {
        $query = "SELECT *, (SELECT value from promotion where id_promotion = product.id_promotion) as d_price,
       (SELECT type_sale from promotion WHERE id_promotion = product.id_promotion) as type_p,
       (SELECT type_promotion from promotion WHERE id_promotion = product.id_promotion) as name_sale,
       (SELECT name_pt from product_type WHERE id_product_type = product.id_product_type) as p_type_name
       FROM product WHERE id_category = $idCategory AND status >= 1 ORDER BY timestamp DESC , n_stars DESC LIMIT $start, $end";
        return $this->extracted($query);
    }

    public function getProductTypes($idCategory): mysqli_result|bool
    {
        $query = "SELECT id_product_type, name_pt FROM product_type WHERE id_category = $idCategory";
        return $this->conn->query($query);
    }

    /**
     * @param  string  $query
     * @return array
     */
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