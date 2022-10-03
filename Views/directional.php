<?php
$route = $_GET["page"] ?? "home";

switch ($route) {
    case "home":
        require_once("home/home.php");
        break;
    case "register":
        if (isset($_SESSION['login']) && $_SESSION['login'] === true) {

        } else {
            require_once("login/register.php");
        }
        break;
    case "login":
        if (isset($_SESSION['login']) && $_SESSION['login'] === true) {

        } else {
            require_once("login/login.php");
        }
        break;
}