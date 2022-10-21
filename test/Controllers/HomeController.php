<?php
require_once "./Models/home.php";

class DashboardController{
    public home $homeModel;

    public function __construct()
    {
        $this->homeModel = new home();
    }

    public function getData(): void
    {
        require_once "Views/index.php";
    }
}