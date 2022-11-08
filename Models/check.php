<?php
require_once ('model.php');

class check extends model{

    public function checkEmpty($value): string
    {
        if(empty($value) && $value !== '0'){
            return "Yêu cầu";
        }
        return "";
    }


    public function checkUsernameReg($un): string
    {
        if(strlen($un)<6){
            return "Có ít nhất 6 kí tự";
        }
        $sql = "SELECT * FROM user where username = '{$un}'";
        if(mysqli_num_rows(mysqli_query($this->conn, $sql))){
            return "Tên đăng nhập đã tồn tại";
        }
        return "";
    }

    public function checkPassword($pw, $tpw): string
    {
        if(strlen($pw)<6){
            return "Mật khẩu có ít nhất 6 kí tự";
        }
        if($pw!=$tpw){
            return "Mật khẩu không trùng khớp";
        }
        return "";
    }

    public function checkEmailReg($e): string
    {
        $sql = "SELECT * FROM user where email = '{$e}'";
        $regExEmail = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
        $checkRegEx = preg_match($regExEmail, $e);
        if(!$checkRegEx){
            return "Email chưa đúng";
        }
//        if(mysqli_num_rows(mysqli_query($this->conn, $sql))){
//            return "Email đã tồn tại";
//        }
        return "";
    }

    public function checkPhoneReg($p): string
    {
        $sql = "SELECT * FROM user where phone = '{$p}'";
        $regExPhone = '/^0[0-9]{9}$/';
        $checkRegEx = preg_match($regExPhone, $p);
        if(!$checkRegEx){
            return "Số điện thoại chưa đúng";
        }
//        if(mysqli_num_rows(mysqli_query($this->conn, $sql))){
//            return "SĐT đã tồn tại";
//        }
        return "";
    }
}