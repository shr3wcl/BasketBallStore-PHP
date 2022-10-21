<!-- Page Wrapper -->
<div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                    For more information about DataTables, please visit the <a target="_blank"
                                                                               href="https://datatables.net">official
                        DataTables documentation</a>.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                    </div>

                    <div class="card-body">
                        <a href="?mod=product&act=add" type="button" class="btn btn-primary">Thêm mới</a>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Logo</th>
                                    <th>#</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Logo</th>
                                    <th>#</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php foreach ($productType as $each) { ?>
                                    <tr>
                                        <td><?= $each["id_product_type"] ?></td>
                                        <td><?= $each["name_pt"] ?></td>
                                        <td><?= $each["description"]?></td>
                                        <td class="text-center"><img style="max-width: 50px" src="../public/<?= $each["logo_pt"] ?>" alt=""></td>
                                        <td>
                                            <a href="?mod=nguoidung&act=detail&id=<?= $each['id_product_type'] ?>" type="button" class="btn btn-success">Xem</a>
                                            <a href="?mod=nguoidung&act=edit&id=<?= $each['id_product_type'] ?>" type="button" class="btn btn-warning">Sửa</a>
                                            <a href="?mod=nguoidung&act=delete&id=<?= $each['id_product_type'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>