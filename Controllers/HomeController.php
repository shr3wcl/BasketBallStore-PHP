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
        $data_banner = $this->home_model->getBanner(1, 3);
        $data_typical_products = $this->home_model->getTypicalProducts(0, 3);
        $data_newest_product = $this->home_model->getLatestProducts(0, 8);
        $data_outstanding_product = $this->home_model->getOutstandingProduct(0, 15, 1);
        $data_out_standing_pants = $this->home_model->getOutstandingProduct(0, 7, 2);
        require_once("Views/index.php");
    }
}