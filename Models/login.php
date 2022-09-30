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

    function handleRegister($raw, $validateUsername, $validatePassword)
    {
        if ($validateUsername) {
            if ($validatePassword) {
                $valueTable = "";
                $valueInsert = "";
                foreach ($raw as $each => $value) {
                    $valueTable .= $each . ",";
                    $valueInsert .= "'" . $value . "',";
                }

                $valueTable = trim($valueTable, ",");
                $valueInsert = trim($valueInsert, ",");

                $query = "INSERT INTO user($valueTable) VALUES ($valueInsert);";

                if ($this->conn->query($query)) {
                    setcookie("msg", "Register successfully", time() + 2);
                } else {
                    setcookie("msg", "Register failed", time() + 2);
                }
            } else {
                setcookie("msg", "Password does not match", time() + 2);
            }
        } else {
            setcookie("msg", "Username or email already exists");
        }
    }
}