<?php
require_once ('model.php');

class check extends model{
    public mysqli $conn;

    function __construct()
    {
        $conn_object = new connection();
        $this->conn = $conn_object->conn;
    }

    function checkEmpty($value){
        if(empty($value) && $value !== '0'){
            return "Không được để trống";
        }
        return "";
    }


    function checkUsernameReg($un){
        $sql = "SELECT * FROM user where username = '{$un}'";
        if(mysqli_num_rows(mysqli_query($this->conn, $sql))){
            return "Tên đăng nhập đã tồn tại";
        }
        return "";
    }

    function checkPassword($pw, $tpw){
        if($pw!=$tpw){
            return "Mật khẩu không trùng khớp";
        }
        return "";
    }

    function checkEmailReg($e){
        $sql = "SELECT * FROM user where email = '{$e}'";
        if(mysqli_num_rows(mysqli_query($this->conn, $sql))){
            return "Email đã tồn tại";
        }
        return "";
    }

    function checkPhoneReg($p){
        $sql = "SELECT * FROM user where phone = '{$p}'";
        if(mysqli_num_rows(mysqli_query($this->conn, $sql))){
            return "SĐT đã tồn tại";
        }
        return "";
    }
}