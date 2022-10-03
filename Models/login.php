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

    public function handleLogin($username, $password): bool|array|null
    {
        $sql = "SELECT * FROM user where username = '{$username}' AND password = '{$password}'";
        $rs = $this->conn->query($sql)->fetch_assoc();
        session_start();
        if($rs){
            $_SESSION['login'] = true;
            $_SESSION['user'] = $rs;
        }
        return $rs;
    }

    public function handleLogout(): void
    {
        unset($_SESSION['login'], $_SESSION['user']);
        header("location: ?page=home");
    }
}
