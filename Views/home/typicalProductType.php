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