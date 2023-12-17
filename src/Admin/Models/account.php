<?php
require_once "model.php";

class account extends modelAdmin{
    public function getAllAccount(): mysqli_result|bool
    {
        $query = "SELECT * FROM user";
        return $this->conn->query($query);
    }

    public function add($fn,$ln, $p, $g, $e, $address, $un, $pw, $idAuth): void
    {
        $query = "INSERT INTO user(first_name, last_name, phone, gender, email, address, username, password, id_auth)
                    VALUES ('$fn', '$ln', '$p', '$g', '$e', '$address', '$un', '$pw', '$idAuth')";
        $this->conn->query($query);
        header("location: ?mod=account");
    }

    public function view($id): mysqli_result|bool
    {
        $query = "SELECT * FROM user WHERE id_user = '$id'";
        return $this->conn->query($query);
    }

    public function delete($id): void
    {
        $query = "DELETE FROM user WHERE id_user = $id";
        $this->conn->query($query);
        header("location: ?mod=account");
    }

    public function update($id,$fn,$ln, $p, $g, $e, $address, $idAuth): void
    {
//        if($pw){
//            $query = "UPDATE user
//                    SET first_name = '$fn', last_name = '$ln', phone = '$p', gender = '$g', email = '$e', address = '$address', password = '$pw', id_auth='$idAuth'
//                    WHERE id_user = '$id'";
//        }
//        else{
            $query = "UPDATE user 
                    SET first_name = '$fn', last_name = '$ln', phone = '$p', gender = '$g', email = '$e', address = '$address', id_auth='$idAuth'
                    WHERE id_user = '$id'";
//        }
        $this->conn->query($query);
        header("location: ?mod=account");
    }
}