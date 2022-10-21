<?php
session_start();
$auth = $_SESSION['auth'] ?? 0;
if(isset($_SESSION["auth"]) && $_SESSION["auth"] ===  true){
    $mod = $_GET['mod'] ?? "dashboard";
    switch ($mod){
        case "dashboard":
            require_once "Controllers/DashboardController.php";
            $dashboardM = new DashboardController();
            $dashboardM->getData();
            break;
            break;
        case "account":
            require_once "Controllers/AccountController.php";
            $accController = new AccountController();
            $accController->getAllAccount();
            break;
        case "product":
            require_once "Controllers/ProductController.php";
            $product_ctl = new ProductController();
            $product_ctl->getAllProduct();
            break;
        case "productType":
            require_once "Controllers/ProductController.php";
            $product_ctl = new ProductController();
            $product_ctl->getAllProductType();
            break;
        case "category":
            require_once "Controllers/ProductController.php";
            $product_ctl = new ProductController();
            $product_ctl->getAllCategory();
            break;
    }
} else{
    header("location: ../?page=home");
}
