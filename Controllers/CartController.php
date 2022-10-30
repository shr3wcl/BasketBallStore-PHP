<?php
require_once __DIR__ . "/../Models/cart.php";
class CartController
{
    public cart $cartModel;
    public function __construct()
    {
        $this->cartModel = new cart();
    }

    public function getCart(){
        require_once "Views/index.php";
    }

    public function checkAdd($id, $quantity, $size){
        $this->cartModel->addCartNotLogin($id, $quantity, $size);
    }

    public function deleteItemSession($id){
        return $this->cartModel->deleteItemSession($id);
    }
}