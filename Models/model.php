<?php
require_once ("connection.php");

class model{
    public mysqli $conn;
    public function __construct(){
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }

    function resultReturnArray($query){
        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}