<a href="?mod=account&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<hr>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Auth</th>
            <th>#</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Auth</th>
            <th>#</th>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($accountList as $each) { ?>
            <tr>
                <td><?= $each["id_user"] ?></td>
                <td><?= $each["username"] ?></td>
                <td><?= $each["last_name"] . " " . $each["first_name"] ?></td>
                <td><?= $each["email"] ?></td>
                <td><?= $each["phone"] ?></td>
                <td><?= $each["gender"]==="1" ? "Nam" : "Nữ" ?></td>
                <td><?php if($each['id_auth']==="1"){echo "Admin";}elseif ($each['id_auth']==="2"){echo "Employee";}else{echo "User";} ?></td>
                <td>
                    <a href="?mod=account&act=detail&id=<?= $each['id_user'] ?>" type="button" class="btn btn-success">Xem</a>
                    <a href="?mod=account&act=edit&id=<?= $each['id_user'] ?>" type="button" class="btn btn-warning">Sửa</a>
                    <a href="?mod=account&act=delete&id=<?= $each['id_user'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>

                    <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>

                    <?php }?>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>