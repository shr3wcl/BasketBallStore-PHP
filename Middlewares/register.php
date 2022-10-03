<?php
require_once __DIR__ . '/../Controllers/LoginController.php';
$LoginController = new LoginController();

$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$g = $_POST['gender'] ?? "";
$us = $_POST['user'];
$pw = $_POST['pass'];
$tpw = $_POST['repass'];
$e = $_POST['email'];
$p = $_POST['phone'];
try {
    echo json_encode($LoginController->handleRegister($fn, $ln, $g, $us, $pw, $tpw, $e, $p), JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}