<?php
require_once "model.php";

class banner extends modelAdmin{
    public function getAll(): mysqli_result|bool
    {
        $query = "SELECT * FROM banner";
        return $this->conn->query($query);
    }

    public function add($banner, $status): void
    {
        $query = "INSERT INTO banner(url_banner, status) VALUES ('$banner', '$status')";
        $this->conn->query($query);
        header("location: ?mod=banner");
    }

    public function view($id): mysqli_result|bool
    {
        $query = "SELECT * FROM banner WHERE id_banner = '$id'";
        return $this->conn->query($query);
    }

    public function delete($id): void
    {
        $query = "DELETE FROM banner WHERE id_banner = $id";
        $this->conn->query($query);
        header("location: ?mod=banner");
    }

    public function update($id, $banner): void
    {
        $query = "UPDATE banner 
                    SET url_banner = '$banner'
                    WHERE id_banner = '$id'";
        $this->conn->query($query);
        header("location: ?mod=banner");
    }
}