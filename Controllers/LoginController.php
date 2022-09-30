<?php
require_once __DIR__ . "/../Models/login.php";
require_once __DIR__ . "/../Models/check.php";

class LoginController
{
    private login $login_model;
    private check $check_model;

    public function __construct()
    {
        $this->login_model = new login();
        $this->check_model = new check();
    }

    function register()
    {
        require_once("Views/index.php");
    }

    function login()
    {
        require_once("Views/index.php");
    }

    function handleRegister($fn, $ln, $g, $us, $pw, $tpw, $e, $p)
    {
        $result = array();
//        $msgFn =
//        $msgLn =
//        $msgGender =
//        $msgUsername =
//        $msgEmail =
//        $msgPhone =
//        $msgPassword =
        $result["msgFn"] = $this->check_model->checkEmpty($fn);
        $result["msgLn"] = $this->check_model->checkEmpty($ln);
        $result["msgGender"] = $this->check_model->checkEmpty($g);
        $result["msgUsername"] = $this->check_model->checkUsernameReg($us);
        $result["msgEmail"] = $this->check_model->checkEmailReg($e);
        $result["msgPhone"] = $this->check_model->checkPhoneReg($p);
        $result["msgPassword"] = $this->check_model->checkPassword($pw, $tpw);
        if (empty($result)) {

        } else {
            return $result;
        }
    }
}