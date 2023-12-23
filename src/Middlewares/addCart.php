<?php

require_once __DIR__ . '/../Controllers/CartController.php';
$cartObj = new CartController();

$size = $_POST['size'] ?? "";
$quantity = $_POST['quantity'] ?? "";
$id = $_POST['id'] ?? "";
$typeSize = $_POST['typeSize'] ?? "";
$restQuantity = $_POST['restQuantity'] ?? "";

if($typeSize && $size && $quantity){
    $cartObj->checkAdd($id, $quantity, $size, $restQuantity);
    echo true;
}elseif (!$typeSize && $quantity){
    $cartObj->checkAdd($id, $quantity, $size, $restQuantity);
    echo true;
}
else{
    echo false;
}
