<?php

require_once "model.php";

class promotion extends modelAdmin{
    public function getAll(): mysqli_result|bool
    {
        $query = "SELECT * FROM promotion";
        return $this->conn->query($query);
    }

    public function add($np, $tp, $v): void
    {
        $query = "INSERT INTO promotion(name_promotion, type_promotion, value) VALUES ('$np', '$tp', $v)";
        $this->conn->query($query);
        header("location: ?mod=promotion");
    }

    public function delete($id): void
    {
        $query = "DELETE FROM promotion WHERE id_promotion = $id";
        $this->conn->query($query);
        header("location: ?mod=promotion");
    }
}