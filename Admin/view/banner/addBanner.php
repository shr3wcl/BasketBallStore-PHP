<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=banner&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Status</label>
            <select id="" name="status" class="form-control">
                <option value="1">Active</option>
                <option value="0">No Active</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="file" class="form-control" id="" placeholder="" name="url_banner">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>