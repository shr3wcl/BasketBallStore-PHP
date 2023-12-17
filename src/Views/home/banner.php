<div id="carouselExampleIndicators" class="carousel slide carousel-fade carousel-dark mb-5 position-relative"
     data-bs-ride="true" data-ride="carousel">
    <div class="carousel-indicators position-absolute">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <?php for($i = 1; $i < sizeof($data_banner); $i++){?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i?>"
                    aria-label="Slide <?= $i?>"></button>
        <?php } ?>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="#"><img src="public/<?= $data_banner[0]['url_banner'] ?>" class="d-block w-100" alt=""></a>
        </div>
        <?php
        for ($each = 1; $each < sizeof($data_banner); $each++) {
            ?>
            <div class="carousel-item">
                <a href="#"><img src="public/<?php echo $data_banner[$each]['url_banner'] ?>" class="d-block w-100" alt=""></a>
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