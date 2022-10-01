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

    public function register(): void
    {
        require_once("Views/index.php");
    }

    public function login(): void
    {
        require_once("Views/index.php");
    }

    public function handleRegister($fn, $ln, $g, $us, $pw, $tpw, $e, $p)
    {
        $result = array();
        $result["msgFn"] = $this->check_model->checkEmpty($fn);
        $result["msgLn"] = $this->check_model->checkEmpty($ln);
        $result["msgGender"] = $this->check_model->checkEmpty($g);
        $result["msgUsername"] = $this->check_model->checkUsernameReg($us);
        $result["msgEmail"] = $this->check_model->checkEmailReg($e);
        $result["msgPhone"] = $this->check_model->checkPhoneReg($p);
        $result["msgPassword"] = $this->check_model->checkPassword($pw, $tpw);

        $checkRegex = implode('', $result);
        if (!$checkRegex) {
            $this->login_model->handleRegister($fn, $ln, $g, $us, $pw, $e, $p);

        } else {
            return $result;
        }
    }

    public function handleLogin($username, $password)
    {
        $result = array();
        $result["msgUsername"] = $this->check_model->checkEmpty($username);
        $result["msgPassword"] = $this->check_model->checkEmpty($password);
        $result["msgLogin"] = "";
        $checkRegex = "";

        foreach ($result as $key => $value) {
            $checkRegex .= $value;
        }
        if (!$checkRegex) {
            $rs = $this->login_model->handleLogin($username, $password);
            if ($rs) {

                
            }
            else{
                $result["msgLogin"] = "Sai tên đăng nhập hoặc mật khẩu";
                return $result;
            }
        } else {
            return $result;
        }
    }
}
