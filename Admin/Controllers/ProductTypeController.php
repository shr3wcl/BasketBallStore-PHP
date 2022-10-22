<?php
require_once "./Models/productType.php";
class ProductTypeController{
    public productType $productTypeModel;

    public function __construct(){
        $this->productTypeModel = new productType();
    }

    public function handleGetAll(): void
    {
        $productTypeList = $this->productTypeModel->getAll();
        $categoryList = $this->productTypeModel->getCategory();
        require_once "view/index.php";
    }

    public function handleAdd(): void
    {
        $dirSave = "../public/imgs/Logo/";
        $LogoImg = "";
        $target_file = $dirSave . basename($_FILES["logo_pt"]["name"]);

        $status_upload = move_uploaded_file($_FILES["logo_pt"]["tmp_name"], $target_file);

        if ($status_upload) {
            $LogoImg =  "imgs/Logo/" . basename($_FILES["logo_pt"]["name"]);
        }
        $npt = $_POST["name_pt"];
        $des = $_POST["description"];
        $idc = $_POST["id_category"];

        $this->productTypeModel->add($npt, $LogoImg, $des, $idc);
    }

    public function viewDetail():void
    {
        $id = $_GET['id'];
        $detailStuff = $this->productTypeModel->view($id);
        require_once "view/index.php";
    }

    public function handleDelete(): void
    {
        $id = $_GET['id'];
        $this->productTypeModel->delete($id);
    }
}