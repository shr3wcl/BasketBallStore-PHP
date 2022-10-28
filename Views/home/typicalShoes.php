<div class="mt-4">
    <div class="d-flex justify-content-between flex-wrap">
        <a href="#!" class=""><h4>SẢN PHẨM NỔI BẬT</h4></a>
        <ul class="d-flex" style="flex-wrap: nowrap">
            <?php foreach ($listProductTypeShoes as $each){ ?>
                <li class="me-3"><a href="?page=product&id=<?= $each["id_product_type"] ?>"><?= $each['name_pt'] ?></a></li>
            <?php } ?>
        </ul>
    </div>
    <div class="bg-white mt-2">
        <ul class="gridpro d-flex flex-wrap">
            <?php foreach ($data_outstanding_product as $each) {?>
                <li class="col-xs-6 col-sm-3 col-md-3 col-lg-3 col-gr grid li-normal">
                    <a class="product_img_link pro_img_home gray-darker nodeco " title=" Zoom Freak 3 Low Battery " href="?page=detail&id=<?= $each['id_product'] ?>" >
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