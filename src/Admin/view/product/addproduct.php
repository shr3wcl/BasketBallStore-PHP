<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=product&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="cars">Danh mục: </label>
            <select id="" name="id_category" class="form-control">
                <?php foreach ($categoryList as $each) { ?>
                    <option value="<?= $each['id_category'] ?>"><?= $each['name_category'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cars">Loại sản phẩm: </label>
            <select id="" name="id_product_type" class="form-control">
                <?php foreach ($productTypeList as $each) { ?>
                    <option value="<?= $each['id_product_type'] ?>"><?= $each['name_pt'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Tiêu đề sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="title_product">
        </div>
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="name_product">
        </div>
        <div class="form-group">
            <label for="">Đơn giá</label>
            <input type="text" class="form-control" id="" placeholder="" name="price">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" class="form-control" id="" placeholder="" name="quantity">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh chính </label>
            <input type="file" class="form-control" id="" placeholder="" name="main_image">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 1 </label>
            <input type="file" class="form-control" id="" placeholder="" name="image1">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 2</label>
            <input type="file" class="form-control" id="" placeholder="" name="image2">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 3</label>
            <input type="file" class="form-control" id="" placeholder="" name="image3">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 4</label>
            <input type="file" class="form-control" id="" placeholder="" name="image4">
        </div>
        <div class="form-group">
            <label for="">Size</label>
            <input type="text" class="form-control" id="" placeholder="" name="size">
        </div>
        <div class="form-group">
            <label for="cars">Mã khuyến mãi </label>
            <select id="" name="id_promotion" class="form-control">
                <?php foreach ($promotionList as $each) { ?>
                    <option value="<?= $each['id_promotion'] ?>"><?= $each['name_promotion'] ?></option>
                <?php } ?>
            </select>
        </div>
        <label for="">Mô tả</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote" placeholder="" name="MoTa"></textarea>
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <input type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị sản phẩm)</em>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
</table>