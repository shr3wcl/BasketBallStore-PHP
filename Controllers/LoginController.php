@@ -0,0 +1,80 @@
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
        $checkRegex = "";

        foreach ($result as $key => $value) {
            $checkRegex .= $value;
        }
        if (!$checkRegex) {
            $this->login_model->handleRegister($fn, $ln, $g, $us, $pw, $e, $p);

        } else {
            return $result;
        }
    }

    function handleLogin($username, $password)
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
//                return "asdasd";
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
