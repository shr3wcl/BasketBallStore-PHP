<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>
                    <div class="card-body">
                        <?php
                        $act = $_GET["act"] ?? "";
                        switch ($act) {
                            case "add":
                                require_once "addproduct.php";
                                break;
                            case "detail":
                                require_once "detailProduct.php";
                                break;
                            case "edit":
                                require_once "edit.php";
                                break;
                            default:
                                require_once "listProduct.php";
                                break;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>