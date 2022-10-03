<?php
require_once __DIR__ . '/../Controllers/LoginController.php';
$LoginController = new LoginController();

$username = $_POST['username'];
$password = $_POST['password'];
try {
    echo json_encode($LoginController->handleLogin($username, $password), JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}
