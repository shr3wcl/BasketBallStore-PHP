<div class="mt-4">
    <div class="d-flex justify-content-between flex-wrap">
        <a href="?page=product&id=6" class="gray-darker fw-bold fs-4">ÁO BÓNG RỔ</a>
    </div>
    <div id="latest-product-container" class="bg-white row compare mt-2" style="margin: 0 2px">
        <div class="owl-carousel owl-theme owl-gbr owl-gbr-hot mrg-normal">
            <?php foreach ($data_newest_shirts as $each) { ?>
                <div class="item mt-3 position-relative">
                    <div style="position: relative;">
                        <a class="product_img_link pro_img_home" title="<?php echo $each['name_product'] ?>"
                           href="?page=detail&id=<?= $each['id_product'] ?>">
                            <img src="public/<?php echo $each['main_image'] ?>" alt="<?php echo $each['name_product'] ?>"
                                 class="img-responsive image-new-product">
                            <span class="gitf hide"><img src=''></span>
                            <div class="b_dis_home">
                            <span class="discounts">
                                <strong>
                                    <i class="fa-solid fa-heart"></i> <?php echo $each['name_sale'];?> </strong>
                            </span>
                            </div>
                        </a>
                    </div>
                    <div class="caption description-container">
                        <a class="gray-darker nodeco fw-semibold" title="<?php echo $each['name_product'] ?>"
                                                     href="?page=detail&id=<?= $each['id_product'] ?>">
                                    <?php echo $each['title_product'] ?></a>
                        <div class="gray-light f11 line-height-normal mb-2" style="color: #999999; font-size: 12px"><?php echo $each['p_type_name'];?></div>
                        <div class="content_price">
                            <span class="price text-danger"> <span class=""><?php echo number_format($each['d_price']);?> ₫</span></span>
                            &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-decoration-line-through fs-7" style="color: #999999"><?php echo number_format($each['price']) ?><span
                                    class="f13">₫</span></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>