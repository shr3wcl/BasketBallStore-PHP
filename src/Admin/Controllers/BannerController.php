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
        if(isset($_GET['id']) && $_GET['act'] === "edit"){
            $id = $_GET['id'];
            $detailStuff = $this->bannerModel->view($id)->fetch_assoc();
        }
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

    public function handleUpdate(): void
    {
        $id = $_GET['id'];
        $bannerImage = $this->formatImage("url_banner");
        $this->bannerModel->update($id, $bannerImage);
    }

    public function formatImage($nameInput): string
    {
        $dirSave = "../public/imgs/Banner/";

        $image = "";
        $target_file = $dirSave . basename($_FILES[(string) $nameInput]["name"]);

        $status_upload = move_uploaded_file($_FILES[(string) $nameInput]["tmp_name"], $target_file);

        if ($status_upload) {
            $image =  "imgs/Banner/" . basename($_FILES[(string) $nameInput]["name"]);
        }
        return $image;
    }
}