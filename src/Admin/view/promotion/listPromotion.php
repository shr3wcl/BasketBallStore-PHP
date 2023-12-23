<a href="?mod=promotion&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<hr>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name Promotion</th>
            <th>Type</th>
            <th>Value</th>
            <th>Start day</th>
            <th>#</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Name Promotion</th>
            <th>Type</th>
            <th>Value</th>
            <th>Start day</th>
            <th>#</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($promotionList as $each) { ?>
            <tr>
                <td><?= $each["id_promotion"] ?></td>
                <td><?= $each["name_promotion"] ?></td>
                <td><?= $each["type_promotion"] ?></td>
                <td><?= $each["value"] ?></td>
                <td><?= $each["start_day"] ?></td>
                <td>
                    <a href="?mod=promotion&act=detail&id=<?= $each['id_promotion'] ?>" type="button" class="btn btn-success">Xem</a>
                    <a href="?mod=promotion&act=edit&id=<?= $each['id_promotion'] ?>" type="button" class="btn btn-warning">Sửa</a>
                    <a href="?mod=promotion&act=delete&id=<?= $each['id_promotion'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>

                    <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>

                    <?php }?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>