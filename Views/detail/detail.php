<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a class="text-dark" href="#">Basketball shoes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Product</li>
    </ol>
</nav>
<div class="d-flex justify-content-between">
    <h4 class="d-flex"><?= $dataDetail['title_product'] ?></h4>
    <p class="text-muted"><?= $dataDetail['id_product_type'] ?></p>
</div>
<div class="d-flex">
    <div class="d-flex">
        <div class="d-flex flex-column">
            <img style="max-width: 150px; margin: 4px; border: 1px solid #dddddd; cursor: pointer"
                 src="public/<?= $dataDetail['image1'] ?>" alt="">
            <img style="max-width: 150px; margin: 4px; border: 1px solid #dddddd; cursor: pointer"
                 src="public/<?= $dataDetail['image2'] ?>" alt="">
            <img style="max-width: 150px; margin: 4px; border: 1px solid #dddddd; cursor: pointer"
                 src="public/<?= $dataDetail['image3'] ?>" alt="">
            <img style="max-width: 150px; margin: 4px; border: 1px solid #dddddd; cursor: pointer"
                 src="public/<?= $dataDetail['image4'] ?>" alt="">
        </div>
        <div>
            <img class="" style=" margin: 4px; border: 1px solid #dddddd; width: 50vw"
                 src="public/<?= $dataDetail['image1'] ?>" alt="">

        </div>
    </div>
    <div style="margin-left: 20px">
        <hr style="margin-top: 4px">
        <h3><?= $dataDetail['name_product'] ?></h3>
        <p>
            <strong class="line-through"><?= number_format($dataDetail['price']) ?></strong> <strong>₫</strong>
            <span style="margin: 0 10px" class="label label-danger f12 border-0"><span class="fa-solid fa-heart"
                                                                                       aria-hidden="true"></span> Giảm 13%  </span>
            Remaining: <strong><?= number_format($dataDetail['price']) ?></strong> <strong>₫</strong>
        </p>
        <hr>
        <h4>Size:</h4>
        <!--        -->
        <ul style="display: flex; list-style: none; flex-wrap: wrap;" class="p-0">
            <?php $arr = explode("/", $dataDetail['size']);
            foreach ($arr as $each) {
                ?>
                <li class="text-center"
                    style="background-color: #FFFFFF; border: 1px solid #dddddd; padding: 4px 8px; margin: 4px">
                    <a href="#" style=""><strong><?= $each ?></strong>
                        <?php if ($dataDetail['id_category'] === "1"){ ?>
                            <p class="text-muted m-0 fs-7"><strong><?= ((double) $each) - 33.5 ?></strong> US</p></a>
                        <?php } ?>
                </li>
            <?php } ?>
        </ul>

        <div id="tab" class="d-flex w-100" data-toggle="buttons">
            <a href="#buy2" id="type_buy2" class="btn btn-primary" style="width: 100%;" data-toggle="tab">
                <div><strong class="f13 text-white">GIAO HÀNG COD <span
                                class="glyphicon glyphicon-ok-sign ok-sign-cod  hide "
                                aria-hidden="true"></span></strong></div>
                <div class="fs-7 fw-semibold text-white">
                    Nội thành Hà Nội
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
                           class="form-control input-number text-center" value="1" min="1"
                           max="10">
                    <span class="input-group-append" style="margin: 4px 0">
                                <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus"
                                        data-field="quant[1]">
                                    <span class="fa fa-plus"></span>
                                </button>
                            </span>
                </div>
            </div>
            <button type="submit" name="submitbuy2" id="submitbuy2" value="submitbuy2"
                    class="btn btn-primary d-inline-block" style="position: relative;top: -2px;">
                <i class="fa fa-shopping-cart white f12" aria-hidden="true"></i>
                <strong>
                    <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true">
                    </span> Add
                </strong>
            </button>

        </div>
        <!--        -->
    </div>
</div>