<?php

require_once "model.php";

class category extends modelAdmin
{
    public function getAll(): mysqli_result|bool
    {
        $query = "SELECT * FROM category";
        return $this->conn->query($query);
    }

    public function add($nc): void
    {
        $query = "INSERT INTO category(name_category) VALUES ('$nc')";
        $this->conn->query($query);
        header("location: ?mod=category");
    }

    public function view($id): mysqli_result|bool
    {
        $query = "SELECT * FROM category WHERE id_category = '$id'";
        return $this->conn->query($query);
    }

    public function delete($id): void
    {
        $query = "DELETE FROM category WHERE id_category = $id";
        $this->conn->query($query);
        header("location: ?mod=category");
    }

    public function update($id, $nameC): void
    {
        $query = "UPDATE category 
                    SET name_category = '$nameC'
                    WHERE id_category = '$id'";
        $this->conn->query($query);
        header("location: ?mod=category");
    }
}