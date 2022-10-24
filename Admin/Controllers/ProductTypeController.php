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
        if(isset($_GET['id']) && $_GET['act'] === "edit"){
            $id = $_GET['id'];
            $detailStuff = $this->productTypeModel->view($id);
        }
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

    public function handleUpdate(): void
    {
        $id = $_GET['id'];
        $namePT = $_POST['name_pt'];
        $logo = $this->formatImage("logo_pt");
        $des = $_POST['description'];
        $idC = $_POST['id_category'];
        $this->productTypeModel->update($id, $namePT, $logo, $des, $idC);
    }

    public function formatImage($nameInput): string
    {
        $dirSave = "../public/imgs/product/";

        $image = "";
        $target_file = $dirSave . basename($_FILES[(string) $nameInput]["name"]);

        $status_upload = move_uploaded_file($_FILES[(string) $nameInput]["tmp_name"], $target_file);

        if ($status_upload) {
            $image =  "imgs/product/" . basename($_FILES[(string) $nameInput]["name"]);
        }
        return $image;
    }
}