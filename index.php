<?php
session_start();
$route = $_GET['page'] ?? "home";

switch ($route){
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
}