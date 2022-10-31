<?php

require_once __DIR__ . "/../Controllers/ProfileController.php";

$profileObj = new ProfileController();
session_start();
$fn = $_POST['firstname'] ?? $_SESSION['user']['firstname'];
$ln = $_POST['lastname'] ?? $_SESSION['user']['lastname'];
$g = $_POST['gender'] ?? $_SESSION['user']['gender'];
$e = $_POST['email'] ?? $_SESSION['user']['email'];
$p = $_POST['phone'] ?? $_SESSION['user']['phone'];
$address = $_POST['address'] ?? $_SESSION['user']['address'];

try {
    echo json_encode($profileObj->handleChangeInfo($fn, $ln, $g, $e, $p, $address), JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}