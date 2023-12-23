<a href="?mod=productType&act=add" type="button" class="btn btn-primary">Thêm mới</a>
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
        <?php foreach ($productTypeList as $each) { ?>
            <tr>
                <td><?= $each["id_product_type"] ?></td>
                <td><?= $each["name_pt"] ?></td>
                <td><?= $each["description"]?></td>
                <td class="text-center"><img style="max-width: 50px" src="../public/<?= $each["logo_pt"] ?>" alt=""></td>
                <td>
                    <a href="?mod=productType&act=detail&id=<?= $each['id_product_type'] ?>" type="button" class="btn btn-success">Xem</a>
                    <a href="?mod=productType&act=edit&id=<?= $each['id_product_type'] ?>" type="button" class="btn btn-warning">Sửa</a>
                    <a href="?mod=productType&act=delete&id=<?= $each['id_product_type'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>