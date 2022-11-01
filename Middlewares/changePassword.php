<?php

require_once __DIR__ . "/../Controllers/ProfileController.php";

$profileObj = new ProfileController();
$oldPw = $_POST['oldPassword'] ?? "";
$newPw = $_POST['newPassword'] ?? "";
$confirmPw = $_POST['confirmPassword'] ?? "";

try {
    echo json_encode($profileObj->handleChangePassword($oldPw, $newPw, $confirmPw), JSON_THROW_ON_ERROR);
} catch (JsonException $e) {
}