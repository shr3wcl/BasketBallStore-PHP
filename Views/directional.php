<?php
$route = $_GET["page"] ?? "home";

switch ($route) {
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
}