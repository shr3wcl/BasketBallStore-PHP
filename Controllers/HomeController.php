<?php
require_once ("Models/home.php");
class HomeController{
    var $home_model;
    public function __construct(){
        $this->home_model = new home();
    }

    function list(){
        $data_banner = $this->home_model->getBanner(0,3);

        require_once ("Views/index.php");
    }
}