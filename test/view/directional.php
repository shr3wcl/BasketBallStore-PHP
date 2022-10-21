<?php
$route = $_GET["mod"] ?? "dashboard";

switch ($route) {
    case "dashboard":
        require_once("dashboard/dashboard.php");
        break;
    case "account":
        require_once ("account/account.php");
        break;
}