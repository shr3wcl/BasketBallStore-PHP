<?php
require_once ("connection.php");

class model{
    var $conn;
    function __construct(){
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }

    function getLatestProducts($s, $e){
        $query = "SELECT * FROM product WHERE status = 1 ORDER BY timestamp DESC LIMIT $s, $e";

        require ("resultReturned.php");
        return $data;
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