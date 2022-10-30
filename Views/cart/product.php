<?php
    $totalProducts = 0;
    foreach ($listProducts as $each){
        $totalProducts += $each['d_price'];
    }
    $total = $totalProducts + 30000;
?>
<div>
    <a class="text-danger fw-semibold " href="?page=cart&act=deleteAll">Xoá giỏ hàng</a>
    <ul class="list-group list-group-light">
        <li class="list-group-item d-flex justify-content-between align-items-center mt-4 mb-4">

            <div class="d-flex align-items-center" style="width: 100% !important;">
                <div class="ms-3 w-100">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="fw-bold m-0">Total product: </p>
                        <p class="fw-bold m-0 float-end"><?= number_format($totalProducts) ?> đ</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="fw-bold ">Ship cost: </p>
                        <p class="fw-bold float-end"><?= number_format(30000) ?> đ</p>
                    </div>
                    <hr class="m-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="fw-bold">Total: </p>
                        <p class="fw-bold text-danger float-end"><?= number_format($total) ?> đ</p>
                    </div>

                </div>
            </div>
        </li>


        <?php foreach ($listProducts as $each) { ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center" style="width: 100% !important;">
                    <a href="?page=detail&id=<?= $each['id_product'] ?>">
                        <img src="public/<?= $each['main_image'] ?>" alt="" style="width: 100px; height: 100px"
                             class="rounded-circle"/>
                    </a>

                    <div class="ms-3">
                        <a href="?page=detail&id=<?= $each['id_product'] ?>">
                            <p class="fw-bold mb-1"><?= $each['title_product'] ?></p>
                        </a>
                        <p class="text-muted mb-0"><strong>Size: </strong><?= $each['size'] ?></p>
                        <!--                        <p class="text-muted mb-0"><strong>Quantity: </strong>-->
                        <? //= $each['quantity'] ?><!--</p>-->
                        <div class="text-muted mb-0">
                            <div class="d-inline-block mx-auto">
                                <div class="input-group">
                                    <button type="button" class="btn btn-outline-secondary btn-number"
                                            style="margin: 4px 0"
                                            disabled="disabled">
                                        Quantity:
                                    </button>
                                    <span class="input-group-prepend" style="margin: 4px 0">
                                <button type="button" class="btn btn-outline-secondary btn-number"
                                        data-type="minus" data-field="quant[1]">
                                    <span class="fa fa-minus"></span>
                                </button>
                            </span>
                                    <input type="text" style="margin: 4px 0;width: 40px; max-width: 40px;"
                                           name="quant[1]"
                                           class="form-control input-number text-center"
                                           value="<?= $each['quantity'] ?>" min="1"
                                           max="100" id="quantity-cart-<?= $each['id_product'] ?>">
                                    <span class="input-group-append" style="margin: 4px 0">
                                <button type="button" class="btn btn-outline-secondary btn-number" data-type="plus"
                                        data-field="quant[1]"
                                        onclick="console.log(document.querySelector('#quantity-cart').value)">
                                    <span class="fa fa-plus"></span>
                                </button>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="badge rounded-pill badge-success" style="color: black; font-size: 13px">
                    <p class="line-through mb-4"><?= number_format($each['price']) ?> ₫</p>
                    <span class="discounts" style="right: 30px; top: 36px"><strong><span class="fa-solid fa-heart"
                                                                                         aria-hidden="true"></span> <?php echo $each['name_sale']; ?> </strong></span>
                    <p class="text-danger"><?= number_format($each['d_price']) ?> ₫</p>
                    <button class="border-0 text-muted button-delete-item"
                            value="<?= $each['id_product'] ?>">Xoá</button>
                </span>

            </li>
        <?php } ?>

    </ul>
</div>
<?php if (isset($_GET['act']) && $_GET['act'] === "deleteAll") {
    $_SESSION['carts'] = [];
} ?>