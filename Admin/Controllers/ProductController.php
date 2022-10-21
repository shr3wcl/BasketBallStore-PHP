<?php
require_once "./Models/product.php";
class ProductController{
    public product $productModel;

    public function __construct(){
        $this->productModel = new product();
    }

    public function getAllProduct(): void
    {
        $productList = $this->productModel->getAllProduct();
        require_once "view/index.php";
    }

    public function getAllProductType(){
        $productType = $this->productModel->getProductType();
        require_once "view/index.php";
    }

    public function getAllCategory(){
        $category = $this->productModel->getCategory();
        require_once "view/index.php";
    }
}