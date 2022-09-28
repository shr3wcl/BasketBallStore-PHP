<link rel="stylesheet" href="../public/css/banner.css">
<div id="carouselExampleDark" class="carousel carousel-dark mb-4" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <?php
        foreach ($data_banner as $each) {
            ?>
            <div class="carousel-item active">
                <a href="#"><img src="public/<?php echo $each['url_banner'] ?>" class="d-block w-100" alt=""></a>
            </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4">
<!--    <div class="col">-->
<!--        <div class="card border-0">-->
<!--            <a href="#"><img src="public/imgs/Banner/ball.jpg" class="card-img-top"-->
<!--                             alt="Hollywood Sign on The Hill"/></a>-->
<!--            <div class="card-body text-center">-->
<!--                <a href="#"><h5 class="card-title">Basketball ball</h5></a>-->
<!--                <p class="card-text">-->
<!--                    With super durable PU leather material, the leather grip is more effective, wear-resistant,-->
<!--                    suitable for outdoor use, providing a better feeling of holding the ball-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col">-->
<!--        <div class="card border-0">-->
<!--            <a href="#"><img src="public/imgs/Banner/socks.jpg" class="card-img-top" alt="Palm Springs Road"/></a>-->
<!--            <div class="card-body text-center">-->
<!--                <a href="#"><h5 class="card-title">NBA socks</h5></a>-->
<!--                <p class="card-text">-->
<!--                    Thick, elastic material helps heels, feet less friction inside the shoes, easy to cause blisters,-->
<!--                    foot blisters, redness, inlaid but also an enhancement accessory with your shoes.-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col">-->
<!--        <div class="card border-0">-->
<!--            <a href="#"><img src="public/imgs/Banner/uniform.jpg" class="card-img-top"-->
<!--                             alt="Los Angeles Skyscrapers"/></a>-->
<!--            <div class="card-body text-center">-->
<!--                <a href="#"><h5 class="card-title">Jersey VBA</h5></a>-->
<!--                <p class="card-text">Giaybongro.vn is the official agent to distribute the Jersey clothing line of clubs-->
<!--                    competing in the top professional basketball tournament in Vietnam VBA.</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>
