<?php
require_once "./Models/account.php";

class AccountController{
    public account $accModel;

    public function __construct()
    {
        $this->accModel = new account();
    }

    public function getAllAccount(): void
    {
        $accountList = $this->accModel->getAllAccount();
        require_once "view/index.php";
    }
}