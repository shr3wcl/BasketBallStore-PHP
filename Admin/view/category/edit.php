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
    <form action="?mod=category&act=update&id=<?= $_GET['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" placeholder="" disabled value="<?= $detailStuff['id_category'] ?>">
        </div>
        <div class="form-group">
            <label for="">Name category</label>
            <input type="text" class="form-control" id="" placeholder="" name="name_category" value="<?= $detailStuff['name_category'] ?>">
        </div>


        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>