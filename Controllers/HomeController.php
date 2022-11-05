<?php
require_once __DIR__ . "/../Models/home.php";
class HomeController
{
    public home $home_model;
    public function __construct()
    {
        $this->home_model = new home();
    }

    public function list(): void
    {
        $data_banner = $this->home_model->getBanner();
        $data_typical_products = $this->home_model->getTypicalProducts(0, 3);
        $data_newest_shoes = $this->home_model->getLatestProducts(0, 8,1);
        $data_newest_pants = $this->home_model->getLastProductType(0, 8, 5);
        $data_newest_accessories = $this->home_model->getOutstandingProduct(0, 8, 3);
        $data_newest_shirts = $this->home_model->getLastProductType(0, 8, 6);
        $data_outstanding_product = $this->home_model->getOutstandingProduct(0, 15, 1);
        $data_out_standing_pants = $this->home_model->getOutstandingProduct(0, 7, 2);
        $listProductTypeShoes = $this->home_model->getProductTypes(1);
        $listProductTypeAccessories = $this->home_model->getProductTypes(3);

        require_once("Views/index.php");
    }
}