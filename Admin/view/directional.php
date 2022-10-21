<?php
$route = $_GET["mod"] ?? "dashboard";

switch ($route) {
    case "dashboard":
        require_once("dashboard/dashboard.php");
        break;
    case "account":
        require_once ("account/account.php");
        break;
    case "product":
        require_once "product/product.php";
        break;
    case "productType":
        require_once "product/productype.php";
        break;
    case "category":
        require_once "product/category.php";
        break;
}