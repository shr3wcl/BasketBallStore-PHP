<?php
$mod = $_GET['mod'] ?? "dashboard";

switch ($mod){
    case "dashboard":
        require_once "Controllers/HomeController.php";
        $homeController = new HomeController();
        $homeController->getData();
        break;
        break;
    case "account":
        require_once "Controllers/AccountController.php";
        $accController = new AccountController();
        $accController->getAllAccount();
        break;
}