<?php
require_once ("Models/login.php");

class LoginController{
    var $login_model;

    public function __construct(){
        $this->login_model = new login();
    }

    function register(){
        require_once ("Views/index.php");
    }

    function login(){
        require_once ("Views/index.php");
    }

    function handleGetDataAndValidateRegister(){

    }
}