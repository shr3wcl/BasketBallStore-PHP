<?php
require_once __DIR__."/../Models/profile.php";
require_once __DIR__. "/../Models/check.php";
class ProfileController{

    private profile $profileModel;
    private check $check_model;

    public function __construct(){
        $this->profileModel = new profile();
        $this->check_model = new check();
    }

    public function view(): void
    {
        require_once "Views/index.php";
    }

    public function handleChangeInfo($fn, $ln, $g, $e, $p, $address)
    {
        $idUser = $_SESSION['user']['id_user'];
        $result = array();
        $result["msgFn"] = $this->check_model->checkEmpty($fn);
        $result["msgLn"] = $this->check_model->checkEmpty($ln);
        $result["msgGender"] = $this->check_model->checkEmpty($g);
        $result["msgEmail"] = $this->check_model->checkEmailReg($e);
        $result["msgPhone"] = $this->check_model->checkPhoneReg($p);
        $result["msgAddress"] = "";
        $checkRegex = implode('', $result);
        if (!$checkRegex) {
            $this->profileModel->handleChange($idUser, $fn, $ln, $g, $e, $p, $address);
        } else {
            return $result;
        }
    }

    public function handleChangePassword($oldPw, $newPw, $confirmPw){
        session_start();
        $result = array();
        $result["msgOldPw"] = $this->check_model->checkEmpty($oldPw);
        $result["msgNewPw"] = $this->check_model->checkEmpty($newPw);
//        $result["msgConfirmPw"] = $this->check_model->checkEmpty($confirmPw);
        $result["msgCheckConfirm"] = $this->check_model->checkPassword($newPw, $confirmPw);
        $result["msgCheckOld"] = (md5($oldPw) === $_SESSION['user']['password']) ? "" : "Sai mật khẩu";
        $checkRegex = implode('', $result);
        if(!$checkRegex){
            $this->profileModel->changePassword($_SESSION['user']['id_user'] , md5($newPw));
        }else{
            return $result;
        }

    }
}