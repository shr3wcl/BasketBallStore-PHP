<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=product&act=update&id=<?= $_GET['id'] ?>" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="" placeholder="" disabled value="<?= $detailStuff['id_product'] ?>">
        </div>
        <div class="form-group">
            <label for="cars">Danh mục: </label>
            <select id="" name="id_category" class="form-control">
                <?php foreach ($categoryList as $each) { ?>
                    <option value="<?= $each['id_category'] ?>"  <?= $each['id_category'] === $detailStuff['id_category'] ? "selected":"" ?>><?= $each['name_category'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="cars">Loại sản phẩm: </label>
            <select id="" name="id_product_type" class="form-control">
                <?php foreach ($productTypeList as $each) { ?>
                    <option value="<?= $each['id_product_type'] ?>" <?= $each['id_product_type'] === $detailStuff['id_product_type'] ? "selected":"" ?>><?= $each['name_pt'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Tiêu đề sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="title_product" value="<?= $detailStuff['title_product'] ?>">
        </div>
        <div class="form-group">
            <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" id="" placeholder="" name="name_product" value="<?= $detailStuff['name_product'] ?>">
        </div>
        <div class="form-group">
            <label for="">Đơn giá</label>
            <input type="text" class="form-control" id="" placeholder="" name="price" value="<?= $detailStuff['price'] ?>">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="text" class="form-control" id="" placeholder="" name="quantity" value="<?= $detailStuff['quantity'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh chính </label>
            <img style="max-width: 100px" src="../public/<?= $detailStuff['main_image'] ?>" alt="">
            <input type="file" class="form-control" id="" placeholder="" name="main_image">
            <input type="text" hidden name="old_main_image" value="<?= $detailStuff['main_image'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 1 </label>
            <img style="max-width: 100px" src="../public/<?= $detailStuff['image1'] ?>" alt="">
            <input type="file" class="form-control" id="" placeholder="" name="image1">
            <input type="text" hidden name="old_image1" value="<?= $detailStuff['image1'] ?>">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh 2</label>
            <img style="max-width: 100px" src="../public/<?= $detailStuff['image2'] ?>" alt="">
            <input type="file" class="form-control" id="" placeholder="" name="image2">
            <input type="text" hidden name="old_image2" value="<?= $detailStuff['image2'] ?>">

        </div>
        <div class="form-group">
            <label for="">Hình ảnh 3</label>
            <img style="max-width: 100px" src="../public/<?= $detailStuff['image3'] ?>" alt="">
            <input type="file" class="form-control" id="" placeholder="" name="image3" ">
            <input type="text" hidden name="old_image3" value="<?= $detailStuff['image3'] ?>">

        </div>
        <div class="form-group">
            <label for="">Hình ảnh 4</label>
            <img style="max-width: 100px" src="../public/<?= $detailStuff['image4'] ?>" alt="">
            <input type="file" class="form-control" id="" placeholder="" name="image4">
            <input type="text" hidden name="old_image4" value="<?= $detailStuff['image4'] ?>">

        </div>
        <div class="form-group">
            <label for="">Size</label>
            <input type="text" class="form-control" id="" placeholder="" name="size" value="<?= $detailStuff['size'] ?>">
        </div>
        <div class="form-group">
            <label for="cars">Mã khuyến mãi </label>
            <select id="" name="id_promotion" class="form-control">
                <?php foreach ($promotionList as $each) { ?>
                    <option value="<?= $each['id_promotion']?>"  <?= $each['id_promotion'] === $detailStuff['id_promotion'] ? "selected" : "" ?>>
                        <?= $each['name_promotion'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <label for="">Mô tả</label>
        <div class="form-group">
            <textarea class="form-control" id="summernote" placeholder="" name="description"><?= $detailStuff['description'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <input type="checkbox" id="" placeholder="" value="1" name="TrangThai"><em>(Check cho phép hiện thị sản phẩm)</em>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
</table>