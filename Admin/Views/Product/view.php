<ul style="display: flex; flex-wrap: wrap">

<?php
foreach ($allProducts as $each){ ?>
    <li>
        <a href="#">
            <h3><?=$each['title_product'] ?></h3>
            <span><?=$each['price']?></span>
            <span><?=$each['quantity']?></span>
            <img src="../public/<?php echo $each['main_image'] ?>" alt="">
        </a>
    </li>
<?php }?>
</ul>