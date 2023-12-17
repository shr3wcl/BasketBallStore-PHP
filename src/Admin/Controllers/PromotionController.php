<?php
require_once "./Models/promotion.php";
class PromotionController{
    public promotion $promotionModel;

    public function __construct(){
        $this->promotionModel = new promotion();
    }

    public function handleGetAll(): void
    {
        $promotionList = $this->promotionModel->getAll();
        if(isset($_GET['id']) && $_GET['act'] === "edit"){
            $id = $_GET['id'];
            $detailStuff = $this->promotionModel->view($id);
        }
        require_once "view/index.php";
    }

    public function handleAdd(): void
    {
        $np = $_POST["name_promotion"] ?? "";
        $tp = $_POST["type_promotion"] ?? "";
        $v = $_POST["value"] ?? "";
        $this->promotionModel->add($np, $tp, $v);
    }

    public function viewDetail():void
    {
        $id = $_GET['id'];
        $detailStuff = $this->promotionModel->view($id);
        require_once "view/index.php";
    }

    public function handleDelete(): void
    {
        $id = $_GET['id'];
        $this->promotionModel->delete($id);
    }

    public function handleUpdate(): void
    {
        $id = $_GET['id'];
        $name = $_POST['name_promotion'];
        $tP = $_POST['type_promotion'];
        $tS = $_POST['type_sale'];
        $value = $_POST['value'];
        $status = $_POST['status'];
        $this->promotionModel->update($id, $name, $tP, $tS, $value, $status);
    }
}