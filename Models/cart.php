<?php

require_once "model.php";

class cart extends model{
    public function addCartNotLogin($id, $quantity, $size){
        $query = "SELECT *, (SELECT value from promotion where id_promotion = product.id_promotion) as d_price,
       (SELECT type_sale from promotion WHERE id_promotion = product.id_promotion) as type_p,
       (SELECT type_promotion from promotion WHERE id_promotion = product.id_promotion) as name_sale,
       (SELECT name_pt from product_type WHERE id_product_type = product.id_product_type) as p_type_name
       FROM product WHERE id_product = $id";
        $data = $this->extracted($query);
        $data = array_merge($data[0], ["quantity"=>$quantity, "size"=>$size]);
        session_start();
        $_SESSION['carts'][] = $data;
    }

    public function deleteItemSession($id){
        session_start();
        for($i = 0; $i<= sizeof($_SESSION['carts']); $i++){
            if($_SESSION['carts'][$i]['id_product']===$id){
                unset($_SESSION['carts'][$i]);
            }
        }
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