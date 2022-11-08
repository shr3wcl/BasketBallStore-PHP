<?php
require_once "./Models/account.php";

class AccountController{
    public account $accModel;

    public function __construct()
    {
        $this->accModel = new account();
    }

    public function getAll(): void
    {
        $accountList = $this->accModel->getAllAccount();
        if(isset($_GET['id']) && $_GET['act'] === "edit"){
            $id = $_GET['id'];
            $detailStuff = $this->accModel->view($id)->fetch_assoc();
        }
        require_once "view/index.php";
    }

    public function handleAdd():void
    {
        $fn = $_POST['first_name'];
        $ln = $_POST['last_name'];
        $p = $_POST['phone'];
        $g = $_POST['gender'];
        $e = $_POST['email'];
        $address =$_POST['address'];
        $un = $_POST['username'];
        $pw = md5($_POST['password']);
        $idAuth = $_POST['id_auth'];
        $this->accModel->add($fn, $ln, $p, $g, $e, $address, $un, $pw, $idAuth);
    }

    public function viewDetail():void
    {
        $id = $_GET['id'];
        $detailStuff = $this->accModel->view($id)->fetch_assoc();
        require_once "view/index.php";
    }

    public function handleDelete(): void
    {
        $id = $_GET['id'];
        $this->accModel->delete($id);
    }

    public function handleUpdate(): void
    {
        $id = $_GET['id'];
        $fn = $_POST['first_name'];
        $ln = $_POST['last_name'];
        $p = $_POST['phone'];
        $g = $_POST['gender'];
        $e = $_POST['email'];
        $address =$_POST['address'];
//        $pw = md5($_POST['password']);
        $idAuth = $_POST['id_auth'];
        $this->accModel->update($id, $fn, $ln, $p, $g, $e, $address, $idAuth);
    }
}