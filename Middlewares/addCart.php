<?php
$size = $_POST['size'] ?? "";
$quantity = $_POST['quantity'] ?? "";

if($size && $quantity){
    echo "Đã thêm thành công";
}else{
    echo $size . $quantity;
}
