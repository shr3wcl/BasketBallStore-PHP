<?php
$route = $_GET["page"] ?? "home";

switch ($route) {
    case "cart":
        require_once "cart/cart.php";
        break;
    case "home":
        require_once("home/home.php");
        break;
    case "register":
        $login = $_SESSION['login'] ?? "";
        if (!$login) {
            require_once("login/register.php");
        }
        break;
    case "login":
        $login = $_SESSION['login'] ?? "";
        if (!$login) {
            require_once("login/login.php");
        }
        break;
    case "detail":
        require_once "detail/detail.php";
        break;
    case "product":
        if(isset($data) && $data) {
            require_once "productType/productType.php";
        }
        else{
            require_once "error/error.php";
        }
        break;
    default:
        require_once "error/error.php";
        break;
}