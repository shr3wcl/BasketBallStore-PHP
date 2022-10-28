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
        $relatedProducts = $this->detailProductModel->getRelated($dataDetail['id_category']);
        $productType = $this->detailProductModel->getPT($dataDetail['id_product_type'])['name_pt'];
        $category = $this->detailProductModel->getCategory($dataDetail['id_category']);
        require_once("Views/index.php");
    }
}