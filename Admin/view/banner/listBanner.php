<a href="?mod=banner&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<hr>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Status</th>
            <th>Timestamp</th>
            <th>#</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Status</th>
            <th>Timestamp</th>
            <th>#</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($bannerList as $each) { ?>
            <tr>
                <td><?= $each["id_banner"] ?></td>
                <td class="text-center"><img style="max-width: 200px" src="../public/<?= $each["url_banner"] ?>" alt=""></td>
                <td><?= $each["status"]?></td>
                <td><?= $each["timestamp"]?></td>
                <td>
                    <a href="?mod=banner&act=detail&id=<?= $each['id_banner'] ?>" type="button" class="btn btn-success">Xem</a>
                    <a href="?mod=banner&act=edit&id=<?= $each['id_banner'] ?>" type="button" class="btn btn-warning">Sửa</a>
                    <a href="?mod=banner&act=delete&id=<?= $each['id_banner'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>