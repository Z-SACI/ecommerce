<?php
    include '../views/layout/header.php';
    include '../models/database.php';
    include '../models/products.php';

    $products = new products();
    $product_list = $products -> products_getAll($db);

    include '../views/admin_product_list_view.php';
    include '../views/layout/footer.php';
?>