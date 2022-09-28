<link rel="stylesheet" href="public/css/banners.css">

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


<div id="latest-product-container" class="bg-white row nomarg mt-5 ">
    <div class="owl-carousel owl-theme owl-gbr owl-gbr-hot mrg-normal">
        <?php foreach ($data_list_latest_products as $each) { ?>
            <div class="item mt-3">
                <div style="position: relative;">
                    <a class="product_img_link pro_img_home" title="<?php echo $each['name_product'] ?>"
                       href="https://giaybongro.vn/giay-nike-chinh-hang/lebron-18-low-acg-1293.html">
                        <img src="public/<?php echo $each['main_image'] ?>" alt="<?php echo $each['name_product'] ?>"
                             class="img-responsive image-new-product">
                        <span class="gitf hide"><img src=''></span>
                        <div style="position: absolute;bottom: 12px;" class="new_arrival"><span
                                    class="glyphicon glyphicon-flash" aria-hidden="true"></span> <strong>Hàng mới
                                về</strong></div>
                        <div class="b_dis_home">
                            <span class="discounts"><strong><span class="glyphicon glyphicon-heart"
                                                                  aria-hidden="true"></span> Giảm tới 22% </strong></span>
                        </div>
                        <span class="group hide">Hàng mới về</span>
                    </a>
                </div>

                <div class="caption padpro">
                    <h4 class="f13 nomargin"><a class="gray-darker nodeco" title="<?php echo $each['name_product'] ?>"
                                                href="https://giaybongro.vn/giay-nike-chinh-hang/lebron-18-low-acg-1293.html"><strong>
                                <?php echo $each['title_product'] ?>
                            </strong></a></h4>
                    <div class="gray-light f11 line-height-normal">Nike chính hãng</div>
                    <div class="content_price">
                        <span class="price"><?php echo $each['price'] ?> <span class="f13">₫</span></span>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="gray-light line-through">4.450.000 <span
                                    class="f13">₫</span></span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<style>

</style>