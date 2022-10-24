<?php
require_once "./Models/bill.php";

class BillController{
    public bill $billModel;

    public function __construct()
    {
        $this->billModel = new bill();
    }

    public function getAll(): void
    {
        $billList = $this->billModel->getAll();
        $userList = $this->billModel->getUser();
        require_once "view/index.php";
    }

    public function handleAdd():void
    {
        $iduser = $_POST['id_user'];
        $nameuser = $_POST['name_user'];
        $p = $_POST['phone'];
        $address = $_POST['address'];
        $pm = $_POST['payment_method'];
        $total = $_POST['total_cost'];
        $status = $_POST['status'];
        $note = $_POST['note'];
        $this->billModel->add($iduser, $nameuser, $p, $address, $pm,$total, $status, $note);
    }

    public function viewDetail():void
    {
        $id = $_GET['id'];
        $detailStuff = $this->billModel->view($id)->fetch_assoc();
        require_once "view/index.php";
    }

    public function handleDelete(): void
    {
        $id = $_GET['id'];
        $this->billModel->delete($id);
    }

    public function handleConfirm(): void
    {
        $id = $_GET['id'];
        $this->billModel->confirm($id);
    }
}