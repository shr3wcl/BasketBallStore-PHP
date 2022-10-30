<?php

require_once __DIR__ . '/../Controllers/CartController.php';
$cartObj = new CartController();

$id = $_POST['id'];

if($id){
    $cartObj->deleteItemSession($id);
    echo true;
}else{
    echo false;
}
