<?php
require_once "./Models/category.php";
class CategoryController{
    public category $categoryModel;

    public function __construct(){
        $this->categoryModel = new category();
    }

    public function handleGetAll(): void
    {
        $categoryList = $this->categoryModel->getAll();
        if(isset($_GET['id']) && $_GET['act'] === "edit"){
            $id = $_GET['id'];
            $detailStuff = $this->categoryModel->view($id)->fetch_assoc();
        }
        require_once "view/index.php";
    }

    public function handleAdd(): void
    {
        $nc = $_POST['name_category'];
        $this->categoryModel->add($nc);
    }

    public function viewDetail():void
    {
        $id = $_GET['id'];
        $detailStuff = $this->categoryModel->view($id)->fetch_assoc();
        require_once "view/index.php";
    }

    public function handleDelete(): void
    {
        $id = $_GET['id'];
        $this->categoryModel->delete($id);
    }

    public function handleUpdate(): void
    {
        $id = $_GET['id'];
        $nameC = $_POST['name_category'];
        $this->categoryModel->update($id, $nameC);
    }
}