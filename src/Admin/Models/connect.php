<?php

class Connect
{
    public mysqli $conn;

    public function __construct()
    {
        $servername = getenv('MYSQL_HOSTNAME');
        $username = getenv('MYSQL_USER');
        $password = getenv('MYSQL_PASSWORD');
        $db_name = getenv('MYSQL_DATABASE');

        $this->conn = new mysqli($servername, $username, $password, $db_name);
        $this->conn->set_charset('utf8');

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
