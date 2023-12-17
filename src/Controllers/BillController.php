<?php
require_once __DIR__ . "/../Models/bill.php";

class BillController{
    public Bill $billModel;

    public function __construct()
    {
        $this->billModel = new Bill();
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