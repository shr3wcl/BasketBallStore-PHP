<?php

require_once "model.php";

class cart extends model{
    public function addCartNotLogin($id, $quantity, $size, $restQuantity){
        $query = "SELECT *, (SELECT value from promotion where id_promotion = product.id_promotion) as d_price,
       (SELECT type_sale from promotion WHERE id_promotion = product.id_promotion) as type_p,
       (SELECT type_promotion from promotion WHERE id_promotion = product.id_promotion) as name_sale,
       (SELECT name_pt from product_type WHERE id_product_type = product.id_product_type) as p_type_name
       FROM product WHERE id_product = $id";
        session_start();
        $data = $this->extracted($query);
        $check = false;
        if(isset($_SESSION['carts'])){
            for($i = 0; $i<= sizeof($_SESSION['carts']); $i++){
                if($_SESSION['carts'][$i]['id_product']===$id && $_SESSION['carts'][$i]['size'] === $size){
                    $_SESSION['carts'][$i]['quantity'] += $quantity;
                    $check = true;
                    break;
                }
            }
        }
        if($check===false){
            $data = array_merge($data[0], ["quantity"=>$quantity, "size"=>$size, "restQuantity"=>$restQuantity]);
            $_SESSION['carts'][] = $data;
        }
        $this->costCart();
    }

    private function costCart(): void
    {
        $totalProducts = 0;
        foreach ($_SESSION['carts'] as $each){
            $totalProducts += $each['d_price'] * $each['quantity'];
        }
        $total = $totalProducts + 30000;
        $_SESSION['totalCart'] = $total;
    }

    public function deleteItemSession($id){
        session_start();
        for($i = 0; $i<= sizeof($_SESSION['carts']); $i++){
            if($_SESSION['carts'][$i]['id_product']===$id){
                unset($_SESSION['carts'][$i]);
            }
        }
    }

    public function clearCart(){
        $_SESSION['carts'] = [];
        header("location: ?page=cart");
    }

    public function addCart(){
        $user = $_SESSION['user'];
        $name = $user['first_name']." ". $user['last_name'];
        $idUser = $user['id_user'];
        $phone = $user['phone'];
        $address = $user['address'];
        $total = $_SESSION['totalCart'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time =  date('Y-m-d H:i:s');
        $query = "INSERT INTO bill(id_user, name_user, phone, address, payment_method, total_cost, timestamp, note)
                VALUES ('$idUser', '$name', '$phone', '$address', 0, '$total', '$time', '')";
        $this->conn->query($query);
        $this->clearCart();
    }

    public function updateCart($id, $type, $size){
        session_start();
        for($i = 0; $i<= sizeof($_SESSION['carts']); $i++){
            if($_SESSION['carts'][$i]['id_product']===$id && $_SESSION['carts'][$i]['size'] === $size){
                if($type==='minus' && $_SESSION['carts'][$i]['quantity'] !== 1){
                    $_SESSION['carts'][$i]['quantity']-=1;
                }elseif ($type==='plus'){
                    $_SESSION['carts'][$i]['quantity']+=1;
                }
                $this->costCart();
                return $_SESSION['totalCart'];
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