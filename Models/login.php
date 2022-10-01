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

    public function handleLogin($username, $password): bool
    {
        $sql = "SELECT * FROM user where username = '{$username}' AND password = '{$password}'";
        $rs = $this->conn->query($sql)->fetch_assoc();
        if ($rs) {
            if ($rs["id_auth"] === 1) {
                $_SESSION["isAdmin"] = true;
                $_SESSION["isLogin"] = true;
            } else if ($rs["id_auth"] === 3) {
                $_SESSION["isLogin"] = true;
                $_SESSION["login"] = $rs;
            }
            return true;
        }
        return false;
    }
}
