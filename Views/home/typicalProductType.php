<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
    foreach ($data_typical_products as $each) {
        ?>
        <div class="col">
            <div class="card border-0">
                <a href="?page=product&id=<?= $each ?>"><img src="public/<?php echo $each['url_image'] ?>" class="card-img-top"
                                 alt="Hollywood Sign on The Hill"/>
                <div class="card-body text-center">
                    <a href="#" class="fs-5 fw-bold gray-darker nodeco">
                        <?php echo $each['title'] ?>
                    </a>
                    <p class="card-text" style="min-height: 120px !important;">
                        <?php echo $each['description'] ?>
                    </p>
                </div>
                </a>
            </div>
        </div>
    <?php } ?>
</div>