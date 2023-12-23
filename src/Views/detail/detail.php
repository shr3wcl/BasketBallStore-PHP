<?php $_SESSION['product'] = $dataDetail ?>
<input type="text" hidden id="size-selected" />
<input type="text" hidden id="id-product" value="<?= $_GET['id'] ?>">
<input type="text" hidden id="type-product" value="<?= $dataDetail['size'] ?>">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a class="text-dark"
                href="?page=product&type=<?= $category['id_category'] ?>"><?= $category['name_category'] ?></a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Product</li>
    </ol>
</nav>
<div class="d-flex justify-content-between">
    <h4 class="d-flex"><?= $dataDetail['title_product'] ?></h4>
    <p class="text-muted"><?= $productType ?></p>
</div>
<div class="d-flex">
    <div class="d-flex">
        <div class="d-flex flex-column">
            <img style="max-width: 150px; margin: 4px; border: 1px solid #dddddd; cursor: pointer"
                src="public/<?= $dataDetail['image1'] ?>" onclick="changeImage(this.getAttribute('src'))" alt="">
            <img style="max-width: 150px; margin: 4px; border: 1px solid #dddddd; cursor: pointer"
                src="public/<?= $dataDetail['image2'] ?>" onclick="changeImage(this.getAttribute('src'))" alt="">
            <img style="max-width: 150px; margin: 4px; border: 1px solid #dddddd; cursor: pointer"
                src="public/<?= $dataDetail['image3'] ?>" onclick="changeImage(this.getAttribute('src'))" alt="">
            <img style="max-width: 150px; margin: 4px; border: 1px solid #dddddd; cursor: pointer"
                src="public/<?= $dataDetail['image4'] ?>" onclick="changeImage(this.getAttribute('src'))" alt="">
        </div>
        <div>
            <img id="image-detail" class="" style=" margin: 4px; border: 1px solid #dddddd; width: 50vw"
                src="public/<?= $dataDetail['image1'] ?>" alt="">
        </div>
    </div>
    <div style="margin-left: 20px">
        <hr style="margin-top: 4px">
        <h3><?= $dataDetail['name_product'] ?></h3>
        <p>
            <strong class="line-through"><?= number_format($dataDetail['price']) ?></strong> <strong>₫</strong>
            <span style="margin: 0 10px" class="label label-danger f12 border-0"><span class="fa-solid fa-heart"
                    aria-hidden="true"></span> Giảm 13% </span>
            Remaining: <strong><?= number_format($dataDetail['price']) ?></strong> <strong>₫</strong>
        </p>
        <hr>
        <!--        -->
        <?php $arr = explode("/", $dataDetail['size']); ?>
        <?= $arr[0] ? "<h4>Size:</h4>" : "" ?>
        <ul style="display: flex; list-style: none; flex-wrap: wrap;" class="p-0">
            <?php
            if ($arr[0]) {
            ?>

            <?php foreach ($arr as $each) {
                ?>
            <li class="text-center size-button" onclick="selectSize(this)"
                style="width: 60px;background-color: #FFFFFF; border: 1px solid #dddddd; padding: 4px 8px; margin: 4px; cursor: pointer; height: 60px">
                <a style="font-size: 14px; text-align: center"><strong><?= $each ?></strong>
                    <?php if ($dataDetail['id_category'] === "1") { ?>
                    <p class="text-muted m-0 fs-7"><strong><?= ((float) $each) - 33.5 ?></strong> <span
                            style="font-size: 8px;">US</span></p>
                    <?php } ?>
                </a>
            </li>
            <?php }
            } ?>
        </ul>


        <div id="tab" class="d-flex w-100" data-toggle="buttons">
            <a href="#buy2" id="type_buy2" class="btn btn-primary" style="width: 100%;" data-toggle="tab">
                <div><strong class="f13 text-white">GIAO HÀNG COD <span
                            class="glyphicon glyphicon-ok-sign ok-sign-cod  hide " aria-hidden="true"></span></strong>
                </div>
                <div class="fs-7 fw-semibold text-white">
                    Nội thành Đà Nẵng
                </div>
            </a>
            <a href="#buy1" id="type_buy1" class="btn btn-danger" style="width: 100%;margin-left: 5px;"
                data-toggle="tab ">
                <div>
                    <strong class="f13 text-white">CHUYỂN KHOẢN</strong>
                    <span class="glyphicon glyphicon-ok-sign ok-sign-ck  " aria-hidden="true"></span>
                </div>
                <div class="fs-7 fw-semibold text-white">
                    Ship toàn quốc
                </div>
            </a>
        </div>
        <hr>
        <div>
            <p>Số sản phẩm còn lại: <span id="quantity-product"><?= $dataDetail['quantity'] ?></span></p>
        </div>
        <div class="container">
            <div class="d-inline-block mx-auto">

                <div class="input-group">
                    <button type="button" class="btn btn-outline-secondary btn-number" style="margin: 4px 0"
                        disabled="disabled">
                        Quantity:
                    </button>
                    <span class="input-group-prepend" style="margin: 4px 0">
                        <button type="button" class="btn btn-outline-secondary btn-number" disabled="disabled"
                            data-type="minus" data-field="quant[1]">
                            <span class="fa fa-minus"></span>
                        </button>
                    </span>
                    <input type="text" style="margin: 4px 0;width: 40px; max-width: 40px;" name="quant[1]"
                        class="form-control input-number text-center" value="1" min="1" max=<?= $dataDetail['quantity']?> id="quantity-cart">
                    <span class="input-group-append" style="margin: 4px 0">
                        <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus"
                            data-field="quant[1]" onclick="console.log(document.querySelector('#quantity-cart').value)">
                            <span class="fa fa-plus"></span>
                        </button>
                    </span>
                </div>
            </div>
            <button type="submit" name="submit-buy" id="submit-buy" value="submit-buy"
                class="btn btn-primary d-inline-block" style="position: relative;top: -2px;">
                <i class="fa fa-shopping-cart white f12" aria-hidden="true"></i>
                <strong>
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
                    </span> Add
                </strong>
            </button>
            <p class="text-danger fw-semibold" id="alert-cart"></p>
        </div>

        <!--        -->
    </div>
