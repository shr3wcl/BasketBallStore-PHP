<?php
//    $totalProducts = 0;
//    foreach ($listProducts as $each){
//        $totalProducts += $each['d_price'];
//    }
//    $total = $totalProducts + 30000;
//    $_SESSION['totalCart'] = $total;
?>
<div>
    <a class="text-danger fw-semibold" id="clear-cart" href="?page=cart&act=clear">Xoá giỏ hàng</a>
    <ul class="list-group list-group-light">
        <li class="list-group-item d-flex justify-content-between align-items-center mt-4 mb-4">

            <div class="d-flex align-items-center" style="width: 100% !important;">
                <div class="ms-3 w-100">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="fw-bold m-0">Tổng giá sản phẩm: </p>
                        <p class="fw-bold m-0 float-end" id="total-cost-product"><?= number_format($_SESSION['totalCart']-30000) ?> đ</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="fw-bold ">Phí vận chuyển: </p>
                        <p class="fw-bold float-end"><?= number_format(30000) ?> đ</p>
                    </div>
                    <hr class="m-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="fw-bold">Tổng tiền: </p>
                        <p class="fw-bold text-danger float-end" id="total-cost"><?= number_format($_SESSION['totalCart']) ?> đ</p>
                    </div>
                    <?php if(isset($_SESSION['user'])){ ?>
                        <?php if($_SESSION['user']['address']){ ?>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="fw-bold">Address:</p>
                                <p class="fw-bold float-end"><?= $_SESSION['user']['address'] ?></p>
                            </div>
                            <a href="?page=cart&act=pay" class="btn btn-primary float-end" onclick="alert('Thanh toán thành công')">Thanh toán</a>
                        <?php }else{ ?>
                            <div class="float-end">
                                <p class="text-danger">Bạn cần cập nhập địa chỉ để tiến hành thanh toán</p>
                                <a href="?page=account" class="float-end">Cập nhập ở đây</a>
                            </div>
                        <?php } ?>
                    <?php }else{ ?>
                        <div class="float-end d-flex align-content-center justify-content-center">
                            <p class="text-danger fw-bold m-0 m-2">Bạn cần đăng nhập để tiến hành thanh toán</p>
                            <a href="?page=login&act=pay" class="btn btn-primary ">Đăng nhập</a>
                        </div>
                    <?php } ?>

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
                        <?php if($each['size']){ ?>
                            <p class="text-muted mb-0"><strong>Size: </strong><?= $each["size"] ?></p>
                        <?php } ?>
                        <div class="text-muted mb-0">
                            <div class="d-inline-block mx-auto">
                                <div class="input-group">
                                    <button type="button" class="btn btn-outline-secondary btn-number"
                                            style="margin: 4px 0"
                                            disabled="disabled">
                                        Quantity:
                                    </button>
                                    <span class="input-group-prepend" style="margin: 4px 0">
                                <button type="button" id="minus-<?= $each['id_product'].'-'.$each['size'] ?>" class="btn btn-outline-secondary btn-number btn-update-cart"
                                        data-type="minus" data-field="<?= 'quant_'. $each['id_product'].$each['size'] .'[1]' ?>">
                                    <span class="fa fa-minus"></span>
                                </button>
                            </span>
                                    <input type="text" disabled style="margin: 4px 0;width: 44px;padding: 0; max-width: 40px;"
                                           name="<?= 'quant_'. $each['id_product'].$each['size'] .'[1]' ?>"
                                           class="form-control input-number text-center"
                                           value="<?= $each['quantity'] ?>" min="1"
                                           max=<?= $each['restQuantity']?> id="quantity-cart-<?= $each['id_product'] ?>">
                                    <span class="input-group-append" style="margin: 4px 0">
                                <button type="button" id="plus-<?= $each['id_product'].'-'.$each['size']  ?>" class="btn btn-outline-secondary btn-number btn-update-cart" data-type="plus"
                                        data-field="<?= 'quant_'. $each['id_product'].$each['size'] .'[1]' ?>">
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