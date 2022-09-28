<?php
require_once ("connection.php");

class model{
    var $conn;
    function __construct(){
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }

    function getBanner($start, $end){
        $query = "SELECT * FROM banner LIMIT $start, $end";
        require ("resultReturned.php");
        return $data;
    }

    function getTypicalProducts($start, $end){
        $query = "SELECT * FROM typical_products LIMIT $start, $end";
        require ("resultReturned.php");
        return $data;
    }
}