</div>
<hr>
<div class="text-center">
    <h4 class="text-center"><?= $dataDetail['name_product'] ?></h4>
    <p class="text-center" style="color: #999999"><?= $productType ?></p>
    <div style="margin-left: 8rem; text-align: left !important;">
        <p><strong>Description: </strong><?= $dataDetail['description'] ?></p>
        <p><strong>Reviews: </strong><?= $dataDetail['n_reviews'] ?></p>
        <p><strong>Stars: </strong><?= $dataDetail['n_stars'] ?></p>
        <p><strong>Some pictures: </strong></p>
    </div>
    <ul style="list-style: none; display: flex; justify-content: center; flex-wrap: wrap; padding: 0">
        <li>
            <img class="mt-2 mb-2" style="width: 90%" src="public/<?= $dataDetail['image1'] ?>" alt="">
            <p class="text-center">Image 1</p>
        </li>
        <li>
            <img class="mt-2 mb-2" style="width: 90%" src="public/<?= $dataDetail['image2'] ?>" alt="">
            <p class="text-center">Image 2</p>
        </li>
        <li>
            <img class="mt-2 mb-2" style="width: 90%" src="public/<?= $dataDetail['image3'] ?>" alt="">
            <p class="text-center">Image 3</p>

        </li>
        <li>
            <img class="mt-2 mb-2" style="width: 90%" src="public/<?= $dataDetail['image4'] ?>" alt="">
            <p class="text-center">Image 4</p>
        </li>
    </ul>
</div>

<hr>

<div class="d-flex justify-content-center flex-wrap">
    <h4 class="text-center">Sản phẩm liên quan</h4>
    <div class="mt-4">
        <div class="bg-white mt-2">
            <ul class="gridpro d-flex flex-wrap">
                <?php foreach ($relatedProducts as $each) { ?>
                <li class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-gr grid li-normal">
                    <a class="product_img_link pro_img_home gray-darker nodeco " title=" Zoom Freak 3 Low Battery "
                        href="?page=detail&id=<?= $each['id_product'] ?>">
                        <img src="public/<?php echo $each['main_image'] ?>" alt=" Zoom Freak 3 Low Battery "
                            class="img-responsive front">
                        <span class="gitf hide"><img src=''></span>
                        <div class="b_dis_home">
                            <span class="discounts"><strong><span class="fa-solid fa-heart" aria-hidden="true"></span>
                                    <?php echo $each['name_sale']; ?> </strong></span>
                        </div>
                        <span class="group hide">Sản phẩm nổi bật</span>
                        <div class="caption padpro">
                            <h4 class="f13 nomargin"><strong><?php echo $each['title_product'] ?></strong></h4>
                            <div class="gray-light f11 line-height-normal mb-0"><?php echo $each['p_type_name']; ?>
                            </div>
                            <div class="content_price">
                                <span class="price"><?php echo number_format($each['d_price']); ?> ₫</span>
                                &nbsp;&nbsp;&nbsp;&nbsp;<span
                                    class="gray-light line-through f13"><?php echo number_format($each['price']) ?>
                                    ₫</span>
                            </div>
                        </div>
                    </a>
                </li>

                <?php } ?>
            </ul>
        </div>
    </div>
</div>