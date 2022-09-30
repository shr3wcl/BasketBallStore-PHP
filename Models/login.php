<?php
require_once("model.php");

class login extends model
{
    public mysqli $conn;

    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }

    public function handleRegister($fn, $ln, $g, $us, $pw, $e, $p): void
    {
        $sql = "INSERT INTO user(last_name, first_name, phone, gender, email, address, username, password) 
                values ('{$ln}', '{$fn}', '{$p}', $g, '{$e}', '', '{$us}', '{$pw}')";
        $this->conn->query($sql);
    }
}