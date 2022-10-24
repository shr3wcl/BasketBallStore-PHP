<?php
require_once "model.php";

class bill extends modelAdmin{
    public function getAll(): mysqli_result|bool
    {
        $query = "SELECT * FROM bill";
        return $this->conn->query($query);
    }

    public function add($iduser, $name, $p, $address, $pm, $total, $status, $note): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $time =  date('Y-m-d H:i:s');
        $query = "INSERT INTO bill(id_user, name_user, phone, address, payment_method, total_cost, timestamp, status, note) 
                VALUES ('$iduser', '$name', '$p', '$address', '$pm', '$total', '$time', '$status','$note')";
        $this->conn->query($query);
        header("location: ?mod=bill");
    }

    public function view($id): mysqli_result|bool
    {
        $query = "SELECT * FROM bill WHERE id_bill = '$id'";
        return $this->conn->query($query);
    }

    public function delete($id): void
    {
        $query = "DELETE FROM bill WHERE id_bill = $id";
        $this->conn->query($query);
        header("location: ?mod=bill");
    }

    public function confirm($id): void
    {
        $query = "UPDATE bill SET status = 1 WHERE id_bill = $id";
        $this->conn->query($query);
        header("location: ?mod=bill");
    }

    public function getUser(): mysqli_result|bool
    {
        $query = "SELECT id_user, first_name, last_name, username FROM user";
        return $this->conn->query($query);
    }

    public function update($id, $idUser, $nameUser, $phone, $address, $pMethod,$total, $status, $note): void
    {
        $query = "UPDATE bill 
                    SET id_user = '$idUser', name_user = '$nameUser', phone = '$phone', address = '$address', payment_method = '$pMethod', total_cost = '$total', status = '$status', note = '$note'
                    WHERE id_bill = '$id'";
        $this->conn->query($query);
        header("location: ?mod=bill");
    }
}