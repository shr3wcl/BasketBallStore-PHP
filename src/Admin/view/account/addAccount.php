<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=account&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Họ</label>
            <input type="text" class="form-control" id="" placeholder="" name="first_name">
        </div>
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" class="form-control" id="" placeholder="" name="last_name">
        </div>
        <div class="form-group">
            <label for="">Giới tính</label>
            <select id="" name="gender" class="form-control">
                <option value="1">Nam</option>
                <option value="0">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Số Điện Thoại</label>
            <input type="text" class="form-control" id="" placeholder="" name="phone">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" id="" placeholder="" name="address">
        </div>
        <div class="form-group">
            <label for="">Tên Tài Khoản</label>
            <input type="text" class="form-control" id="" placeholder="" name="username">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="Email" class="form-control" id="" placeholder="" name="email">
        </div>
        <div class="form-group">
            <label for="">Mật Khẩu</label>
            <input type="Password" class="form-control" id="" placeholder="" name="password">
        </div>
        <div class="form-group">
            <label for="">Phân quyền</label>
            <select id="" name="id_auth" class="form-control">
                <option value="3">User</option>
                <option value="2">Employee</option>
                <option value="1">Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>