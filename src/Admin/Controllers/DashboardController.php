<?php
require_once "./Models/dashboard.php";

class DashboardController{
    public dashboard $dashboardModel;

    public function __construct()
    {
        $this->dashboardModel = new dashboard();
    }

    public function getData(): void
    {
        require_once "view/index.php";
    }
}