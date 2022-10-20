<?php
require_once "./Models/crud.php";

class CRUDController{
    public crud $crudModel;

    public function __construct()
    {
        $this->crudModel = new crud();
    }

    public function viewAllProduct(): void
    {
        $allProducts = $this->crudModel->getAllProduct();
        require_once "Views/index.php";
    }
}