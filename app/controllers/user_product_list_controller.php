<?php
    include '../views/layout/header.php';
    include '../models/database.php';
    include '../models/products.php';

    $products = new products();
    $product_list = $products -> products_getAll($db);

    //var_dump($product_list);

    include '../views/user_product_list_view.php';
?>