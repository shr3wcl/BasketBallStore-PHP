<?php

require_once "model.php";

class bill extends model{
    public function getAll($idUser): mysqli_result|bool
    {
        $query = "SELECT * FROM bill WHERE id_user = '$idUser'";
        return $this->conn->query($query);
    }

    public function delete($id): void
    {
        $query = "DELETE FROM bill WHERE id_bill = $id";
        $this->conn->query($query);
        header("location: ?page=bill");
    }
}