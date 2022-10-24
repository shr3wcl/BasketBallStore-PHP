<?php
require_once __DIR__ . "/../Models/detailProduct.php";
class ProductDetailController
{
    public detailProduct $detailProductModel;
    public function __construct()
    {
        $this->detailProductModel = new detailProduct();
    }

    public function viewDetail(): void
    {
        $id = $_GET['id'];
        $dataDetail = $this->detailProductModel->getData($id);
        require_once("Views/index.php");
    }
}