<table class="table" id="dataTable" width="100%" cellspacing="0">
    <div class="form-group">
        <label for="">Title: <?= $detailProduct['title_product'] ?></label>
    </div>
    <div class="form-group">
        <label for="">Name Product: <?= $detailProduct['name_product'] ?> </label>
    </div>
    <div class="form-group">
        <label for="">Price: <?= $detailProduct['price'] ?></label>
    </div>
    <div class="form-group">
        <label for="">Quantity: <?= $detailProduct['quantity'] ?></label>
    </div>
    <div class="form-group">
        <label for="">Stars: <?= $detailProduct['n_stars'] ?></label>
    </div>
    <div class="form-group">
        <label for="">Reviews: <?= $detailProduct['n_reviews'] ?></label>
    </div>
    <div class="form-group">
        <label for="">Status: <?= $detailProduct['status'] ?></label>
    </div>
    <div class="form-group">
        <label for="">Description: <?= $detailProduct['description'] ?></label>
    </div>
    <div class="form-group">
        <label for="">
            Size:
            <ul>
        <?php
        $arr = explode('/', $detailProduct['size']);
        foreach ($arr as $each) {
            ?>
            <li for=""><?= $each ?></li>
        <?php } ?>
        </label>
        </ul>
    </div>
    <div class="form-group">
        <label for="">Image:
            <img style="max-width: 150px" src="../public/<?= $detailProduct['main_image'] ?>" alt="">
            <img style="max-width: 150px" src="../public/<?= $detailProduct['image1'] ?>" alt="">
            <img style="max-width: 150px" src="../public/<?= $detailProduct['image2'] ?>" alt="">
            <img style="max-width: 150px" src="../public/<?= $detailProduct['image3'] ?>" alt="">
            <img style="max-width: 150px" src="../public/<?= $detailProduct['image4'] ?>" alt="">
        </label>
    </div>
</table>