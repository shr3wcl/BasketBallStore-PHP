<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=promotion&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên khuyến mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="name_promotion">
        </div>
        <div class="form-group">
            <label for="">Loại khuyến mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="type_promotion">
        </div>
        <div class="form-group">
            <label for="">Giá trị Khuyến mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="value">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>