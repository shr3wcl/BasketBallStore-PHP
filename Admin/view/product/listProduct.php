<a href="?mod=product&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<hr>
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>#</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>#</th>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($productList as $each) { ?>
        <tr>
            <td><?= $each["id_product"] ?></td>
            <td style="max-width: 300px"><?= $each["name_product"] ?></td>
            <td><?= number_format($each["price"]) . " VND" ?></td>
            <td><?= $each["quantity"] ?></td>
            <td><img style="max-width: 100px" src="../public/<?= $each["main_image"] ?>" alt=""></td>
            <td>
                <a href="?mod=product&act=detail&id=<?= $each['id_product'] ?>" type="button" class="btn btn-success">Xem</a>
                <a href="?mod=product&act=edit&id=<?= $each['id_product'] ?>" type="button" class="btn btn-warning">Sửa</a>
                <a href="?mod=product&act=delete&id=<?= $each['id_product'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>

                <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>

                <?php }?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>