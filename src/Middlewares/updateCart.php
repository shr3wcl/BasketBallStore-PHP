<?php

require_once __DIR__ . '/../Controllers/CartController.php';
$cartObj = new CartController();

$size = $_POST['size'] ?? "";
$id = $_POST['id'] ?? "";
$type = $_POST['type'] ?? "";

echo $cartObj->updateCart($id, $type, $size);
