<?php
session_start();
$route = $_GET['page'] ?? "home";

switch ($route){
    case "cart":
        require_once "./Controllers/CartController.php";
        $cartObj = new CartController();
        $act = $_GET['act'] ?? "";
        switch ($act){
            case "clear":
                $cartObj->clearCart();
                break;
            case "pay":
                $cartObj->addCart();
                break;
            default:
                $cartObj->getCart();
                break;
        }
        break;
    case "home":
        require_once ("./Controllers/HomeController.php");
        $controller_obj = new HomeController();
        $controller_obj->list();
        break;
    case "register":
        require_once ("./Controllers/LoginController.php");
        $controller_obj = new LoginController();
        $controller_obj->register();
        break;
    case "login":
        require_once ("./Controllers/LoginController.php");
        $controller_obj = new LoginController();
        $controller_obj->login();
        break;
    case "logout":
        require_once ("./Controllers/LoginController.php");
        $controller_obj = new LoginController();
        $controller_obj->handleLogout();
        break;
    case "detail":
        require_once "./Controllers/ProductDetailController.php";
        $detailObj = new ProductDetailController();
        $detailObj->viewDetail();
        break;
    case "product":
        require_once "./Controllers/EachProductTypeController.php";
        $productTypeObj = new EachProductTypeController();
        $type = $_GET['type'] ?? "";
        $id = $_GET['id'] ?? "";
        if($type){
            $productTypeObj->getCategory();
        }
        else if($id){
            $productTypeObj->getProductType();
        }
        else{
            require_once "Views/index.php";
        }
        break;
    case "profile":
        require_once "./Controllers/ProfileController.php";
        $profileObj = new ProfileController();
        if(isset($_SESSION['user']) && $_SESSION['user']) {
            $profileObj->view();
        }
        else{
            header("location: ?page=login");
        }
        break;
    default:
        require_once "Views/index.php";
        break;
}