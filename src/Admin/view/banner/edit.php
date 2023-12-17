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
    <form action="?mod=banner&act=update&id=<?= $_GET['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" placeholder="" disabled value="<?= $detailStuff['id_banner'] ?>">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select id="" name="status" class="form-control">
                <option value="1" <?= $detailStuff['status'] === "1" ? "selected" : "" ?>>Active</option>
                <option value="0" <?= $detailStuff['status'] === "0" ? "selected" : "" ?>>No Active</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Banner</label>
            <img  src="../public/<?= $detailStuff['url_banner']?>" class="form-control-file" alt="">
            <input type="file" class="form-control" id="" placeholder="" name="url_banner">
        </div>
        <div class="form-group">
            <label for="">Date added</label>
            <input type="text" class="form-control" id="" placeholder="" disabled value="<?= $detailStuff['timestamp'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>