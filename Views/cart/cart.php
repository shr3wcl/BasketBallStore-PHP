<?php
$data = $_SESSION['carts'];
if (isset($_SESSION['carts']) && $_SESSION['carts']) { ?>
    <?php require_once "product.php" ?>
<?php } else { ?>
    <?php require_once "empty.php" ?>
<?php } ?>