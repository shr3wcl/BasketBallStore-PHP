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

    <form action="?mod=bill&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">User: </label>
            <select id="" name="id_user" class="form-control">
                <?php foreach ($userList as $each) { ?>
                    <option value="<?= $each['id_user'] ?>"><?= $each['username'].": (". $each['first_name'] . " " . $each['last_name'].")" ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Name User</label>
            <input type="text" class="form-control" id="" placeholder="" name="name_user">
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="form-control" id="" placeholder="" name="phone">
        </div>

        <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control" id="" placeholder="" name="address">
        </div>
        <div class="form-group">
            <label for="">Payment Method</label>
            <select id="" name="payment_method" class="form-control">
                <option value="1">Credit Cast</option>
                <option value="0">COD</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Total Cost</label>
            <input type="text" class="form-control" id="" placeholder="" name="total_cost">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select id="" name="status" class="form-control">
                <option value="0">Unpaid</option>
                <option value="1">Done</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Note</label>
            <textarea name="note" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>