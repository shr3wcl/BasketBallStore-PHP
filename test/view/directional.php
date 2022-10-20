<?php
$route = $_GET["mod"] ?? "dashboard";

switch ($route) {
    case "dashboard":
        require_once("dashboard/dashboard.php");
        break;
}