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

    public function addCart(){
        $this->cartModel->addCart();
    }

    public function clearCart(){
        $this->cartModel->clearCart();
    }

    public function checkAdd($id, $quantity, $size, $restQuantity){
        $this->cartModel->addCartNotLogin($id, $quantity, $size, $restQuantity);
    }

    public function deleteItemSession($id){
        $this->cartModel->deleteItemSession($id);
    }

    public function updateCart($id, $type, $size){
        return $this->cartModel->updateCart($id, $type, $size);
    }
}