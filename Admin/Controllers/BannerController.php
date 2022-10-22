<?php
require_once "./Models/banner.php";
class BannerController{
    public banner $bannerModel;

    public function __construct(){
        $this->bannerModel = new banner();
    }

    public function getAll(): void
    {
        $bannerList = $this->bannerModel->getAll();
        require_once "view/index.php";
    }

    public function handleAdd(): void
    {
        $dirSave = "../public/imgs/Banner/";

        $banner = "";
        $target_file = $dirSave . basename($_FILES["url_banner"]["name"]);

        $status_upload = move_uploaded_file($_FILES["url_banner"]["tmp_name"], $target_file);

        if ($status_upload) {
            $banner =  "imgs/Banner/" . basename($_FILES["url_banner"]["name"]);
        }

        $status = $_POST['status'];
        $this->bannerModel->add($banner, $status);
    }

    public function viewDetail():void
    {
        $id = $_GET['id'];
        $detailStuff = $this->bannerModel->view($id)->fetch_assoc();
        require_once "view/index.php";
    }

    public function handleDelete(): void
    {
        $id = $_GET['id'];
        $this->bannerModel->delete($id);
    }
}