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
        if(isset($_GET['id']) && $_GET['act'] === "edit"){
            $id = $_GET['id'];
            $detailStuff = $this->productModel->view($id);
        }
        require_once "view/index.php";
    }

    public function handleAdd(): void
    {

        $mi = $this->formatImage("main_image");
        $i1 = $this->formatImage("image1");
        $i2 = $this->formatImage("image2");
        $i3 = $this->formatImage("image3");
        $i4 = $this->formatImage("image4");
        $s = $_POST['size'];

        $tp = $_POST["title_product"];
        $np = $_POST["name_product"];
        $p = $_POST["price"];
        $q = $_POST["quantity"];
        $idc = $_POST["id_category"];
        $idPt = $_POST["id_product_type"];
        $idp = $_POST["id_promotion"];
        $des = $_POST["description"] ?? "";

        $this->productModel->addNewProduct($tp, $np, $p, $q, $idc, $idPt, $mi, $i1, $i2, $i3, $i4, $s, $idp, $des);
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

    public function handleUpdate(): void
    {
        $id = $_GET["id"];
        $mi = $_FILES['main_image']['name'] ? $this->formatImage("main_image") : $_POST['old_main_image'];

        $i1 = $_FILES['image1']['name'] ? $this->formatImage("image1") : $_POST['old_image1'];
        $i2 = $_FILES['image2']['name'] ? $this->formatImage("image2") : $_POST['old_image2'];
        $i3 = $_FILES['image3']['name'] ? $this->formatImage("image3") : $_POST['old_image3'];
        $i4 = $_FILES['image4']['name'] ? $this->formatImage("image4") : $_POST['old_image4'];
        $s = $_POST['size'];
        $tp = $_POST["title_product"];
        $np = $_POST["name_product"];
        $p = $_POST["price"];
        $q = $_POST["quantity"];
        $idc = $_POST["id_category"];
        $idPt = $_POST["id_product_type"];
        $idp = $_POST["id_promotion"];
        $des = $_POST["description"] ?? "";
        $this->productModel->update($id, $mi, $i1, $i2, $i3,$i4, $s,$tp,$np,$p,$q,$idc,$idPt,$idp,$des);
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