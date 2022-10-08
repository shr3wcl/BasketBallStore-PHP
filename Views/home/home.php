
<div id="carouselExampleIndicators" class="carousel slide carousel-fade carousel-dark mb-5 position-relative"
     data-bs-ride="true" data-ride="carousel">
    <div class="carousel-indicators position-absolute">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#"><img src="public/imgs/Banner/sale.png" class="d-block w-100" alt=""></a>
        </div>
        <?php
        foreach ($data_banner as $each) {
            ?>
            <div class="carousel-item">
                <a href="#"><img src="public/<?php echo $each['url_banner'] ?>" class="d-block w-100" alt=""></a>
            </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach ($data_typical_products as $each) {
        ?>
        <div class="col">
            <div class="card border-0">
                <a href="#"><img src="public/<?php echo $each['url_image'] ?>" class="card-img-top"
                                 alt="Hollywood Sign on The Hill"/></a>
                <div class="card-body text-center">
                    <a href="#"><h5 class="card-title"><?php echo $each['title'] ?></h5></a>
                    <p class="card-text" style="min-height: 120px !important;">
                        <?php echo $each['description'] ?>
                    </p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<div id="latest-product-container" class="bg-white row compare mt-5" style="margin: 0 2px">
    <div class="owl-carousel owl-theme owl-gbr owl-gbr-hot mrg-normal">
        <?php foreach ($data_newest_shoes as $each) { ?>
            <div class="item mt-3 position-relative">
                <div style="position: relative;">
                    <a class="product_img_link pro_img_home" title="<?php echo $each['name_product'] ?>"
                       href="#">
                        <img src="public/<?php echo $each['main_image'] ?>" alt="<?php echo $each['name_product'] ?>"
                             class="img-responsive image-new-product">
                        <span class="gitf hide"><img src=''></span>
                        <div style="position: absolute;bottom: 12px;" class="new_arrival">
                            <i class="fa-solid fa-bolt me-1"></i>
                            <strong>New</strong>
                        </div>
                        <div class="b_dis_home">
                            <span class="discounts">
                                <strong>
                                    <i class="fa-solid fa-heart"></i> <?php echo $each['name_sale'];?> </strong>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="caption description-container">
                    <h4 class="f13 fs-6 mb-0"><a class="gray-darker nodeco" title="<?php echo $each['name_product'] ?>"
                                                href="#"><strong>
                                <?php echo $each['title_product'] ?>
                            </strong></a></h4>
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

<div class="mt-4">
    <div class="d-flex justify-content-between flex-wrap">
        <a href="#!" class=""><h4>SẢN PHẨM NỔI BẬT</h4></a>
        <ul class="d-flex" style="flex-wrap: nowrap">
            <li class="me-3"><a href="#">Giày Anta</a></li>
            <li class="me-3"><a href="#">Giày Adidas</a></li>
            <li class="me-3"><a href="#">Giày Nike</a></li>
            <li class="me-3"><a href="#">Giày Peak</a></li>
            <li class="me-3"><a href="#">Giày Lining</a></li>
            <li class="me-3"><a href="#">Giày trẻ em</a></li>
            <li class="me-3"><a href="#">Xem thêm</a></li>
        </ul>
    </div>
    <div class="bg-white mt-2">
        <ul class="gridpro d-flex flex-wrap">
            <?php foreach ($data_outstanding_product as $each) {?>
                <li class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-gr grid li-normal">
                    <a class="product_img_link pro_img_home gray-darker nodeco " title=" Zoom Freak 3 Low Battery " href="#" >
                        <img src="public/<?php echo $each['main_image']?>" alt=" Zoom Freak 3 Low Battery " class="img-responsive front" >
                        <span class="gitf hide"><img src=''></span>
                        <div class="b_dis_home">
                            <span class="discounts"><strong><span class="fa-solid fa-heart" aria-hidden="true"></span> <?php echo $each['name_sale'];?> </strong></span>
                        </div>
                        <span class="group hide">Sản phẩm nổi bật</span>
                        <div class="caption padpro">
                            <h4 class="f13 nomargin"><strong><?php echo $each['title_product'] ?></strong></h4>
                            <div class="gray-light f11 line-height-normal mb-0"><?php echo $each['p_type_name'];?></div>
                            <div class="content_price">
                                <span class="price" ><?php echo number_format($each['d_price']);?> ₫</span>
                                &nbsp;&nbsp;&nbsp;&nbsp;<span class="gray-light line-through f13"><?php echo number_format($each['price']) ?> ₫</span>
                            </div>
                        </div>
                    </a>
                </li>

            <?php } ?>
        </ul>
    </div>
</div>

<div class="mt-4">
    <div class="d-flex justify-content-between flex-wrap">
        <a href="#!" class=""><h4>PANTS</h4></a>
    </div>
    <div id="latest-product-container" class="bg-white row compare mt-2" style="margin: 0 2px">
        <div class="owl-carousel owl-theme owl-gbr owl-gbr-hot mrg-normal">
            <?php foreach ($data_newest_pants as $each) { ?>
                <div class="item mt-3 position-relative">
                    <div style="position: relative;">
                        <a class="product_img_link pro_img_home" title="<?php echo $each['name_product'] ?>"
                           href="#">
                            <img src="public/<?php echo $each['main_image'] ?>" alt="<?php echo $each['name_product'] ?>"
                                 class="img-responsive image-new-product">
                            <span class="gitf hide"><img src=''></span>
                            <div style="position: absolute;bottom: 12px;" class="new_arrival">
                                <i class="fa-solid fa-bolt me-1"></i>
                                <strong>New</strong>
                            </div>
                            <div class="b_dis_home">
                            <span class="discounts">
                                <strong>
                                    <i class="fa-solid fa-heart"></i> <?php echo $each['name_sale'];?> </strong>
                            </span>
                            </div>
                        </a>
                    </div>
                    <div class="caption description-container">
                        <h4 class="f13 fs-6 mb-0"><a class="gray-darker nodeco" title="<?php echo $each['name_product'] ?>"
                                                     href="#"><strong>
                                    <?php echo $each['title_product'] ?>
                                </strong></a></h4>
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

<div class="mt-4">
    <div class="d-flex justify-content-between flex-wrap">
        <a href="#!" class=""><h4>SHIRT</h4></a>
    </div>
    <div id="latest-product-container" class="bg-white row compare mt-2" style="margin: 0 2px">
        <div class="owl-carousel owl-theme owl-gbr owl-gbr-hot mrg-normal">
            <?php foreach ($data_newest_shirts as $each) { ?>
                <div class="item mt-3 position-relative">
                    <div style="position: relative;">
                        <a class="product_img_link pro_img_home" title="<?php echo $each['name_product'] ?>"
                           href="#">
                            <img src="public/<?php echo $each['main_image'] ?>" alt="<?php echo $each['name_product'] ?>"
                                 class="img-responsive image-new-product">
                            <span class="gitf hide"><img src=''></span>
                            <div style="position: absolute;bottom: 12px;" class="new_arrival">
                                <i class="fa-solid fa-bolt me-1"></i>
                                <strong>New</strong>
                            </div>
                            <div class="b_dis_home">
                            <span class="discounts">
                                <strong>
                                    <i class="fa-solid fa-heart"></i> <?php echo $each['name_sale'];?> </strong>
                            </span>
                            </div>
                        </a>
                    </div>
                    <div class="caption description-container">
                        <h4 class="f13 fs-6 mb-0"><a class="gray-darker nodeco" title="<?php echo $each['name_product'] ?>"
                                                     href="#"><strong>
                                    <?php echo $each['title_product'] ?>
                                </strong></a></h4>
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

<style>
    .discounts{
        font-size: 10px;
        position: absolute;
        top: 30px;
        background-color: #E91E63;
        padding: 1px 6px;
        border-radius: 2rem;
    }
    .new_arrival{
        font-size: 12px;
        position: absolute;
        bottom: 12px;
        background-color: #D62025;
        padding: 2px 8px;
        border-radius: 4rem;
    }
    ul{
        list-style: none;
    }
</style>