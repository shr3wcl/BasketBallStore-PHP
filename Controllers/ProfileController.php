<?php
require_once "Models/profile.php";

class ProfileController{
    private profile $profileModel;
    public function __construct(){
        $this->profileModel = new profile();
    }

    public function view(){
        require_once "Views/index.php";
    }
}