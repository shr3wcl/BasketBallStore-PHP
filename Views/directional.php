<?php
$route = $_GET["arg"] ?? "home";

switch ($route){
    case "home":
        require_once("home/home.php");
        break;
    case "register":
        require_once("login/register.php");
        break;
    case "login":
        require_once ("login/login.php");
        break;
}