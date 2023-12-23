<?php

$listProducts = $_SESSION['carts'] ?? [];
if ($listProducts) { ?>
    <?php require_once "product.php" ?>
<?php } else { ?>
    <?php require_once "empty.php" ?>
<?php } ?>