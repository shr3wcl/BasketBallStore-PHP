<a href="?mod=category&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<hr>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>#</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>#</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($categoryList as $each) { ?>
            <tr>
                <td><?= $each["id_category"] ?></td>
                <td><?= $each["name_category"] ?></td>
                <td>
                    <a href="?mod=category&act=detail&id=<?= $each['id_category'] ?>" type="button" class="btn btn-success">Xem</a>
                    <a href="?mod=category&act=edit&id=<?= $each['id_category'] ?>" type="button" class="btn btn-warning">Sửa</a>
                    <a href="?mod=category&act=delete&id=<?= $each['id_category'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>

                    <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>

                    <?php }?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>