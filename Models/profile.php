<?php

require_once "model.php";
require_once "login.php";

class profile extends model
{
    public function handleChange($fn, $ln, $g, $e, $p, $address)
    {
        session_start();
        $username = $_SESSION['user']['username'];

        $sql = "UPDATE user SET last_name = '$ln', first_name = '$fn', phone = '$p', gender = '$g', email = '$e', address = '$address'";
        $this->conn->query($sql);
        $_SESSION['user']['last_name'] = $ln;
        $_SESSION['user']['first_name'] = $fn;
        $_SESSION['user']['phone'] = $p;
        $_SESSION['user']['gender'] = $g;
        $_SESSION['user']['email'] = $e;
        $_SESSION['user']['address'] = $address;
    }
}