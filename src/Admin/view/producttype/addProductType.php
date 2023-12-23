<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=productType&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name Product</label>
            <input type="text" class="form-control" id="" placeholder="" name="name_pt">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" id="" placeholder="" name="logo_pt">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" id="" placeholder="" name="description">
        </div>
        <div class="form-group">
            <label for="cars">Category: </label>
            <select id="" name="id_category" class="form-control">
                <?php foreach ($categoryList as $each) { ?>
                    <option value="<?= $each['id_category'] ?>"><?= $each['name_category'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</table>