<?php
require_once "./Models/product.php";
class ProductController{
    public product $productModel;

    public function __construct(){
        $this->productModel = new product();
    }

    public function getAll(): void
    {
        $productList = $this->productModel->getAllProduct();
        $categoryList = $this->productModel->getCategory();
        $productTypeList = $this->productModel->getProductType();
        $promotionList = $this->productModel->getPromotion();
        require_once "view/index.php";
    }

    public function handleAdd(): void
    {
        $dirSave = "../public/imgs/product/";

        $mi = "";
        $target_file = $dirSave . basename($_FILES["main_image"]["name"]);

        $status_upload = move_uploaded_file($_FILES["main_image"]["tmp_name"], $target_file);

        if ($status_upload) {
            $mi =  "imgs/product/" . basename($_FILES["main_image"]["name"]);
        }

        $i1 = "";
        $target_file = $dirSave . basename($_FILES["image1"]["name"]);
        $status_upload = move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file);
        if ($status_upload) {
            $i1 =  "/imgs/product/" . basename($_FILES["image1"]["name"]);
        }

        $i2 = "";
        $target_file = $dirSave . basename($_FILES["image2"]["name"]);
        $status_upload = move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file);
        if ($status_upload) {
            $i2 =  "/imgs/product/" . basename($_FILES["image2"]["name"]);
        }

        $i3 = "";
        $target_file = $dirSave . basename($_FILES["image3"]["name"]);
        $status_upload = move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file);
        if ($status_upload) {
            $i3 =  "/imgs/product/" . basename($_FILES["image3"]["name"]);
        }

        $i4 = "";
        $target_file = $dirSave . basename($_FILES["image4"]["name"]);
        $status_upload = move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file);
        if ($status_upload) {
            $i4 =  "/imgs/product/" . basename($_FILES["image4"]["name"]);
        }

        $tp = $_POST["title_product"];
        $np = $_POST["name_product"];
        $p = $_POST["price"];
        $q = $_POST["quantity"];
        $idc = $_POST["id_category"];
        $idpt = $_POST["id_product_type"];
        $idp = $_POST["id_promotion"];
        $des = $_POST["description"] ?? "";

        $this->productModel->addNewProduct($tp, $np, $p, $q, $idc, $idpt, $mi, $i1, $i2, $i3, $i4, $idp, $des);
    }

    public function handleViewDetail():void
    {
        $id = $_GET['id'];
        $detailProduct = $this->productModel->view($id);
        require_once "view/index.php";
    }

    public function handleDelete(): void
    {
        $id = $_GET["id"];
        $this->productModel->deleteProduct($id);
    }
}