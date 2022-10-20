<?php
require_once ("connect.php");

class modelAdmin{
    public mysqli $conn;
    public function __construct(){
        $conn_obj = new connect();
        $this->conn = $conn_obj->conn;
    }

    function resultReturnArray($query): array
    {
        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}