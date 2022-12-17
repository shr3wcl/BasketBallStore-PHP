<?php
require_once "./Models/bill.php";

class BillController{
    public bill $billModel;

    public function __construct()
    {
        $this->billModel = new bill();
    }

    public function getAll($id): void
    {
        $billList = $this->billModel->getAll($id);
        require_once "Views/index.php";
    }

    public function handleDelete(): void
    {
        $id = $_GET['id'];
        $this->billModel->delete($id);
    }
}